<?php

namespace Forum\Lib\Controller;

class CommentAllGet extends \Forum\Lib\Controller{
  public function commentAllGet($values){
    $commentModel = new \Forum\Lib\Model\Comment();
    return $commentModel->commentAllGet([
      'thread_id' => $values,
    ]);
  }
}
