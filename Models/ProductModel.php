<?php

namespace App\Models;

use PDOException;
use App\Core\DbConnect;
use App\Entities\Category;

class ProductModel extends Dbconnect
{
    public function getProductByCategory(Category $category)
    {
        try {
            $requete = $this->connection->prepare("SELECT * FROM product WHERE id_category=:id_category ORDER BY order_product");
            $requete->bindValue(':id_category', $category->getId_category());
            $requete->execute();
            $results = $requete->fetchAll();
            return $results;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}
