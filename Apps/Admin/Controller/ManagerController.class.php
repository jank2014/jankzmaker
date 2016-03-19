<?php
namespace Admin\Controller;
use Think\Controller;

class ManagerController extends Controller{
	public function index(){
		$page = $_GET['page'];
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
		$jankzmaker = new \JankzMaker\Controller\Admin\MakerTable();
		$jankzmaker->setMetaTitle('管理员列表')
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
	public function add(){
		if(!empty($_POST)){
			$info = D('Manager');
			$info->create();
			$info=$info->add();
			if($info){
				$this->success('添加成功');
			}else{
				$this->error($this->getError);
			}
		}else{
			$options = M('AuthGroup')->where(array('status'=>1))->select();
			$jankzmaker = new \JankzMaker\Controller\Admin\MakerForm();
			$jankzmaker->setMetaTitle('添加管理员')
				->setCoulmn(1)//设置是否分列
				->setUrl(U('Manager/add'))
				->addFormItem('username','text','管理员名称')
				->addFormItem('password','text','密码')
				->addFormItem('repassword','text','重复密码')
				->addFormItem('email','text','邮箱')
				->addFormItem('level','text','管理等级')
				->addFormItem('group_id','select','用户组id','',1,2,10,$options)
				->display();
		}
	}
	public function edit() {
		$id =I('id','',intval);
		$manager = M('Manager');
		$info = $manager->find($id);
		if(!empty($_POST)){
			$_POST['id'] = $_GET['id'];
			$manager = M('Manager');
			$manager->create();
			$info = $manager->save();
			if($info){
				$this->success('已编辑',U('Manager/index'));
			}else{
				$this->error('编辑失败!');
			}
		}else{
			$options = M('AuthGroup')->where(array('status'=>1))->select();
			$jankzmaker = new \JankzMaker\Controller\Admin\MakerForm();
			$jankzmaker->setMetaTitle('编辑管理员')
				->setCoulmn(1)//设置是否分列
				->setUrl(U('Manager/edit',array('id'=>$id)))
				->addFormItem('username','text','管理员名称',$info['username'])
				->addFormItem('password','text','密码',$info['password'])
				->addFormItem('repassword','text','重复密码',$info['password'])
				->addFormItem('email','text','邮箱',$info['email'])
				->addFormItem('level','text','管理等级',$info['level'])
				->addFormItem('group_id','select','用户组id','',1,2,10,$options)
				->display();
		}

	}
	/*
	删除学生信息
	 */
	public function delete(){
		$id = $_GET['id'];
		$status = $_GET['status'];
		$manager = M('Manager');
		$info = $manager->delete($id);
		if($info){
			$this->success('删除成功',U('Manager/index'));
		}else{
			$this->error('删除失败');
		}

	}
	/*
	禁用
	 */
		public function forbid(){
		$id = $_GET['id'];
		$status = $_GET['status'];
		$manager = M('Manager');
		$_POST['id'] = $id;
		$_POST['status'] = $status;
		$manager->create();
		$info = $manager->save();
		if($info){
			$this->success('锁定成功',U('Manager/index'));
		}else{
			$this->error('锁定失败');
		}

	}

	/*
	启用
	 */
		public function resume(){
		$id = $_GET['id'];
		$status = $_GET['status'];
		$manager = M('Manager');
		$_POST['id'] = $id;
		$_POST['status'] = $status;
		$manager->create();
		$info = $manager->save();
		if($info){
			$this->success('开启成功',U('Manager/index'));
		}else{
			$this->error('开启失败');
		}

	}

}


 ?>