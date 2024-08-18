<?php include("includes/header.php");
$thread_id = isset($_GET['thread_id']) ? $_GET['thread_id'] : null;
var_dump($thread_id);
$app = new Forum\Lib\Controller\CommentCreate();
$app->run();
?>

  <main>
    <div class="main_wrapper">
      <div class="head_title">
        <h1>スレッド一覧</h1>
      </div>
      <div class="thread">
        <p>タイトル:</p>
        <p>名前:</p>
        <p>こんにちは、いい天気ですね</p>
        <p>投稿日時:</p>
        <div class="button_horizontally">
          <button>編集</button>
          <button>削除</button>
        </div>
        <div class="comment_head">
          <h2>コメント一覧</h2>
        </div>
        <div class="comment">
          <p>No.1</p>
          <p>名前:</p>
          <p>追記です。</p>
          <p>投稿日時:</p>
          <div class="button_horizontally">
            <button>編集</button>
            <button>削除</button>
          </div>
        </div>
        <div class="comment">
          <p>No.2</p>
          <p>名前:</p>
          <p>他人のコメントです。</p>
          <p>投稿日時:</p>
        </div>
      </div>

      <h1>新規コメント作成</h1>
      
      <form action="" method="post">
        <p>名前:<?= $_SESSION['me']->username?></p>
        <p>投稿内容</p>
        <input name="comment" type="text" value="<?php echo isset($_POST['contents']) ? h($_POST['contents']) : '';?>">
        <input name="thread_id" type="hidden" value="<?= h($thread_id)?>">        
        <div class="button_horizontally">
          <button>保存</button>
          <button type="button" onclick="location.href='index.php'">キャンセル</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
