<?php

namespace Src\Classes;

use Src\Config\Execute;


class Shedule
{
  private $execute;
  public function __construct()
  {
    $this->execute = new Execute();
  }

  public function getShedule($count)
  {
    $sql = "SELECT 
              a1.airport_name AS from_airport_name,
              a1.airport_code AS from_airport_code,
              a2.airport_name AS to_airport_name,
              a2.airport_code AS to_airport_code,
              s.departure_date,
              s.departure_time,
              s.arrival_date,
              s.arrival_time,
              s.taxes_fees,
              s.base_fare,
              s.currency,
              f.class_of_service
            FROM 
                schedule s
            INNER JOIN 
                flightdetails f ON s.flight_id = f.flight_id
            INNER JOIN 
                airportdetails a1 ON s.from_airport_id = a1.airport_id
            INNER JOIN 
                airportdetails a2 ON s.to_airport_id = a2.airport_id
            LIMIT " . $count . "";

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
