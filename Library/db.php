<?php
class db
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'store_php';
    const DB_USER = 'root';
    const DB_PASS = '';
    private static $instance = NULL;
    public function __construct()
    {
    }
    private function __clone()
    {
    }
    public static function getInstance()
    {
        try {
            if (!isset(self::$instance)) {
                self::$instance = new PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME, self::DB_USER, self::DB_PASS);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return self::$instance;
    }
    public static function setCharsetEncoding()
    {
        if (self::$instance == NULL) {
            self::getInstance();
        }
        self::$instance->exec("SET NAMES 'utf8'");
    }
}