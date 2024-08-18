<?php

define('DSN','mysql:host=localhost;charset=utf8;dbname=forum');
define('DB_USERNAME','root');
define('DB_PASSWORD','');


require_once(__DIR__ .'./../lib/Controller/functions.php');
require_once (__DIR__ . './../config/autoload.php');
session_start();

