<?php
namespace Admin\Controller;
use Think\Controller;

class NoticeController extends Controller {
	/*
	获得列表
	 */
	public function index(){
		$page = $_GET['page'];
		$table = array(
			'id'	=>'主键',
			'title'	=>'名称',
			'status'=>'状态',
			'c_time'=>'创建时间',
			'u_time'=>'最后修改时间'
			);
		$count = M('Notice')->count();
		$page_list = ceil(count/12);
		$info = M('Notice')->where(array('status' =>1 ))->select();
		$make_table = makeTable($table);
		$jankzmaker = new \JankzMaker\Controller\Admin\MakerTable();
		$jankzmaker ->setMetaTitle("通知列表页")
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
			$info = D('Notice');
			$info->create();
			$info=$info->add();
			if($info){
				$this->success('添加成功');
			}else{
				$this->error($this->getError);
			}
		}else{
			$jankzmaker = new \JankzMaker\Controller\Admin\MakerForm();
			$jankzmaker->setMetaTitle('添加管理员')
				->setCoulmn(1)//设置是否分列
				->setUrl(U('Notice/add'))
				->addFormItem('title','text','通知名称')
				->addFormItem('content','textarea','通知内容')
				->display();
		}
	}
	public function edit() {
		$id =I('id','',intval);
		$Notice = M('Notice');
		$info = $Notice->find($id);
		if(!empty($_POST)){
			$_POST['id'] = $_GET['id'];
			$Notice = M('Notice');
			$Notice->create();
			$info = $Notice->save();
			if($info){
				$this->success('已编辑',U('Notice/index'));
			}else{
				$this->error('编辑失败!');
			}
		}else{
			$options = M('AuthGroup')->where(array('status'=>1))->select();
			$jankzmaker = new \JankzMaker\Controller\Admin\MakerForm();
			$jankzmaker->setMetaTitle('编辑管理员')
				->setCoulmn(1)//设置是否分列
				->setUrl(U('Notice/edit',array('id'=>$id)))
				->addFormItem('title','text','通知名称',$info['title'])
				->addFormItem('content','textarea','通知内容',$info['content'])
				->display();
		}

	}
	/*
	删除
	 */
	public function delete(){
		$id = $_GET['id'];
		$status = $_GET['status'];
		$Notice = M('Notice');
		$info = $Notice->delete($id);
		if($info){
			$this->success('删除成功',U('Notice/index'));
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
		$Notice = M('Notice');
		$_POST['id'] = $id;
		$_POST['status'] = $status;
		$Notice->create();
		$info = $Notice->save();
		if($info){
			$this->success('锁定成功',U('Notice/index'));
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
		$Notice = M('Notice');
		$_POST['id'] = $id;
		$_POST['status'] = $status;
		$Notice->create();
		$info = $Notice->save();
		if($info){
			$this->success('开启成功',U('Notice/index'));
		}else{
			$this->error('开启失败');
		}

	}

}



 ?>