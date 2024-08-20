<?php

namespace Forum\Lib\Controller;

class ThreadCreate extends \Forum\Lib\Controller{
  public function run(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $this->threadCreate();
    }
  }

  protected function threadCreate(){
    $threadModel = new \Forum\Lib\Model\thread();
    $thread = $threadModel->threadCreate([
      'user_id' => $_SESSION['me']->id,
      'title' => $_POST['title'],
      'contents' => $_POST['contents'],
      'image' => $_POST['image'],
    ]);
    header('Location:'.'./index.php');
    exit();
  }
}
