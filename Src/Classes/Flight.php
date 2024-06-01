<?php

namespace Src\Classes;

use Src\Config\Execute;


class Flight
{
  private $execute;
  public function __construct()
  {
    $this->execute = new Execute();
  }
  public function getFlight()
  {
    $sql = "SELECT * FROM flightdetails";

    $bindings = [];

    try {
      $stmt = $this->execute->run($sql, $bindings);
      $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);

      if ($stmt->rowCount() === 0) {
        return [];
      }

      return $result;
    } catch (\PDOException $e) {
      return [];
    }
  }
}
