<?php
namespace Forum\Lib\Controller;

class Login extends \Forum\Lib\Controller{
  public function run(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $this->userLogin();
    }
  }

  protected function userLogin(){
    $userModel = new \Forum\Lib\Model\User();

    if($_POST['password'] == null || $_POST['email'] == null){
      var_dump('バリデーション未実装');
    }else{
      $user = $userModel->userLogin([
        'email' => $_POST['email'],
        'password' => $_POST['password'],
      ]);
      
      if($user == true){
        session_regenerate_id(true);
        $_SESSION['me'] = $user;
        header('Location: '. './index.php');
        exit();
      } else{
        var_dump('メール、パスワード不一致メッセージ未実装');
      }
    }
  }
}
