<?php

namespace App\Models;

use PDOException;
use App\Core\DbConnect;
use App\Entities\Category;

class CategoryModel extends Dbconnect
{
    public function addCategory(Category $category)
    {
        try {
            $requete = $this->connection->prepare("INSERT INTO category (name_category,description_category,order_category) VALUES (:name_category, :description_category, :order_category)");
            $requete->bindValue(':name_category', $category->getName_category());
            $requete->bindValue(':description_category', $category->getDescription_category());
            $requete->bindValue(':order_category', $category->getOrder_category());
            $requete->execute();
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function getCategory()
    {;
        $this->request = "SELECT * FROM category ORDER BY order_category";
        $result = $this->connection->query($this->request);
        $list = $result->fetchAll();
        return $list;
    }
    public function editCategory(Category $category)
    {
        try {
            $requete = $this->connection->prepare("UPDATE category SET name_category=:name_category,description_category=:description_category WHERE id_category=:id_category");
            $requete->bindValue(':id_category', $category->getId_category());
            $requete->bindValue(':name_category', $category->getName_category());
            $requete->bindValue(':description_category', $category->getDescription_category());
            $requete->execute();
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function deleteCategory(Category $category)
    {
        try {
            $requete = $this->connection->prepare("DELETE FROM category WHERE id_category=:id_category");
            $requete->bindValue(':id_category', $category->getId_category());
            $requete->execute();
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function orderCategory(Category $category)
    {
        try {
            $requete = $this->connection->prepare("UPDATE category SET order_category=:order_category WHERE id_category=:id_category");
            $requete->bindValue(':id_category', $category->getId_category());
            $requete->bindValue(':order_category', $category->getOrder_category());
            $requete->execute();
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}
