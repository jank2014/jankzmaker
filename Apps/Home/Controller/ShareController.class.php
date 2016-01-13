<?php
namespace Home\Controller;
use Think\Controller;

class ShareController extends Controller{
	public function index(){
		if(!empty($_POST)){

		}else{
		$libs = M('Libs');
		$info = $libs->where(array('status'=>1))->select();
		$this->info = $info;
		$this->display();
		}

	}
	public function content(){
		$pid = $_GET['pid'];
		$content = M('LibContents');
		$info = $content->where(array('pid'=>intval($pid)))->select();
		$this->info =$info;
		$this->display();

	}
	public function test(){
		$pid = 1;
		$content = M('LibContents');
		$info =$content->where(array('pid'=>$pid))->select();
		$this->info=$info;
		var_dump($info);
	}
}


 ?>