<?php

namespace Forum\Lib;
class Model{
  protected $db;
  public function __construct()
  {
    
    
    require_once('./../config/config.php');
    

    $this->db = new \PDO(DSN, DB_USERNAME, DB_PASSWORD); // \を入れないとForum\lib\PDOクラスを探そうとする
    $this->db->query('SET NAMES utf8');

  }
}
