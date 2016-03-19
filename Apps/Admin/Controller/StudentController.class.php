<?php
namespace Admin\Controller;
use Think\Controller;

class StudentController extends Controller {
	/*
	手动添加学生
	 */
	public function index(){
		$page = $_GET['page'];
		$table=array(
			'id'			=>'主键',
			'stu_name'		=>'学生姓名',
			'stu_number'	=>'学号',
			'parent_number'	=>'家长号',
			'phone'			=>'电话',
			'status'		=>'状态',
			'c_time'		=>'创建时间',
			'u_time'		=>'最后修改时间',
			);
		$count = M('Student')->count();
		$page_list = ceil($count/10);
		$info = M('Student')->where(array('status'=>1))->page($page,10)->select();
		$make_table=makeTable($table);
		$jankzmaker = new \JankzMaker\Controller\Admin\MakerTable();
		$jankzmaker->setMetaTitle('学生列表')
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
	/*
	添加学生
	 */
	public function add(){//编辑和添加用同一个方法
		if(!empty($_POST)){
			$info = D('Student');

			$info->create();

			$info=$info->add();
			if($info){
				$this->success('添加成功',U('Student/index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$jankzmaker = new \JankzMaker\Controller\Admin\MakerForm();
			$jankzmaker->setMetaTitle('添加学生')
				->setCoulmn(1)//设置是否分列
				->setUrl(U('Student/add'))
				->addFormItem('stu_name','text','姓名')
				->addFormItem('stu_number','text','学号')
				->addFormItem('parent_number','text','家长号')
				->addFormItem('phone','text','电话')
				->display();
		}
	}
	/*
	编辑信息
	 */
	public function edit() {
		$id =I('id','',intval);
		$student = M('Student');
		$info = $student->find($id);
		if(!empty($_POST)){
			$_POST['id'] = $_GET['id'];
			$student = M('Student');
			$student->create();
			$info = $student->save();
			if($info){
				$this->success('已编辑',U('Student/index'));
			}else{
				$this->error('编辑失败!');
			}
		}else{
			$jankzmaker = new \JankzMaker\Controller\Admin\MakerForm();
				$jankzmaker->setMetaTitle('添加学生')
					->setCoulmn(1)//设置是否分列
					->setUrl(U('Student/edit',array('id'=>$id)))
					->addFormItem('stu_name','text','姓名',$info['stu_name'])
					->addFormItem('stu_number','text','学号',$info['stu_number'])
					->addFormItem('parent_number','text','家长号',$info['parent_number'])
					->addFormItem('phone','text','电话',$info['phone'])
					->display();
		}

	}
	/*
	删除学生信息
	 */
	public function delete(){
		$id = $_GET['id'];
		$status = $_GET['status'];
		$student = M('Student');
		$info = $student->delete($id);
		if($info){
			$this->success('删除成功',U('Student/index'));
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
		$student = M('Student');
		$_POST['id'] = $id;
		$_POST['status'] = $status;
		$student->create();
		$info = $student->save();
		if($info){
			$this->success('锁定成功',U('Student/index'));
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
		$student = M('Student');
		$_POST['id'] = $id;
		$_POST['status'] = $status;
		$student->create();
		$info = $student->save();
		if($info){
			$this->success('开启成功',U('Student/index'));
		}else{
			$this->error('开启失败');
		}

	}
}

 ?>