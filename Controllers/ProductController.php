<?php

class ProductController extends BaseController{
    public function Index(){
        return $this->View('Layouts.layout','products.index',['title'=>'Product']);
    }
    public function Category()
    {
        return $this->View('products.category');
    }
    public function Contact()
    {
        return $this->View('Layouts.layout','products.contact',['title'=>'Contact']);
        
    }
}