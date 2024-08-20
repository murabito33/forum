<?php
spl_autoload_register(function($class_name){ //インスタンス化するときに、クラス定義が読み込まれる。$class_name->new 〇〇のクラス名が入る
  $file_path ='../../' . str_replace('\\', '/', $class_name) .'.php';
  if(file_exists($file_path)){
    require $file_path;
  }
});
