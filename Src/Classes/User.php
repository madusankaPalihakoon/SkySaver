<?php

namespace Src\Classes;

use Src\Config\Execute;


class User
{
  private $execute;
  public function __construct()
  {
    $this->execute = new Execute();
  }

  public function registerUser($userData)
  {
    $sql = "INSERT INTO `registerdetails`(`first_name`, `last_name`, `date_of_birth`, `gender`, `nationality`, `email`, `phone_number`, `passport_number`, `passport_expiry_date`) VALUES (:first_name, :last_name, :date_of_birth, :gender, :nationality, :email, :phone_number, :passport_number, :passport_expiry_date)";

    $bindings = [
      ':first_name' => $userData['firstName'],
      ':last_name' => $userData['lastName'],
      ':date_of_birth' => $userData['date_of_birth'],
      ':gender' => $userData['gender'],
      ':nationality' => $userData['nationality'],
      ':email' => $userData['email'],
      ':phone_number' => $userData['phone_number'],
      ':passport_number' => $userData['passport_number'],
      ':passport_expiry_date' => $userData['passport_expiry_date']
    ];

    try {
      return (bool) $this->execute->run($sql, $bindings);
    } catch (\PDOException $e) {
      // Handle the exception
      return false;
    }
  }

  public function setUser($userData)
  {
    $sql = "INSERT INTO `accountdetails`(`username`, `password_hash`) VALUES (:username, :password_hash)";

    $bindings = [
      ':username' => $userData['username'],
      ':password_hash' => $userData['hashedPassword'],
    ];

    try {
      return (bool) $this->execute->run($sql, $bindings);
    } catch (\PDOException $e) {
      // Handle the exception
      return false;
    }
  }
}
