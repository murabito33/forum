<?php include("includes/header.php");
$app = new Forum\Lib\Controller\ThreadIndex();
$threads = $app->run();
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
        <p>名前:<?= $thread->user_id?></p>
        <p><?= $thread->contents?></p>
        <p>投稿日時:<?= $thread->created?></p>
        <a href="./comments.php/?thread_id=<?= $thread->user_id?>">コメントを表示(2)</a>
        <button>編集</button>
        <button>削除</button>
      </div>
      <?php endforeach; ?>
    </div>
  </main>
</body>
</html>
