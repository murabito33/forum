<?php
namespace Forum\lib\Model;

class User extends \Forum\lib\Model {
  public function userCreate($values){
    $stmt = $this->db->prepare("INSERT INTO users (username,email,password,created,modified) VALUES (:username, :email, :password, now(), now())");
    $res = $stmt->execute([
      ':username' => $values['user_name'],
      ':email' => $values['email'],
      //パスワードのハッシュ化
      ':password' => password_hash($values['password'],PASSWORD_DEFAULT),
    ]);
  }

  public function userLogin($values){
    $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
    $res = $stmt->execute([
      ':email' => $values['email'],
      // ':password' => password_hash($values['password'],PASSWORD_DEFAULT),
    ]);
    var_dump($res);
  }
}
