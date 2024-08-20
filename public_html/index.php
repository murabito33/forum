<?php include("includes/header.php");
  $app = new Forum\Lib\Controller\ThreadIndex();
  $threads = $app->run();
  $commentGet = new Forum\Lib\Controller\CommentAllGet();
?>
  <main>
    <div class="main_wrapper">
      <div class="head_title">
        <h1>スレッド一覧</h1>
      </div>
      <div class="head_under_button">
        <button type="button" onclick="location.href='./thread_create.php'">新規作成</button>
      </div>
      <?php foreach($threads as $thread): ?>
      <div class="thread">
        <p>タイトル:<?= $thread->title ?></p>
        <p>名前:<?= $thread->username ?></p>
        <p><?= $thread->contents ?></p>
        <p>投稿日時:<?= $thread->created ?></p>
        <a href="./comments.php?thread_id=<?= $thread->id ?>">コメントを表示(<?= count($commentGet->commentAllGet($thread->id))?>)</a> <!-- thread_idに紐づくコメントを全て抽出しcount -->
        <?php if($thread->user_id == $_SESSION['me']->id): ?>
          <button type="button" onclick="location.href='./thread_edit.php?thread_id=<?= $thread->id?>'">編集</button>
          <button type="button" onclick="location.href='./thread_delete.php?thread_id=<?= $thread->id?>'">削除</button>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
  </main>
</body>
</html>
