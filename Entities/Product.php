<?php

namespace App\Entities;

class Product
{
    private $id_product;
    private $name_product;
    private $photo_product;
    private $price_product;
    private $order_product;
    private $id_category;

    /**
     * Get the value of id_product
     */
    public function getId_product()
    {
        return $this->id_product;
    }

    /**
     * Set the value of id_product
     *
     * @return  self
     */
    public function setId_product($id_product)
    {
        $this->id_product = $id_product;

        return $this;
    }

    /**
     * Get the value of name_product
     */
    public function getName_product()
    {
        return $this->name_product;
    }

    /**
     * Set the value of name_product
     *
     * @return  self
     */
    public function setName_product($name_product)
    {
        $this->name_product = $name_product;

        return $this;
    }

    /**
     * Get the value of photo_product
     */
    public function getPhoto_product()
    {
        return $this->photo_product;
    }

    /**
     * Set the value of photo_product
     *
     * @return  self
     */
    public function setPhoto_product($photo_product)
    {
        $this->photo_product = $photo_product;

        return $this;
    }

    /**
     * Get the value of price_product
     */
    public function getPrice_product()
    {
        return $this->price_product;
    }

    /**
     * Set the value of price_product
     *
     * @return  self
     */
    public function setPrice_product($price_product)
    {
        $this->price_product = $price_product;

        return $this;
    }

    /**
     * Get the value of order_product
     */
    public function getOrder_product()
    {
        return $this->order_product;
    }

    /**
     * Set the value of order_product
     *
     * @return  self
     */
    public function setOrder_product($order_product)
    {
        $this->order_product = $order_product;

        return $this;
    }

    /**
     * Get the value of id_category
     */
    public function getId_category()
    {
        return $this->id_category;
    }

    /**
     * Set the value of id_category
     *
     * @return  self
     */
    public function setId_category($id_category)
    {
        $this->id_category = $id_category;

        return $this;
    }
}
