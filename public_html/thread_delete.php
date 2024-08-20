<?php 
  include("includes/header.php");
  $thread_id = isset($_GET['thread_id']) ? $_GET['thread_id'] : null;
  $threadGet = new Forum\Lib\Controller\ThreadGet();
  $thread = $threadGet->threadGet($thread_id);
  $threadDelete = new Forum\Lib\Controller\ThreadDelete();
  $threadDelete->threadDelete($thread_id);
?>

  <main>
    <div class="wrapper">
      <h1>以下のスレッドを削除します</h1>
      <form action="" method="post">
        <p>タイトル<?= $thread->title?></p>
        <p>名前:<?= $thread->username?></p>
        <p>投稿内容</p>
        <?= $thread->contents; ?>
        <input name="type" type="hidden" value="thread_delete">
          <button>削除</button>
          <button type="button" onclick="history.back();">キャンセル</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
