<?php
namespace Forum\lib\Controller;

class Login extends \Forum\Lib\Controller{
  public function run(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $this->userLogin();
    }
  }

  protected function userLogin(){
    $userModel = new \Forum\Lib\Model\User();
    $user = $userModel->userLogin([
      'email' => $_POST['email'],
      'password' => $_POST['password'],
    ]);
  }
}
