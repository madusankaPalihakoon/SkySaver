<?php

namespace Src\Classes;

use Src\Config\Execute;


class Airport
{
  private $execute;
  public function __construct()
  {
    $this->execute = new Execute();
  }

  public function getAirports()
  {
    $sql = "SELECT `airport_id`, `airport_code`, `airport_name`, `city`, `country`, `terminal_number`, `gate_number` FROM `airportdetails`";

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
