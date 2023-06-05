<?php
//model get data
require_once './Models/productsModel.php';
class ProductController extends BaseController{
    public function Index(){
        $data = new Products();
        $products = $data->getAllProducts();
        return $this->View('Layouts.layout','products.index',['products'=>$products,'title'=>'Home']);
    }
    public function Category()
    {
        return $this->View('Layouts.layout','products.category', ['title'=>'Category']);
    }

    public function Contact()
    {
        return $this->View('Layouts.layout','products.contact',['title'=>'Contact']);
        
    }
    public function about()
    {
        return $this->View('Layouts.layout','pages.about',['title'=>'About']);
    }
}