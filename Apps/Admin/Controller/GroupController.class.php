<?php
namespace Admin\Controller;
use Think\Controller;

class GroupController extends Controller{
	public function index(){
		$page = $_GET['page'];
		$config = array(
			'type'=>'newtable');
		$table=array(
			'id'		=>'主键',
			'title'		=>'用户组中文名称',
			'rules'		=>'用户组拥有权限id用,隔开',
			'status'	=>'状态'
			);
		$count = M('AuthRule')->count();
		$page_list = ceil($count/10);
		$info = M('AuthGroup')->where(array('status'=>1))->page($page,10)->select();
		$make_table=makeTable($table);
		$jankzmaker = new \Maker\Controller\JankzMaker();
		$jankzmaker->setMetaTitle('用户组管理')
				->addConfTpl($config)
				->setThead($make_table['thead'])
				->setTbodyList($make_table['list'])
				->setTbodyData($info)
				->addTopBtn('default')
				->setPage($page_list)
				->display();

	}
	public function add(){//编辑和添加用同一个方法

		if(!empty($_POST)){
			$group = M('AuthGroup');
			$group->create();
			$res = $group->add();
			if($res){
				$this->success('添加成功');
			}else{
				$this->error($info->getError);
			}
		}else{
			$config = array(
			'type'=>'newform');
			$jankzmaker = new \Maker\Controller\JankzMaker();
			$jankzmaker->setMetaTitle('添加用户组')
				->addConfTpl($config)
				->setUrl(U('Group/add'))
				->addFormItem('title','text','用户组名')
				->addFormItem('rules','text','规则id')
				->display();
		}
	}


}

 ?>