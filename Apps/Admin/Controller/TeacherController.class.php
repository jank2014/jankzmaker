<?php
namespace Admin\Controller;
use Think\Controller;

class TeacherController extends Controller{
	public function index(){
		$page = $_GET['page'];
		$table=array(
			'id'			=>'主键',
			'name'			=>'姓名',
			'phone'			=>'联系',
			'email'			=>'邮箱',
			'grade'			=>'年级',
			'subject'		=>'科目',
			'isinorder'		=>'预约状态',
			'status'		=>'状态',
			'c_time'		=>'创建时间',
			'u_time'		=>'最后修改时间',
			);
		$count = M('Teacher')->count();
		$page_list = ceil($count/10);
		$info = M('Teacher')->where(array('status'=>1))->page($page,10)->select();
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
			$info = D('Teacher');
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
				->setUrl(U('Teacher/add'))
				->addFormItem('name','text','姓名')
				->addFormItem('introduce','textarea','介绍')
				->addFormItem('phone','text','联系')
				->addFormItem('email','text','邮箱')
				->addFormItem('grade','text','年级')
				->addFormItem('subject','text','科目')
				->display();
		}
	}
	public function edit() {
		$id =I('id','',intval);
		$Teacher = M('Teacher');
		$info = $Teacher->find($id);
		if(!empty($_POST)){
			$_POST['id'] = $_GET['id'];
			$Teacher = M('Teacher');
			$Teacher->create();
			$info = $Teacher->save();
			if($info){
				$this->success('已编辑',U('Teacher/index'));
			}else{
				$this->error('编辑失败!');
			}
		}else{
			$options = M('AuthGroup')->where(array('status'=>1))->select();
			$jankzmaker = new \JankzMaker\Controller\Admin\MakerForm();
			$jankzmaker->setMetaTitle('编辑管理员')
				->setCoulmn(1)//设置是否分列
				->setUrl(U('Teacher/edit',array('id'=>$id)))
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
		$Teacher = M('Teacher');
		$info = $Teacher->delete($id);
		if($info){
			$this->success('删除成功',U('Teacher/index'));
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
		$Teacher = M('Teacher');
		$_POST['id'] = $id;
		$_POST['status'] = $status;
		$Teacher->create();
		$info = $Teacher->save();
		if($info){
			$this->success('锁定成功',U('Teacher/index'));
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
		$Teacher = M('Teacher');
		$_POST['id'] = $id;
		$_POST['status'] = $status;
		$Teacher->create();
		$info = $Teacher->save();
		if($info){
			$this->success('开启成功',U('Teacher/index'));
		}else{
			$this->error('开启失败');
		}

	}

}


 ?>