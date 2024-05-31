<?php
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

  $response = [
    'status' => false,
    'message' => 'One Way trip search handled successfully!'
  ];
  sendResponseJson($response);
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
  header('Location:' . $response['page'] . '', true, 200);
  exit;
}

// { ["from"]=> string(0) "" ["to"]=> string(0) "" ["departureDateRoundTrip"]=> string(0) "" ["returnDate"]=> string(0) "" ["departureDateOneWay"]=> string(0) "" ["passengerCount"]=> string(0) "" ["trip"]=> string(10) "Round Trip" }
