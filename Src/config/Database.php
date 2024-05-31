<?php

namespace Src\Config;

require_once __DIR__ . "/../../vendor/autoload.php";

use Dotenv\Dotenv;
use PDO;
use PDOException;

class Database
{
  private $host;
  private $database;
  private $username;
  private $password;
  private $pdo;

  public function __construct()
  {
    $dotenv = Dotenv::createImmutable(__DIR__ . "/../../");
    $dotenv->load();

    $this->host = $_ENV['DB_HOST'];
    $this->database = $_ENV['DB_NAME'];
    $this->username = $_ENV['DB_USER'];
    $this->password = $_ENV['DB_PASSWORD'];

    $this->connect();
  }

  private function connect()
  {
    $dsn = "mysql:host={$this->host};dbname={$this->database};charset=utf8";
    $options = [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    try {
      $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
    } catch (PDOException $e) {
      die('Connection failed: ' . $e->getMessage());
    }
  }

  public function getConnection()
  {
    return $this->pdo;
  }
}
