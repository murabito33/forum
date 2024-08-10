<?php require_once("./includes/header.php");
$app = new Forum\lib\Controller\Signup();
$app->run();
?>

  <main>
    <div class="wrapper">
      <h1>ユーザー作成</h1>
      <form action="" method="post">
        <p>ユーザー名</p>
        <input name="user_name" type="text" value="<?php echo h(isset($_POST['user_name']) ? $_POST['user_name'] : ''); ?>" />
        <p>メールアドレス</p>
        <input name="email" type="text" value="<?php echo h(isset($_POST['email']) ? $_POST['email'] : ''); ?>" />
        <p>パスワード</p>
        <input name="password" type="password" value= "<?php echo h(isset($_POST['password']) ? $_POST['password'] : '') ?>" />
        <button type="submit">送信</button>
      </form>
    </div>
  </main>
</body>
</html>
