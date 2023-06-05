<?php
require_once "./Library/db.php";
class Products extends db
{
    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        $stmt = db::getInstance()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getProductById($id)
    {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = db::getInstance()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function addProduct($name, $price, $description, $image)
    {
        $sql = "INSERT INTO products (name, price, description, image) VALUES (:name, :price, :description, :image)";
        $stmt = db::getInstance()->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        $stmt->execute();
    }
    public function updateProduct($id, $name, $price, $description, $image)
    {
        $sql = "UPDATE products SET name = :name, price = :price, description = :description, image = :image WHERE id = :id";
        $stmt = db::getInstance()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':price', $price);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':image', $image);
        $stmt->execute();
    }
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = db::getInstance()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}