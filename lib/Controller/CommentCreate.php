<?php 

namespace Forum\Lib\Controller;

class CommentCreate extends \Forum\Lib\Controller{
  public function run(){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $this->commentCreate();
    }
  }

  protected function commentCreate(){
    $commentModel = new \Forum\Lib\Model\Comment();
    $comment = $commentModel->commentCreate([
      'thread_id' => $_POST['thread_id'],
      'user_id' => $_SESSION['me']->id,
      'comment' => $_POST['comment'],
    ]);
  }
}
?>
