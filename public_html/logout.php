<?php 
  // $app = new Forum\Lib\Controller\Logout();
  // $app->run();


session_start();
$_SESSION = array();
session_destroy();

header('Location:' . './login.php');

?>
