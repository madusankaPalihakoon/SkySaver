<?php

namespace Src\Classes;

use Src\Config\Execute;


class Flight
{
  private $execute;
  public function __construct()
  {
    $this->execute = new Execute();
  }
}
