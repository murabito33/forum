<?php 
require_once (__DIR__ . '/../../config/config.php') //__DIR__ 存在するディレクトリのパスを返す。/forum/～/header.php
?> 
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>掲示板</title>
  <link rel="stylesheet" type="text/css" href="./css/style.css" >
</head>
<body>
  <header>
    <?php if(isset($_SESSION['me'])): ?>
      <p><a href="./index.php">スレッド一覧へ</a></p>
      <p><?= $_SESSION['me']->username ?></p>
      <p><a href=./logout.php>ログアウト</a></p>
    <?php else :?>
      <p><a href="./signup.php">ユーザー作成</a></p>
      <p><a href=./login.php>ログイン</a></p>
    <?php endif;?>  
  </header>

