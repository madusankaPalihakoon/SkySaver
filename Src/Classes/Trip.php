<?php

namespace Src\Classes;

use Src\Config\Execute;


class Trip
{
  private $execute;
  public function __construct()
  {
    $this->execute = new Execute();
  }

  public function getOneWayTrip($from, $to, $date)
  {
    $sql = "SELECT 
                f.flight_id,
                f.airline_name,
                f.flight_number,
                a1.airport_code AS departure_airport_code,
                a2.airport_code AS arrival_airport_code,
                CONCAT(s.departure_date, ' ', s.departure_time) AS departure_date_time,
                CONCAT(s.arrival_date, ' ', s.arrival_time) AS arrival_date_time,
                f.available_seats,
                f.class_of_service
            FROM 
                schedule s
            INNER JOIN 
                flightdetails f ON s.flight_id = f.flight_id
            INNER JOIN 
                airportdetails a1 ON s.from_airport_id = a1.airport_id
            INNER JOIN 
                airportdetails a2 ON s.to_airport_id = a2.airport_id
            WHERE 
                a1.airport_code = :from_airport_code AND
                a2.airport_code = :to_airport_code AND
                s.departure_date = :date";

    $bindings = [
      ':from_airport_code' => $from,
      ':to_airport_code' => $to,
      ':date' => $date
    ];

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
