<?php require_once("./includes/header.php");
$app = new Forum\Lib\Controller\Signup();
$app->run();
?>

  <main>
    <div class="wrapper">
      <h1>ユーザー作成</h1>
      <form action="" method="post">
        <p>ユーザー名</p>
        <input name="user_name" type="text" value="<?php echo h(isset($_POST['user_name']) ? h($_POST['user_name']) : ''); ?>" />
        <p>メールアドレス</p>
        <input name="email" type="text" value="<?php echo isset($_POST['email']) ? h($_POST['email']) : ''; ?>" />
        <p>パスワード</p>
        <input name="password" type="password"/>
        <button type="submit">送信</button>
      </form>
      <p><a href="./login.php">ログインはこちら</a></p>
    </div>
  </main>
</body>
</html>
