<?php
class Model extends db{
    public $db;
    public function __construct(){
        $this->db = new db();
    }
    

}