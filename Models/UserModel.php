<?php

namespace App\Models;

use PDOException;
use App\Core\DbConnect;
use App\Entities\User;

class UserModel extends Dbconnect
{
    public function isAuthentified(User $User)
    {
        try {
            $this->request = "SELECT id_user, name_user, password_user FROM user";
            $result = $this->connection->query($this->request);
            $list = $result->fetchAll();

            foreach ($list as $value) {
                if (($User->getName_user() == $value->name_user) && (password_verify($User->getPassword_user(), $value->password_user))) {
                    return true;
                }
            }
            return false;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}
