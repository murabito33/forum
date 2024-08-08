<?php include("includes/header.php");?>

  <main>
    <div class="wrapper">
      <h1>ユーザー作成</h1>


      <?= $user_name = $_POST['user_name']; ?>
      <?= var_dump($user_name) ?>

      <form action="" method="post">
        <p>ユーザー名</p>
        <input name="user_name" type="text">
        <p>メールアドレス</p>
        <input name="email" type="text">
        <p>パスワード</p>
        <input name="password" type="password">
        <button type="submit">送信</button>
      </form>
    </div>
  </main>
</body>
</html>
