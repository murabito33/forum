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
    if($_POST['user_name']==null || $_POST['email']==null || $_POST['password']==null){
      var_dump('バリデーション未実装');
    }else{
      $user = $userModel->userCreate([
        'user_name' => $_POST['user_name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
      ]);
        //ユーザー登録したらログインするようにする
    }
    }
  }
