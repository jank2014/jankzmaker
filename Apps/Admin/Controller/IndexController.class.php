<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
    	//调用生成菜单函数
		$info=getInto();
		$this->info=$info;
		$this->display();
    }
    public function removeRuntime() {
	    $file = new \Maker\Util\File();
	    $info = $file->del_dir(MYTEST_PATH);
	    if ($info) {
	        $this->success("缓存清理成功");
	    } else {
	        $this->error("缓存清理失败");
	    }

    }


}