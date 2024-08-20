<?php
namespace Forum\Lib\Model;

class User extends \Forum\Lib\Model {
  public function userCreate($values){

    $stmt = $this->db->prepare("SELECT email fROM users WHERE email = :email");
    $stmt->execute([':email' => $values['email']]);
    $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
    $emailCheck = $stmt->fetch();
    if($emailCheck == true){
      var_dump('email重複確認未実装');
    }else{
      $stmt = $this->db->prepare("INSERT INTO users (username,email,password,created,modified) VALUES (:username, :email, :password, now(), now())");
      $result = $stmt->execute([
        ':username' => $values['user_name'],
        ':email' => $values['email'],
        //パスワードのハッシュ化
        ':password' => password_hash($values['password'],PASSWORD_DEFAULT),
      ]);
      header('Location:./login.php');
      exit();
    }

  }

  public function userLogin($values){
    $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([
      ':email' => $values['email'],
    ]);
    $stmt->setFetchMode(\PDO::FETCH_CLASS,'stdClass');
    $user = $stmt->fetch();
    if($user && password_verify($values['password'], $user->password)){
      return $user;
    }
  }
}
