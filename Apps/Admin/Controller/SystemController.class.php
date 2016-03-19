<?php
namespace Admin\Controller;
use Think\Controller;

class SystemController extends CommonController{
	public function index(){
		$system = M('System');
		$info = $system->where('status=1')->select();
		$this->info=$info;
		$this->display();

	}
	/**
	 * 后台设置
	 * @return [type] [description]
	 */
	public function setting(){
		if(!empty($_POST)){
			var_dump($_POST);
		}else{
			$this->display();
		}

	}
	public function add(){
		if(!empty($_POST)){
			$system =D('System');
			$system->create();
			$res = $system->add();
			if($res){
				$this->success('添加成功',U('System/addmenu'));
			}else{
				$this->error($system->getError());
			}
		}else{
			$info = getList();//调用无限级分类函数
			$jankzmaker = new \JankzMaker\Controller\Admin\MakerForm();
			$jankzmaker->setMetaTitle('后台管理')
					->setCoulmn(1)//配置不分列
					->setUrl(U('System/add'))
					->addFormItem('title','text','菜单名称')
					->addFormItem('sort','text','排序值')
					->addFormItem('url','text','链接地址')
					->addFormItem('icon','text','图标')
					->addFormItem('pid','select','父ID','',1,2,10,$info)
					->display();
		}
	}
	public function menulist(){
		//生成页面之前建构数据模型
		$table=array(
    		'id'=>'id',
    		'pid'=>'父ID',
    		'title'=>'名称',
    		'sort'=>'排序值',
    		'url'=>'链接地址',
    		'icon'=>'图表',
    		'status'=>'状态',
    		'c_time'=>'创建时间',
    		'u_time'=>'修改时间',
    		);
		$page =$_GET['page'];
		$system  = M('System');
		$count = $system->count();
		$page_list = ceil($count/10);
		$info = $system->where(array('status'=>'1'))->page($page,10)->select();

		//调用表格制作函数 返回make_table 用来拆分$tbale 的key 和 value
		$make_table=makeTable($table);
		//调用jankzmaker 生成页面
 		$jankzmaker = new \JankzMaker\Controller\Admin\MakerTable();
 		$jankzmaker->setMetaTitle('测试')
				->setTbodyData($info)//总数据
				->setTbodyList($make_table['list'])//循环列表 这里根据table设定生成
				->setThead($make_table['thead'])//循环表头 这里根据table设定生成
				->addRightBtn('edit')
				->addRightBtn('resume')
				->addRightBtn('forbid')
				->addRightBtn('delete')
				->addTopBtn('add,forbid')
				->addTopBtn('delete')
				->setPage($page_list)
				->display();
	}
	// public function menuadd(){
	// 	if(!empty($_POST)){
	// 		$system =D('System');
	// 		$system->create();
	// 		$res = $system->add();
	// 		if($res){
	// 			$this->success('添加成功',U('System/addmenu'));
	// 		}else{
	// 			$this->error($system->getError());
	// 		}
	// 	}else{
	// 		$info = getList();//调用无限级分类函数
	// 		$config = array('type'=>'newform');
	// 		$jankzmaker = new \JankzMaker\Controller\Admin\MakerForm();
	// 		$jankzmaker->setMetaTitle('测试页')
	// 			->setUrl(U('index'))
	// 			->addFormItem('title','text','名称','',2,6)
	// 			->addFormItem('title','text','菜单名称','',2,6)
	// 			->addFormItem('sort','text','排序值')
	// 			->addFormItem('url','text','链接地址')
	// 			->addFormItem('icon','text','图标')
	// 			->addFormItem('pid','select','父ID','',2,4,$info)
	// 			->display();
	// 	}

	// }
		/*
	编辑信息
	 */
	public function edit() {
		$id =I('id','',intval);
		$system = M('System');
		$res = $system->find($id);
		if(!empty($_POST)){
			$_POST['id'] = $_GET['id'];
			$system = M('System');
			$system->create();
			$result = $system->save();
			if($result){
				$this->success('已编辑',U('System/menulist'));
			}else{
				$this->error('编辑失败!');
			}
		}else{
			$info = getList();//调用无限级分类函数
			$jankzmaker = new \JankzMaker\Controller\Admin\MakerForm();
			$jankzmaker->setMetaTitle('编辑')
				->setUrl(U('System/edit',array('id'=>$id)))
				->setCoulmn(1)//配置不分列
				->addFormItem('title','text','菜单名称',$res['title'])
				->addFormItem('sort','text','排序值',$res['sort'])
				->addFormItem('url','text','链接地址',$res['url'])
				->addFormItem('icon','text','图标',$res['icon'])
				->addFormItem('pid','select','父ID','',1,2,10,$info)
				->display();
			}

	}
	/*
	删除学生信息
	 */
	public function delete(){
		$id = $_GET['id'];
		$status = $_GET['status'];
		$system = M('System');
		$info = $system->delete($id);
		if($info){
			$this->success('删除成功',U('System/menulist'));
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
		$system = M('System');
		$_POST['id'] = $id;
		$_POST['status'] = $status;
		$system->create();
		$info = $system->save();
		if($info){
			$this->success('锁定成功',U('System/menulist'));
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
		$system = M('System');
		$_POST['id'] = $id;
		$_POST['status'] = $status;
		$system->create();
		$info = $system->save();
		if($info){
			$this->success('开启成功',U('System/menulist'));
		}else{
			$this->error('开启失败');
		}

	}



}
 ?>