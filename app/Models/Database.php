<?php
namespace App\Models;
class Database {
    const DB_CONFIG = [
        "servername" => DB_HOST,
        "user" => DB_USER,
        "pwd" => DB_PASS,
        "dbName" => DB_NAME
    ];

    protected $servername = self::DB_CONFIG["servername"];
    protected $user = self::DB_CONFIG["user"];
    protected $pwd = self::DB_CONFIG["pwd"];
    protected $dbName = self::DB_CONFIG["dbName"];

    public function connectDb() {

        try {
            $query_string = "mysql:host=" . $this->servername . ";dbName=" . $this->dbName;
            $connection = new \PDO($query_string, $this->user, $this->pwd);
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            return $connection;
        } catch (\PDOException $error) {
            die(var_dump("Connection failed: " . $error->getMessage()));
        }
    }
}