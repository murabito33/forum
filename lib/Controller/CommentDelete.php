<?php
namespace Forum\lib\Controller;

class CommentDelete extends \Forum\lib\Controller{
  public function commentDelete($values){
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['type'] == 'comment_delete'){ //コメント作成→削除する?→戻る→再読み込みをした際に、作成のPOST送信で発火するため
        $commentModel = new \Forum\Lib\Model\Comment();
        $commentModel->commentDelete($values);
        header('Location: '.'./comments.php?thread_id='. $_POST['thread_id']);
        var_dump('post送信');
    }
  }
}



