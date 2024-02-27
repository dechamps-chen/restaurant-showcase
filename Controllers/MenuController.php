<?php

namespace App\Controllers;

use App\Entities\Category;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class MenuController extends Controller
{

    public function index()
    {
        $categoryModel = new CategoryModel();
        $categoryData = $categoryModel->getCategory();

        $category = new Category();
        $productModel = new ProductModel();
        $productData = [];
        foreach ($categoryData as $key => $value) {
            $category->setId_Category($value->id_category);
            if (!empty($productModel->getProductByCategory($category))) {
                array_push($productData, $productModel->getProductByCategory($category));
            } else {
                array_push($productData, []);
            }
        }

        $data = [
            'category' => $categoryData,
            'product' => $productData
        ];

        $this->render('menu/index', $data);
    }
}
