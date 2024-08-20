<?php include("includes/header.php");
$app = new Forum\Lib\Controller\ThreadIndex();
$threads = $app->run();

$commentGet = new Forum\Lib\Controller\CommentGet();

// $comments = $commentGet->commentGet($thread_id);
?>
  <main>
    <div class="main_wrapper">
      <div class="head_title">
        <h1>スレッド一覧</h1>
      </div>
      <div class="head_under_button">
        <button>新規作成</button>
      </div>
      <?php foreach($threads as $thread): ?>
      <div class="thread">
        <p>タイトル:<?= $thread->title ?></p>
        <p>名前:<?= $thread->username ?></p>
        <p><?= $thread->contents ?></p>
        <p>投稿日時:<?= $thread->created ?></p>
        <a href="./comments.php/?thread_id=<?= $thread->id ?>">コメントを表示(<?= count($commentGet->commentGet($thread->id))?>)</a>
        <?php if($thread->user_id == $_SESSION['me']): ?>
          <button>編集</button>
          <button>削除</button>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </main>
</body>
</html>
