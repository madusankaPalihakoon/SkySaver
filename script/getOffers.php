<?php

use Src\Classes\Offer;

require_once __DIR__ . "/../vendor/autoload.php";

function getOfferDetails()
{
  $offer = new Offer();
  $offerDetails = $offer->getOffers(3);
  return $offerDetails;
}
