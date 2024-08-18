<?php include("includes/header.php");
$app = new Forum\Lib\Controller\CommentCreate();
$app->run();
?>

  <main>
    <div class="wrapper">
      <h1>コメント作成</h1>
      
      <form action="" method="post">
        <p>名前</p>
        <p><?= $_SESSION['me']->username?></p>
        <p>投稿内容</p>
        <input name="comment" type="text" value="<?php echo isset($_POST['contents']) ? h($_POST['contents']) : '';?>">
        
        <div class="button_horizontally">
          <button>保存</button>
          <button type="button" onclick="location.href='index.php'">キャンセル</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
