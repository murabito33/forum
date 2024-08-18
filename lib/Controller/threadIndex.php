<?php
namespace Forum\Lib\Controller;

class ThreadIndex extends \Forum\Lib\Controller{
  public function run(){
    return $this->threadGet();//threadGet()メソッドが返すデータをindex.phpに返してる
  }
  protected function threadGet(){
    $threadModel = new \Forum\Lib\Model\Thread();
    return $threadModel->threadGet();//引数で1→1～5まで2→6～10まで取得できるようにする。

  }
}
