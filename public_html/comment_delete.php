<?php 
include("includes/header.php");
$comment_id = isset($_GET['comment_id']) ? $_GET['comment_id'] : null;
var_dump($comment_id);
$commentGet = new Forum\Lib\Controller\CommentGet();
$comment = $commentGet->commentGet($comment_id);
var_dump($comment);
$commentDelete = new Forum\Lib\Controller\CommentDelete();
$commentDelete->commentDelete($comment_id);

?>

  <main>
    <div class="wrapper">
      <h1>以下のコメントを削除します</h1>
      
      <form action="" method="post">
        <p>名前:<?= $comment->username?></p>
        <p>投稿内容</p>
        <?= $comment->comment; ?>
        <input name="type" type="hidden" value="comment_delete">
        <input name="thread_id" type="hidden" value="<?= $comment->thread_id?>">
        <div class="button_horizontally">
          <button>削除</button>
          <button type="button" onclick="history.back();">キャンセル</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
