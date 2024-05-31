<?php

namespace Src\Config;

use Src\Config\Database;

require_once __DIR__ . "/../../vendor/autoload.php";

class Execute
{
  private $db;
  private $pdo;
  public function __construct()
  {
    $this->db = new Database();
    $this->pdo = $this->db->getConnection();
  }

  public function run($sql, $bindings = [])
  {
    try {
      $this->pdo->beginTransaction();

      $stmt = $this->pdo->prepare($sql);
      $stmt->execute($bindings);

      $this->pdo->commit();
      return $stmt;
    } catch (\PDOException $e) {
      $this->pdo->rollBack();
      return false;
    }
  }
}
