<?php
namespace Forum\Lib\Controller;

class ThreadIndex extends \Forum\Lib\Controller{
  public function run(){
    return $this->threadAllGet();
  }
  protected function threadAllGet(){
    $threadModel = new \Forum\Lib\Model\Thread();
    return $threadModel->threadAllGet();//引数で1→1～5まで2→6～10まで取得できるようにする。

  }
}
