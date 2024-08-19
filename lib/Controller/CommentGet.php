<?php

namespace Forum\Lib\Controller;

class CommentGet extends \Forum\Lib\Controller{
  public function commentGet($values){
    $commentModel = new \Forum\Lib\Model\Comment();
    return $commentModel->commentGet([
      'thread_id' => $values,
    ]);
  }
}
