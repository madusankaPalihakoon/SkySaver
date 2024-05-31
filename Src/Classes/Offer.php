<?php

namespace Src\Classes;

use Src\Config\Execute;


class Offer
{
  private $execute;
  public function __construct()
  {
    $this->execute = new Execute();
  }

  public function getOffers($count)
  {
    $sql = "SELECT `offer_id`, `offer_subject`, `offer_details`, `offer_valid` FROM `offerdetails` LIMIT " . $count . "";

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
