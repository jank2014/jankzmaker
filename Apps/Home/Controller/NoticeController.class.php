<?php
namespace Home\Controller;
use Think\Controller;

class NoticeController extends Controller {
	public function index(){
		$notice = M('Notice')->where(array('status'=>1))->select();
		$this->notice = $notice;
		$this->display();
	}
}



 ?>