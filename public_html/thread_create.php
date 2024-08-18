<?php include("includes/header.php");?>

  <main>
    <div class="wrapper">
      <h1>スレッド作成</h1>
      
      <form action="" method="post">
        <p>タイトル</p>
        <input name="title" type="text" value="<?php echo isset($_POST['title']) ? h($_POST['title']) : ''; ?>">
        <p>名前</p>
        <p><?= $_SESSION['me']->username?></p>
        <input name="username" type="hidden" value=<?= $_SESSION['me']->username?>>
        <!-- <input name="email" type="text"> -->
        <p>投稿内容</p>
        <input name="contents" type="text" value="<?php echo isset($_POST['contents']) ? h($_POST['contents']) : '';?>">
        <div class="button_horizontally">
          <button>保存</button>
          <button type="button" onclick="location.href='index.php'">キャンセル</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
