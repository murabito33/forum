<?php include("includes/header.php");
$thread_id = isset($_GET['thread_id']) ? h($_GET['thread_id']) : null;
$app = new Forum\Lib\Controller\CommentCreate();
$app->run();

$threadGet = new Forum\Lib\Controller\ThreadGet();
$thread = $threadGet->threadGet($thread_id);

$commentGet = new Forum\Lib\Controller\CommentAllGet();
$comments = $commentGet->commentAllGet($thread_id);
?>

  <main>
    <div class="main_wrapper">
      <div class="head_title">
        <h1>コメント一覧</h1>
      </div>
      <div class="thread">
        <h2>対象スレッド</h2>
        <p>タイトル:<?= $thread->title ?></p>
        <p>名前:<?= $thread->username ?></p>
        <p><?= $thread->contents ?></p>
        <p>投稿日時:<?= $thread->created?></p>
        <div class="button_horizontally">
        </div>
        <div class="comment_head">
          <h2>コメント一覧</h2>
        </div>
        <?php foreach ($comments as $index => $comment): ?>
          <div class="comment">
            <p>No.<?= $index + 1 ?></p>
            <p>名前:<?= $comment->username ?></p>
            <p><?= $comment->comment ?></p>
            <p>投稿日時: <?= $comment->created ?></p>
            <div class="button_horizontally">
            <?php if($comment->user_id == $_SESSION['me']->id):?>
              <button type="button" onclick="location.href='./comment_edit.php?comment_id=<?= $comment->id?>'">編集</button>
              <button type="button" onclick="location.href='./comment_delete.php?comment_id=<?= $comment->id?>'">削除</button>
            <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <h1>新規コメント作成</h1>
      
      <form action="" method="post">
        <p>名前:<?= $_SESSION['me']->username?></p>
        <p>投稿内容</p>
        <input name="comment" type="text" value="<?php echo isset($_POST['contents']) ? h($_POST['contents']) : '';?>">
        <input name="thread_id" type="hidden" value="<?= h($thread_id)?>">        
        <div class="button_horizontally">
          <button>保存</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
