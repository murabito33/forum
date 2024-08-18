<?php
namespace Forum\Lib\Model;

class Thread extends \Forum\Lib\Model{
public function threadGet(){
  $stmt = $this->db->prepare("SELECT * from posts");
  $stmt->execute();
  $stmt->setFetchMode(\PDO::FETCH_CLASS, 'stdClass');
  $threads = $stmt->fetchAll();

  return $threads;
}

  public function threadCreate($values){
    $stmt = $this->db->prepare("INSERT INTO posts (user_id, title, contents, image, created, updated) VALUES (:user_id, :title, :contents, :image, now(), now())");
    $stmt->execute([
      ':user_id' => $values['user_id'],
      ':title' => $values['title'],
      ':contents' => $values['contents'],
      ':image' => $values['image'],
    ]);
  }
}
