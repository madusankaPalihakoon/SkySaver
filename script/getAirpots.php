<?php

use Src\Classes\Airport;

require_once __DIR__ . "/../vendor/autoload.php";

function getAirpotDetails()
{
  $airport = new Airport();
  $airports = $airport->getAirports();
  return $airports;
}
