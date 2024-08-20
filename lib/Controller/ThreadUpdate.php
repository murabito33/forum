<?php
namespace Forum\Lib\Controller;

class ThreadUpdate extends \Forum\Lib\Controller{
  public function ThreadUpdate($values){
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type'] == 'thread_update'){
      $threadModel = new \Forum\Lib\Model\Thread();
      $comment = $threadModel->threadUpdate([
        'thread_id' => $values,
        'title' => $_POST['title'],
        'contents' => $_POST['contents'],
        'image' => $_POST['image'],
      ]);
      header('Location:' . './comments.php?thread_id='. $values);
    }
  }
}
