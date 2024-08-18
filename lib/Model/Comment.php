<?php 

namespace Forum\Lib\Model;
  class Comment extends \Forum\Lib\Model {
  public function commentCreate($values){
    $stmt = $this->db->prepare("INSERT INTO comments (thread_id, user_id, comment, created, updated) VALUES (:thread_id, :user_id, :comment, now(), now())");
    $result=$stmt->execute([
      ':thread_id' => $values['thread_id'],
      ':user_id' => $values['user_id'],
      ':comment' => $values['comment'],
    ]);
  }
}
?>
