<?php

use Src\Classes\Shedule;

require_once __DIR__ . "/../vendor/autoload.php";

function getSheduleDetails()
{
  $shedule = new Shedule();
  $sheduleDetails = $shedule->getShedule(5);
  return $sheduleDetails;
}
