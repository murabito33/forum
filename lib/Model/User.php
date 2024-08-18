<?php
namespace Forum\Lib\Model;

class User extends \Forum\Lib\Model {
  public function userCreate($values){
    $stmt = $this->db->prepare("INSERT INTO users (username,email,password,created,modified) VALUES (:username, :email, :password, now(), now())");
    $result = $stmt->execute([
      ':username' => $values['user_name'],
      ':email' => $values['email'],
      //パスワードのハッシュ化
      ':password' => password_hash($values['password'],PASSWORD_DEFAULT),
    ]);
  }

  public function userLogin($values){
    $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([
      ':email' => $values['email'],
    ]);

    // $stmt->setFetchMode(\PDO::FETCH_ASSOC);
    $stmt->setFetchMode(\PDO::FETCH_CLASS,'stdClass');

    $user = $stmt->fetch();

    if(password_verify($values['password'], $user->password)){
      var_dump('パス一致');
      return $user;
    }
  }
}
