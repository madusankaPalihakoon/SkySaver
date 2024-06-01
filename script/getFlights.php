<?php

use Src\Classes\Flight;

require_once __DIR__ . "/../vendor/autoload.php";

function getOfferDetails()
{
  $flight = new Flight();
  $flights = $flight->getFlight();
  return $flights;
}
