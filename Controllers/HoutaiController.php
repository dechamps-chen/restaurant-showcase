<?php

namespace App\Controllers;

use App\Core\Validator;
use App\Entities\User;
use App\Entities\Category;
use App\Models\UserModel;
use App\Models\CategoryModel;

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
            $category = $categoryModel->getCategory();
            $data = ['category' => $category];
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
            var_dump($_POST);
            // $this->redirectedToRoute('houtai', 'menu');
        } else {
            $this->redirectedToRoute('houtai', 'login');
        }
    }
}
