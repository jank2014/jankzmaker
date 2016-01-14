<?php
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller{
	function _initialize() {
		if (!isset($_SESSION['uid']) || !isset($_SESSION['username'])) {
			$this->redirect('Admin/Login/index');
		}
	}
	public function test(){
        $config = array('type' =>'newform');
            var_dump(C('USER_AUTH_KEY'));




        $auth = new \Think\Auth();
        var_dump($auth);

    	$jankzmaker = new \Maker\Controller\JankzMaker();
    	$jankzmaker->setMetaTitle('测试页面')
    				->display();
   }

}

 ?>