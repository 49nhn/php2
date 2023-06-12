<?php
require_once 'Models\categoryModel.php';

class CategoriesController extends BaseController {
    public function Index() {
        $categoryModel = new Category();
        $categories = $categoryModel->getAllCategory();
        return $this->View('Layouts.layout','Categories.index',['title'=>'Categories','Categories'=>$categories]);
    }

    public function getProductsByCategory(){
        $id = $_GET['id'];
        $categoryModel = new Category();
        $products = $categoryModel->getProductsByCategory($id);
        return $this->View('Layouts.layout','Categories.products',['title'=>'Products','Products'=>$products]);
    }
}