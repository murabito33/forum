<?php
namespace Forum\Lib\Model;

class Thread extends \Forum\Lib\Model{
public function threadAllGet(){
  $stmt = $this->db->prepare("SELECT threads.id, threads.user_id, threads.title, threads.contents, threads.image, threads.created, users.username FROM threads JOIN users ON threads.user_id = users.id");
  $stmt->execute();
  $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
  $threads = $stmt->fetchAll();

  return $threads;
}

public function threadGet($values){
  $stmt = $this->db->prepare("SELECT threads.user_id, threads.title, threads.contents, threads.image, threads.created, users.username FROM threads JOIN users ON threads.user_id = users.id WHERE threads.id = :thread_id");
  $stmt->execute([
    ':thread_id' => $values['thread_id']
  ]);
  $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
  $thread = $stmt->fetch();

  return $thread;
}

  public function threadCreate($values){
    $stmt = $this->db->prepare("INSERT INTO threads (user_id, title, contents, image, created, updated) VALUES (:user_id, :title, :contents, :image, now(), now())");
    $stmt->execute([
      ':user_id' => $values['user_id'],
      ':title' => $values['title'],
      ':contents' => $values['contents'],
      ':image' => $values['image'],
    ]);
  }

  public function threadUpdate($values){
    $stmt = $this->db->prepare("UPDATE threads SET title = :title, contents = :contents, image=:image, updated = now() WHERE id = :thread_id ");
    $stmt->execute([
      ':thread_id' => $values['thread_id'],
      ':title' => $values['title'],
      ':contents' => $values['contents'],
      ':image' => $values['image'],
    ]);
  }

  public function threadDelete($values){
    try{
      $this->db->beginTransaction();

      $stmt = $this->db->prepare("DELETE FROM threads WHERE id = :thread_id");
      $stmt->execute([
        ':thread_id' => $values,
      ]);
      
      $stmt = $this->db->prepare("DELETE FROM comments WHERE thread_id = :thread_id");
      $stmt->execute([
        ':thread_id' => $values,
      ]);
      
      $this->db->commit();
    } catch (\PDOException ){
      $this->db->rollBack();

    }

  }
}
