<?php


require_once('./config/config.php');

$mysqli = new mysqli(DSN, DB_USERNAME, DB_PASSWORD);
if ($mysqli->connect_error) {
  error_log($mysqli->connect_error);
  exit;
}
