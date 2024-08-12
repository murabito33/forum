<?php
namespace Forum\lib\Controller;

class Signup extends \Forum\lib\Controller {
  public function run(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // var_dump($user_name);
    // var_dump("コントローラ");
    $this->userCreate();
    }
  }

  protected function userCreate(){
    $userModel = new \Forum\lib\Model\User();
    // $user = $userModel->create([
    //   'email' => $_POST['email'],
    //   'user_name' => $_POST['user_name'],
    //   '$password' => $_POST['password']
    // ]);
    //ユーザー登録したらログインするようにする
  }
}
