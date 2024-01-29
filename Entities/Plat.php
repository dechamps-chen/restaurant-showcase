<?php

namespace App\Entities;

class Plat
{
    private $id_plat;
    private $name_plat;
    private $photo_plat;
    private $id_category;

    /**
     * Get the value of id_plat
     */
    public function getId_plat()
    {
        return $this->id_plat;
    }

    /**
     * Set the value of id_plat
     *
     * @return  self
     */
    public function setId_plat($id_plat)
    {
        $this->id_plat = $id_plat;

        return $this;
    }

    /**
     * Get the value of nom_plat
     */
    public function getName_plat()
    {
        return $this->name_plat;
    }

    /**
     * Set the value of nom_plat
     *
     * @return  self
     */
    public function setName_plat($nom_plat)
    {
        $this->name_plat = $nom_plat;

        return $this;
    }

    /**
     * Get the value of photo_plat
     */
    public function getPhoto_plat()
    {
        return $this->photo_plat;
    }

    /**
     * Set the value of photo_plat
     *
     * @return  self
     */
    public function setPhoto_plat($photo_plat)
    {
        $this->photo_plat = $photo_plat;

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
