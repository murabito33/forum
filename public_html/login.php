<?php require_once("./includes/header.php");
$app = new Forum\Lib\Controller\Login();
$app->run();
?>

  <main>
    <div class="wrapper">
      <h1>ログイン</h1>
      <form action="" method="post">
        <p>メールアドレス</p>
        <input name="email" type="text" value="<?php echo isset($_POST['email']) ? h($_POST['email']) : ''; ?>" />
        <p>パスワード</p>
        <input name="password" type="password" value= "<?php echo isset($_POST['password']) ? h($_POST['password']) : '' ?>" />
        <button type="submit">送信</button>
      </form>
      <p><a href="./signup.php">会員登録はこちら</a></p>
    </div>
  </main>
</body>
</html>
