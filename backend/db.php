<?php

class Database
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            $host = 'localhost';
            $dbname = 'game_library';
            $username = 'root';
            $password = '';

            try {
                self::$instance = new PDO(
                    "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
                    $username,
                    $password
                );
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Database connection failed: ' . $e->getMessage());
            }
        }

        return self::$instance;
    }
}
