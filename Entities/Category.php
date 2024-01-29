<?php

namespace App\Entities;

class Category
{
    private $id_category;
    private $name_category;
    private $description_category;

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

    /**
     * Get the value of name_category
     */
    public function getName_category()
    {
        return $this->name_category;
    }

    /**
     * Set the value of name_category
     *
     * @return  self
     */
    public function setName_category($name_category)
    {
        $this->name_category = $name_category;

        return $this;
    }

    /**
     * Get the value of description_category
     */
    public function getDescription_category()
    {
        return $this->description_category;
    }

    /**
     * Set the value of description_category
     *
     * @return  self
     */
    public function setDescription_category($description_category)
    {
        $this->description_category = $description_category;

        return $this;
    }
}
