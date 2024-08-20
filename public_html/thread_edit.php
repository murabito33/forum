<?php 
  include("includes/header.php"); 
  $thread_id = isset($_GET['thread_id']) ? $_GET['thread_id'] : null;

  $threadGet = new Forum\Lib\Controller\threadGet();
  $thread = $threadGet->threadGet($thread_id);

  $threadUpdate = new Forum\Lib\Controller\threadUpdate();
  $threadUpdate->threadUpdate($thread_id);

  var_dump($thread);
  
?>

  <main>
    <div class="wrapper">
      <h1>スレッド編集</h1>
      
      <form action="" method="post">
        <p>タイトル</p>
        <input name="title" type="text" value="<?php echo isset($_POST['title']) ? h($_POST['title']) :  h($thread->title) ; ?>">
        <p>名前</p>
        <p><?= $_SESSION['me']->username?></p>
        <p>投稿内容</p>
        <input name="contents" type="text" value="<?php echo isset($_POST['contents']) ? h($_POST['contents']) : h($thread->contents) ;?>">
        <!-- <p>画像</p> -->
        <input name="image" type="hidden" value="">
        <input name="type" type="hidden" value="thread_update">

        <div class="button_horizontally">
          <button>保存</button>
          <button type="button" onclick="history.back();">キャンセル</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
