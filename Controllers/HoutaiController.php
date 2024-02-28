<?php

namespace App\Controllers;

use App\Core\Validator;
use App\Entities\User;
use App\Entities\Category;
use App\Entities\Product;
use App\Models\UserModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class HoutaiController extends Controller
{
    public function index()
    {
        if (isset($_SESSION['name'])) {
            $this->render('houtai/index');
        } else {
            $this->redirectedToRoute('houtai', 'login');
        }
    }

    public function login()
    {
        if (!isset($_SESSION['name'])) {
            $this->render('houtai/login');
            if (isset($_SESSION['errorMessage'])) {
?>
                <script>
                    errorMsg(<?= json_encode($_SESSION['errorMessage']) ?>);
                </script>
<?php
                unset($_SESSION['errorMessage']);
            }
        } else {
            $this->redirectedToRoute('houtai', 'index');
        }
    }

    public function auth()
    {
        if (Validator::validatePost($_POST, ['name', 'password'])) {
            $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
            $password = htmlspecialchars($_POST['password'], ENT_QUOTES);

            $user = new User();
            $user->setName_user($name);
            $user->setPassword_user($password);

            $userModel = new UserModel();

            if ($userModel->isAuthentified($user)) {
                $_SESSION['name'] = $user->getName_user();
                $this->redirectedToRoute('houtai', 'index');
            } else {
                $_SESSION['errorMessage'] = "账号或密码错误";
                $this->redirectedToRoute('houtai', 'login');
            }
        } else {
            $_SESSION['errorMessage'] = "请输入账号和密码";
            $this->redirectedToRoute('houtai', 'login');
        }
    }

    public function logout()
    {
        session_destroy();
        $this->redirectedToRoute('houtai', 'login');
    }

    public function menu()
    {
        if (isset($_SESSION['name'])) {
            $categoryModel = new CategoryModel();
            $categoryData = $categoryModel->getCategory();

            $category = new Category();
            $productModel = new ProductModel();
            $productData = [];
            foreach ($categoryData as $key => $value) {
                $category->setId_Category($value->id_category);
                if (!empty($productModel->getProductByCategory($category))) {
                    array_push($productData, $productModel->getProductByCategory($category));
                } else {
                    array_push($productData, []);
                }
            }

            $data = [
                'category' => $categoryData,
                'product' => $productData
            ];

            //
            if (isset($_POST['editCategory'])) {
                if (Validator::validatePost($_POST, ['name'])) {
                    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);
                    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
                    $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                    $order = htmlspecialchars($_POST['order'], ENT_QUOTES);

                    $category = new Category();
                    $category->setId_category($id);
                    $category->setName_category($name);
                    $category->setDescription_category($description);
                    $category->setOrder_category($order);

                    $categoryModel = new CategoryModel();
                    $categoryModel->editCategory($category);
                    unset($_POST['addCategory']);
                }
                $this->redirectedToRoute('houtai', 'menu');
            } elseif (isset($_POST['deleteCategory'])) {
                if (Validator::validatePost($_POST, ['id'])) {
                    $id = htmlspecialchars($_POST['id'], ENT_QUOTES);

                    $category = new Category();
                    $category->setId_category($id);

                    $categoryModel = new CategoryModel();
                    $categoryModel->deleteCategory($category);
                    unset($_POST['deleteCategory']);
                }
                $this->redirectedToRoute('houtai', 'menu');
            }

            // editProduct
            if (isset($_POST['editProduct'])) {
                if (!empty($_FILES['photo']['tmp_name'])) {
                    // Verifier qu'il s'agit d'une image
                    $check = getimagesize($_FILES["photo"]["tmp_name"]);
                    if ($check !== false) {
                        // Generer un nom unique et stocke l'image
                        $tempName = $_FILES['photo']['tmp_name'];
                        $fileExtension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                        $uniqueName = uniqid() . '.' . $fileExtension;
                        $destinationPath = '../public/images/' . $uniqueName;

                        if (move_uploaded_file($tempName, $destinationPath)) {
                            $photo = $destinationPath;
                        } else {
                            echo "Failed to move the uploaded file.";
                        }
                    } else {
                        echo "Ce n'est pas une image !";
                    }
                } else $photo = '';

                if (Validator::validatePost($_POST, ['id_product', 'name', 'price'])) {
                    $id_product = htmlspecialchars($_POST['id_product'], ENT_QUOTES);
                    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
                    $price = htmlspecialchars($_POST['price'], ENT_QUOTES);

                    $product = new Product();
                    $product->setId_product($id_product);
                    $product->setName_product($name);
                    $product->setPhoto_product($photo);
                    $product->setPrice_product($price);

                    $productModel = new ProductModel();
                    $productModel->editProduct($product);
                }
                $this->redirectedToRoute('houtai', 'menu');
            } elseif (isset($_POST['deleteProduct'])) {
                if (Validator::validatePost($_POST, ['id_product'])) {
                    $id = htmlspecialchars($_POST['id_product'], ENT_QUOTES);
                    $product = new Product();
                    $product->setId_product($id);

                    $productModel = new ProductModel();
                    $productModel->deleteProduct($product);
                    unset($_POST['deleteProduct']);
                }
                $this->redirectedToRoute('houtai', 'menu');
            }

            $this->render('houtai/menu', $data);
        } else {
            $this->redirectedToRoute('houtai', 'login');
        }
    }

    public function addCategory()
    {
        if (isset($_SESSION['name'])) {
            if (Validator::validatePost($_POST, ['name'])) {
                $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
                $description = htmlspecialchars($_POST['description'], ENT_QUOTES);
                $order = htmlspecialchars($_POST['order'], ENT_QUOTES);

                $category = new Category();
                $category->setName_category($name);
                $category->setDescription_category($description);
                $category->setOrder_category($order);

                $categoryModel = new CategoryModel();
                $categoryModel->addCategory($category);
            }
            $this->redirectedToRoute('houtai', 'menu');
        } else {
            $this->redirectedToRoute('houtai', 'login');
        }
    }

    public function addProduct()
    {
        if (isset($_SESSION['name'])) {
            if (!empty($_FILES['photo']['tmp_name'])) {
                // Verifier qu'il s'agit d'une image
                $check = getimagesize($_FILES["photo"]["tmp_name"]);
                if ($check !== false) {
                    // Generer un nom unique et stocke l'image
                    $tempName = $_FILES['photo']['tmp_name'];
                    $fileExtension = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
                    $uniqueName = uniqid() . '.' . $fileExtension;
                    $destinationPath = '../public/images/' . $uniqueName;

                    if (move_uploaded_file($tempName, $destinationPath)) {
                        $photo = $destinationPath;
                    } else {
                        echo "Failed to move the uploaded file.";
                    }
                } else {
                    echo "Ce n'est pas une image !";
                }
            } else $photo = '';

            if (Validator::validatePost($_POST, ['name', 'price', 'id_category'])) {
                $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
                $price = htmlspecialchars($_POST['price'], ENT_QUOTES);
                $order = htmlspecialchars($_POST['order_product'], ENT_QUOTES);
                $id_category = htmlspecialchars($_POST['category'], ENT_QUOTES);

                $product = new Product();
                $category = new Category();
                $product->setName_product($name);
                $product->setPhoto_product($photo);
                $product->setPrice_product($price);
                $product->setOrder_product($order);
                $category->setId_category($id_category);

                $productModel = new ProductModel();
                $productModel->addProduct($product, $category);
            }
            $this->redirectedToRoute('houtai', 'menu');
        } else {
            $this->redirectedToRoute('houtai', 'login');
        }
    }

    public function orderMenu()
    {
        if (isset($_SESSION['name'])) {
            $content = trim(file_get_contents("php://input"));
            $decode = json_decode($content, true);

            $category = new Category();
            $product = new Product();
            $categoryModel = new CategoryModel();
            $productModel = new ProductModel();
            foreach ($decode['data']['order_cat'] as $key => $order_cat) {
                $category->setId_category($order_cat);
                $category->setOrder_category($key + 1);
                $categoryModel->orderCategory($category);

                foreach ($decode['data']['order_prod'][$key] as $key2 => $order_prod) {
                    $product->setId_product($order_prod);
                    $product->setOrder_product($key2 + 1);
                    $productModel->orderProduct($product);
                }
            }

            $msg = "保存成功！";
            echo json_encode($msg);
        } else {
            $this->redirectedToRoute('houtai', 'login');
        }
    }
}
