<?php
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller{
	public function index(){
		$page = $_GET['page'];
		$user = M('User');
		$count =$user->count();
		$page_list = ceil($count/10);
		$info = $user->where(array('status'=>1))->page($page,10)->select();
		$table = array(
			'id'			=>'用户id',
			'username'		=>'用户名',
			'phone'			=>'用户手机',
			'status'		=>'用户状态',
			'c_time'		=>'用户创建时间',
			'u_time'		=>'用户更新时间',
			);
		$make_table = makeTable($table);
		$jankzmaker = new \JankzMaker\Controller\Admin\MakerTable();
		$jankzmaker->setMetaTitle('用户列表')
				->setThead($make_table['thead'])
				->setTbodyList($make_table['list'])
				->setTbodyData($info)
				->addTopBtn('default')
				->addRightBtn('edit')
				->addRightBtn('resume')
				->addRightBtn('forbid')
				->addRightBtn('delete')
				->display();
	}
	public function test(){
		$this->display();
	}
}


 ?>