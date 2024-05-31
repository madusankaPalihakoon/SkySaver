<?php

use Src\Classes\Airport;

require_once __DIR__ . "/../vendor/autoload.php";

function getAirportList()
{
  $airport = new Airport();
  $airports = $airport->getAirports();
  return $airports;
}
