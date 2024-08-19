<?php 

namespace Forum\Lib\Model;
  class Comment extends \Forum\Lib\Model {
    public function commentGet($values){
      $stmt = $this->db->prepare("SELECT  comments.thread_id, comments.user_id, comments.comment, comments.created, users.username FROM comments JOIN users ON comments.user_id = users.id WHERE thread_id = :thread_id");
      $result = $stmt->execute([
        ':thread_id' => $values['thread_id'],
      ]);

      $stmt->setFetchMode(\PDO::FETCH_CLASS,'stdClass');

      $comments = $stmt->fetchAll();

      return $comments;
    }

    public function commentCreate($values){
      $stmt = $this->db->prepare("INSERT INTO comments (thread_id, user_id, comment, created, updated) VALUES (:thread_id, :user_id, :comment, now(), now())");
      $result = $stmt->execute([
        ':thread_id' => $values['thread_id'],
        ':user_id' => $values['user_id'],
        ':comment' => $values['comment'],
      ]);
    }
}
?>
