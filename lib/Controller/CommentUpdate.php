<?php
namespace Forum\Lib\Controller;

class CommentUpdate extends \Forum\Lib\Controller{
  public function commentUpdate($values){
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type'] == 'comment_update'){
      $commentModel = new \Forum\Lib\Model\Comment();
      $comment = $commentModel->commentUpdate([
        'comment_id' => $values,
        'comment' => $_POST['comment'],
      ]);
      header('Location:' . './comments.php?thread_id='. $_POST['thread_id']);
    }
  }
}
