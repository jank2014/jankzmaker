<?php
namespace Admin\Controller;
use Think\Controller;

class ManagerController extends Controller{
	public function index(){
		$page = $_GET['page'];
		$config = array(
			'type'=>'newtable');
		$table=array(
			'id'			=>'主键',
			'username'		=>'管理员名称',
			'email'			=>'邮箱',
			'level'			=>'等级',
			'status'		=>'状态',
			'c_time'		=>'创建时间',
			'u_time'		=>'最后修改时间',
			);
		$count = M('Manager')->count();
		$page_list = ceil($count/10);
		$info = M('Manager')->where(array('status'=>1))->page($page,10)->select();
		$make_table=makeTable($table);
		$jankzmaker = new \Maker\Controller\JankzMaker();
		$jankzmaker->setMetaTitle('管理员列表')
				->addConfTpl($config)
				->setThead($make_table['thead'])
				->setTbodyList($make_table['list'])
				->setTbodyData($info)
				->addTopBtn('default')
				->addRightBtn('edit')
				->addRightBtn('resume')
				->addRightBtn('forbid')
				->addRightBtn('delete')
				->setPage($page_list)
				->display();

	}
	public function add(){//编辑和添加用同一个方法
		if(!empty($_POST)){
			$info = D('Manager');
			$info->create();
			$info=$info->add();
			if($info){
				$this->success('添加成功');
			}else{
				$this->error($info->getError);
			}
		}else{
			$options = M('AuthGroup')->where(array('status'=>1))->select();
			$config = array(
			'type'=>'newform');
			$jankzmaker = new \Maker\Controller\JankzMaker();
			$jankzmaker->setMetaTitle('添加管理员')
				->addConfTpl($config)
				->setUrl(U('Manager/add'))
				->addFormItem('username','text','管理员名称')
				->addFormItem('password','text','密码')
				->addFormItem('repassword','text','重复密码')
				->addFormItem('email','text','邮箱')
				->addFormItem('level','text','管理等级')
				->addFormItem('group_id','select','用户组id',$options)
				->display();
		}
	}
	public function test(){
		$manager = D('Manager');
		$manager = $manager->where(array('status'=>1))->relation(true)->select();
		foreach ($manager as $key => $value) {
			foreach ($value as $key => $val) {
				if(is_array($val)){
					foreach ($val as $key => $va) {
						print_r($va);
					}
				}
			}
		}
		// print_r($manager);
	}

}


 ?>