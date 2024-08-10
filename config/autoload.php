<?php
spl_autoload_register(function($class_name){ //インスタンス化するときに、クラス定義が読み込まれる。$class_name->new 〇〇のクラス名が入る

  // $dir = __DIR__;
  // var_dump($dir); "C:\xampp\htdocs\applications\forum\config"
  $file_path ='../../' . str_replace('\\', '/', $class_name) .'.php';
  // var_dump($file_path);
  if(file_exists($file_path)){
    require $file_path;
  }
  
});

// $file_path = 'forum/' . str_replace('\\', '/', $class_name) .'.php';
