<?php 
include("includes/header.php");
$comment_id = isset($_GET['comment_id']) ? $_GET['comment_id'] : null;
$commentGet = new Forum\Lib\Controller\CommentGet();
$comment = $commentGet->commentGet($comment_id);

$commentUpdate = new Forum\Lib\Controller\CommentUpdate();
$commentUpdate->commentUpdate($comment_id);

?>

  <main>
    <div class="wrapper">
      <h1>コメント編集</h1>
      
      <form action="" method="post">
        <p>名前:<?= $comment->username?></p><!-- 固定する -->
        <p>投稿内容</p>
        <input name="comment" type="text" value="<?= isset($_POST['comment']) ? h($_POST['comment']) : $comment->comment; ?>">
        <div class="button_horizontally">
          <button>保存</button>
          <button>キャンセル</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
