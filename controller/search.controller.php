<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Src\Classes\Trip;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (isset($_POST['trip'])) {
    $trip = $_POST['trip'];

    switch ($trip) {
      case 'Round Trip':
        handleRoundTrip();
        break;

      case 'One Way':
        handleOneWayTrip();
        break;

      default:
        handleInvalidSearch();
        break;
    }
  } else {
    $response = [
      'status' => false,
      'message' => 'Missing trip type'
    ];
    sendResponseJson($response);
  }
} else {
  $response = [
    'status' => false,
    'message' => 'Invalid action'
  ];
  sendResponseJson($response);
}


function handleRoundTrip()
{
  if (
    !isset($_POST['from']) || empty($_POST['from']) ||
    !isset($_POST['to']) || empty($_POST['to']) ||
    !isset($_POST['departureDateRoundTrip']) || empty($_POST['departureDateRoundTrip']) ||
    !isset($_POST['returnDate']) || empty($_POST['returnDate']) ||
    !isset($_POST['passengerCount']) || empty($_POST['passengerCount'])
  ) {
    $response = [
      'status' => false,
      'message' => 'Please fill all required fields!'
    ];
    sendResponseJson($response);
  }

  $response = [
    'status' => false,
    'message' => 'Round trip search handled successfully!'
  ];
  sendResponseJson($response);
}


function handleOneWayTrip()
{
  if (
    !isset($_POST['from']) || empty($_POST['from']) ||
    !isset($_POST['to']) || empty($_POST['to']) ||
    !isset($_POST['departureDateOneWay']) || empty($_POST['departureDateOneWay']) ||
    !isset($_POST['passengerCount']) || empty($_POST['passengerCount'])
  ) {
    $response = [
      'status' => false,
      'message' => 'Please fill all required fields!'
    ];
    sendResponseJson($response);
  }


  $from = $_POST['from'];
  $to = $_POST['to'];
  $date = $_POST['departureDateOneWay'];

  $trip = new Trip();
  $data = $trip->getOneWayTrip($from, $to, $date);
  $jsonData = json_encode($data);
  $encodedData = urlencode($jsonData);
  header('Location: ../pages/availability.php?data=' . $encodedData);
  exit();
}

function handleInvalidSearch()
{
  $response = [
    'status' => false,
    'message' => 'Invalid search!'
  ];
  sendResponseJson($response);
}

function sendResponseJson($response)
{
  if (!$response['status']) {
    echo json_encode($response, JSON_PRETTY_PRINT);
    exit;
  }
  header('Location:' . $response['page'] . '');
  exit;
}
