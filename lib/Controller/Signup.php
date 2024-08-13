<?php
namespace Forum\lib\Controller;

class Signup extends \Forum\Lib\Controller {
  public function run(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $this->userCreate();
    }
  }

  protected function userCreate(){
    $userModel = new \Forum\Lib\Model\User();
    $user = $userModel->userCreate([
      'user_name' => $_POST['user_name'],
      'email' => $_POST['email'],
      'password' => $_POST['password'],
    ]);
    //ユーザー登録したらログインするようにする
    header('Location:./login.php');
    exit();
    }
  }
