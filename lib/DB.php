<?php

#http://requiremind.com/a-most-simple-php-mvc-beginners-tutorial/
class DB{
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $dbc = sprintf('mysql:host=%s;dbname=%s', config::SERVER, config::DATABASE);
        self::$instance = new PDO($dbc, config::USERNAME, config::PASSWORD, $pdo_options);
      }
      return self::$instance;
    }
  }