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

    if($_POST['password'] == null){
      var_dump('パスnull');
    }else{
      $user = $userModel->userLogin([
        'email' => $_POST['email'],
        'password' => $_POST['password'],
      ]);
      
      if($user == true){
        session_regenerate_id(true);
        $_SESSION['me'] = $user;
        var_dump($_SESSION['me']->username);
        header('Location: '. './index.php');
        exit();
      } else{
        var_dump('メールアドレス、またはパスワードが違います');
      }
    }
  }
}
