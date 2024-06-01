<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Src\Config\Session;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (
    !isset($_POST['first-name']) || empty($_POST['first-name']) ||
    !isset($_POST['last-name']) || empty($_POST['last-name']) ||
    !isset($_POST['dob']) || empty($_POST['dob']) ||
    !isset($_POST['gender']) || empty($_POST['gender']) ||
    !isset($_POST['nationality']) || empty($_POST['nationality']) ||
    !isset($_POST['email']) || empty($_POST['email']) ||
    !isset($_POST['phone']) || empty($_POST['phone']) ||
    !isset($_POST['passport-number']) || empty($_POST['passport-number']) ||
    !isset($_POST['passport-expiry']) || empty($_POST['passport-expiry'])
  ) {
    $message = [
      'status' => false,
      'message' => 'All required fields must be filled out!'
    ];
    sendResponseJson($message);
  } else {
    $firstName = ($_POST['first-name']);
    $lastName = ($_POST['last-name']);
    $date_of_birth = ($_POST['dob']);
    $gender = ($_POST['gender']);
    $nationality = ($_POST['nationality']);
    $email = ($_POST['email']);
    $phone_number = ($_POST['phone']);
    $passport_number = ($_POST['passport-number']);
    $passport_expiry_date = ($_POST['passport-expiry']);

    $registerData = compact('firstName', 'lastName', 'date_of_birth', 'gender', 'nationality', 'email', 'phone_number', 'passport_number', 'passport_expiry_date');

    Session::saveRegisterData($registerData);

    $message = [
      'status' => true,
      'message' => 'Signup success!'
    ];
    sendResponseJson($message);
  }
} else {
  $message = [
    'status' => false,
    'message' => 'Invalid request method.!'
  ];
  sendResponseJson($message);
}

function sendResponseJson($message)
{
  // Serialize the array to a JSON string
  $jsonResponse = json_encode($message);
  // You can also set the content type to JSON if you are returning a JSON response
  header('Content-Type: application/json');
  // Optionally, you can send a response with the array data
  echo $jsonResponse;
}
