<?php
namespace Forum\Lib\Controller;
  class ThreadDelete extends \Forum\lib\Controller {
    public function threadDelete($values){
      if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type'] == 'thread_delete'){
        $threadModel = new \Forum\Lib\Model\Thread;
        $thread = $threadModel->threadDelete($values);
        header('Location:' . './index.php');
      }
    }
  }
