<?php

namespace App\Models;

use PDOException;
use App\Core\DbConnect;
use App\Entities\Product;
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

    public function addProduct(Product $product, Category $category)
    {
        try {
            $requete = $this->connection->prepare("INSERT INTO product (name_product, photo_product, price_product, order_product, id_category) VALUES (:name_product, :photo_product, :price_product, :order_product, :id_category)");
            $requete->bindValue(':name_product', $product->getName_product());
            $requete->bindValue(':photo_product', $product->getPhoto_product());
            $requete->bindValue(':price_product', $product->getPrice_product());
            $requete->bindValue(':order_product', $product->getOrder_product());
            $requete->bindValue(':id_category', $category->getId_category());
            $requete->execute();
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
    public function editProduct(Product $product)
    {
        try {
            if ($product->getPhoto_product() == '') {
                $requete = $this->connection->prepare("UPDATE product SET name_product=:name_product, price_product=:price_product WHERE id_product=:id_product");
            } else {
                $requete = $this->connection->prepare("UPDATE product SET name_product=:name_product, photo_product=:photo_product, price_product=:price_product WHERE id_product=:id_product");
                $requete->bindValue(':photo_product', $product->getPhoto_product());
            }
            $requete->bindValue(':id_product', $product->getId_product());
            $requete->bindValue(':name_product', $product->getName_product());
            $requete->bindValue(':price_product', $product->getPrice_product());
            $requete->execute();
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function deleteProduct(Product $product)
    {
        try {
            $requete = $this->connection->prepare("DELETE FROM product WHERE id_product=:id_product");
            $requete->bindValue(':id_product', $product->getId_product());
            $requete->execute();
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function getPhotoByProductId(Product $product)
    {
        try {
            $requete = $this->connection->prepare("SELECT photo_product FROM product WHERE id_product=:id_product");
            $requete->bindValue(':id_product', $product->getId_product());
            $requete->execute();
            $result = $requete->fetch();
            return $result;
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }

    public function orderProduct(Product $product)
    {
        try {
            $requete = $this->connection->prepare("UPDATE product SET order_product=:order_product WHERE id_product=:id_product");
            $requete->bindValue(':id_product', $product->getId_product());
            $requete->bindValue(':order_product', $product->getOrder_product());
            $requete->execute();
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}
