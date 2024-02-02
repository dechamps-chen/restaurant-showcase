<?php

namespace App\Core;

class Validator
{

    public static function validatePost(array $post, array $fields): bool
    {

        // Chaque champ est parcouru
        foreach ($fields as $field) {
            // on teste si les champs sont vides ou non présents
            if (empty($post[$field]) || !isset($post[$field])) {
                return false;
            }
        }
        return true;
    }
}
