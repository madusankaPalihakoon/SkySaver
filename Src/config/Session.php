<?php

namespace Src\Config;

class Session
{
  public static function start()
  {
    // Start session if not already started
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
  }

  public static function set($key, $value)
  {
    self::start();
    $_SESSION[$key] = $value;
  }

  public static function get($key, $default = null)
  {
    self::start();
    return $_SESSION[$key] ?? $default;
  }

  public static function delete($key)
  {
    self::start();
    unset($_SESSION[$key]);
  }

  public static function destroy()
  {
    self::start();
    session_destroy();
  }

  public static function saveRegisterData(array $registerData)
  {
    self::start();
    $_SESSION["registerData"] = $registerData;
  }

  public static function getRegisterData()
  {
    self::start();
    return $_SESSION["registerData"];
  }
}
