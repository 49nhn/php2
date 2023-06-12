<?php
require_once "./Library/db.php";

class Category extends db
{
    public function getAllCategory()
    {
        $sql = "SELECT * FROM categories";
        $stmt = db::getInstance()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM categories WHERE id = :id";
        $stmt = db::getInstance()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    public function addCategory($name, $description)
    {
        $sql = "INSERT INTO categories (name, description) VALUES (:name, :description)";
        $stmt = db::getInstance()->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
    }
    public function updateCategory($id, $name, $description)
    {
        $sql = "UPDATE categories SET name = :name, description = :description WHERE id = :id";
        $stmt = db::getInstance()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->execute();
    }
    public function deleteCategory($id)
    {
        $sql = "DELETE FROM categories WHERE id = :id";
        $stmt = db::getInstance()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function getProductsByCategory($id)
    {
        $sql = "SELECT * FROM products WHERE category_id = :id";
        $stmt = db::getInstance()->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    

}