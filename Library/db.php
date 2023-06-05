<?php
class db
{
    const db_host = 'containers-us-west-73.railway.app';
    const db_name = 'railway';
    const db_username = 'root';
    const port = "5911";
    const db_password = 'mWmWQfVYx0cXNmHowbQw';
    private static $instance = NULL;
    
    public static function getInstance()
    {
        try {
            if (!isset(self::$instance)) {
                self::$instance = new PDO('mysql:host=' . self::db_host . '; port=' . self::port . '; dbname=' . self::db_name, self::db_username, self::db_password);
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