<?php

namespace Forum\lib;
class Model{
  public function __construct()
  {
    
    
    require_once('./config/config.php');
    

    $dbh = new \PDO(DSN, DB_USERNAME, DB_PASSWORD); // \を入れないとForum\lib\PDOクラスを探そうとする
    $dbh->query('SET NAMES utf8');

  }
}
