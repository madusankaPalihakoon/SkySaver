<?php
require_once __DIR__ . "/../vendor/autoload.php";

use Src\Classes\User;
use Src\Config\Session;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (
    !isset($_POST['email']) || empty($_POST['email']) ||
    !isset($_POST['username']) || empty($_POST['username']) ||
    !isset($_POST['password']) || empty($_POST['password']) ||
    !isset($_POST['passwordConfirm']) || empty($_POST['passwordConfirm'])
  ) {
    $message = [
      'status' => false,
      'message' => 'All required fields must be filled out!'
    ];
    sendResponseJson($message);
  }

  if ($_POST['password'] !== $_POST['passwordConfirm']) {
    $message = [
      'status' => false,
      'message' => 'Password and password confirmation does not match!'
    ];
    sendResponseJson($message);
  }

  $registerData = Session::getRegisterData();

  if ($registerData['email'] !== $_POST['email']) {
    $message = [
      'status' => false,
      'message' => 'Invalid email Address!'
    ];
    sendResponseJson($message);
  }

  $username = ($_POST['username']);
  $password = ($_POST['password']);

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $userData = compact('username', 'hashedPassword');

  $user = new User();

  if ($user->registerUser($registerData) && $user->setUser($userData)) {
    $message = [
      'status' => true,
      'message' => 'Signup success!'
    ];
    sendResponseJson($message);
  }

  $message = [
    'status' => false,
    'message' => 'Somthing went wrong, please try again later'
  ];
  sendResponseJson($message);
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
  exit;
}
