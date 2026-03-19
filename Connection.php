<?php

class Connection
{
    private static ?\PDO $connection = null;

    private static string $host = "localhost";
    private static string $dbname = "desafio_tecnico_ig7";
    private static string $port = "3306";
    private static string $charset = "utf8mb4";
    private static string $user = "root";
    private static string $password = "";

    public static function getInstance(): \PDO
    {
        try {

            $dsn = sprintf(
                "mysql:host=%s;port=%s;dbname=%s;charset=%s",
                self::$host,
                self::$port,
                self::$dbname,
                self::$charset
            );

            self::$connection = new \PDO($dsn, self::$user, self::$password);

        } catch (\PDOException $pdoException) {
            throw new \RuntimeException($pdoException->getMessage());
        }

        return self::$connection;
    }

    private function __construct()
    {

    }

    private function __clone()
    {

    }
}