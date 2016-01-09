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
	public function addmenu(){
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
			$config = array('type'=>'newform');
			$jankzmaker = new \Maker\Controller\JankzMaker();
			$jankzmaker->setMetaTitle('后台管理')
					->addConfTpl($config)//配置
					->setUrl(U('System/addmenu'))
					->addFormItem('title','text','菜单名称')
					->addFormItem('sort','text','排序值')
					->addFormItem('url','text','链接地址')
					->addFormItem('icon','text','图标')
					->addFormItem('pid','select','父ID',$info)
					->display();
		}
	}
	public function menulist(){
		$config =array(
		'type' => 'newtable',
		'col'=>array(
		0=>array('type'=>'newtable'),//构建布局
		1=>array('type'=>'newtable')));//构建布局
		//生成页面之前建构数据模型
		$table=array(
    		'id'=>'id',
    		'pid'=>'父ID',
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
 		$jankzmaker = new \Maker\Controller\JankzMaker();
		$jankzmaker->setMetaTitle('测试')
				->addConfTpl($config)//添加配置
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

}
 ?>