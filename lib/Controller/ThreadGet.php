<?php
namespace Forum\Lib\Controller;

class ThreadGet extends \Forum\Lib\Controller{
  public function threadGet($values){
    $threadModel = new \Forum\Lib\Model\Thread();
    return $threadModel->threadGet([
      'thread_id' => $values,
    ]);
  }
}
?>
