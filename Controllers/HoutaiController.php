<?php

namespace App\Controllers;

use App\Core\Validator;
use App\Entities\User;
use App\Models\UserModel;

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
}
