<?php
namespace Forum\lib\Controller;

class Signup extends \Forum\lib\Controller {
  public function run(){
    $user_name = $_POST['user_name'];
    $user_name = $_POST['email'];
    $user_name = $_POST['password'];
    var_dump($user_name);
    var_dump("コントローラ");
}

}
