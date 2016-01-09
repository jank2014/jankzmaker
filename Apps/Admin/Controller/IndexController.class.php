<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//调用生成菜单函数
		$info=getInto();
		$this->info=$info;
		$this->display();
    }
    public function removeRuntime() {
	    $file = new \Common\Util\File();
	    $result = $file->del_dir(RUNTIME_PATH);
	    if ($result) {
	        $this->success("缓存清理成功");
	    } else {
	        $this->error("缓存清理失败");
	    }

    }
    public function test(){
    	$a = 'add,resume,forbid';
        $b = explode(',',$a);
        print_r($b);
    	$jankzmaker = new \Maker\Controller\JankzMaker();
    	$jankzmaker->setMetaTitle('测试页面')
    				->display();
    }

}