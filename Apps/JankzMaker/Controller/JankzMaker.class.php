<?php
/**
 *
 * @authors jankz (jankz@jankz.com)
 * @date    2016-01-07 17:27:18
 * @qq   979890264
 * @version v1.0
 */
namespace JankzMaker\Controller;
use Think\View;
use Think\Controller;

class JankzMaker extends Controller{
	/**
	 * 表单生成需要元素
	 * @var [type]
	 */
	private $conftpl;			//页面布局 参数 type 生成类型 form table sort picture
	private $pageitems= array();			//页面布局 参数 type 生成类型 form table sort picture

	//提交表单
	private $meta_title;				//页面标题
	private $post_url;					//ajax提交地址
	private $form_items = array();		//表单元素
	private $form_data = array();		//可能表单数据

	//数据表格
	private $topbtns = array();		//表格头部操作按钮 全局
	private $rightbtns = array();		//表格数据右侧操作 按钮 只操作该行
	private $caption;					//数据表格标题
	private $thead = array();			//表格头部
	private $tbody = array();			//数据
	private $main_key = 'id';	//主键数组

	private $search = array();			//搜索
	private $page_list;		//分页数据
	private $is_ajax = true;			//判断ajax提交
	private $extra_html;				//可能使用额外html
	private $template;					//通用模板

	/**
	 * 初始化模板
	 * @return [type] [description]
	 */
	protected function _initialize(){
		$this->template = APP_PATH.'JankzMaker/View/jankzmaker.html';
	}
	/**
	 * [设置页面布局]
	 * @param [type] $layout [description]
	 */
	public function addConfTpl($conftpl){
		$this->conftpl = $conftpl;
		return $this;
	}
	/**
	 * 设置页面标题
	 * @param [type] $meta_title [description]
	 */
	public function setMetaTitle($meta_title){
		$this->meta_title = $meta_title;
		return $this;
	}
	/**
	 * Form ajax提交地址
	 * @param [type] $post_url [description]
	 */
	public function setUrl($post_url){
		$this->post_url = $post_url;
		return $this;
	}
	/**
	 * 添加表单元素
	 * @param [type] $name    [表单元素name 如 username password]
	 * @param [type] $type    [表单元素 type 这里要格外注意 type决定元素类型]
	 * @param [type] $title   [表单前label 或者 表单名]
	 * @param array  $options [下拉框]
	 */
	public function addFormItem($name,$type,$title,$options=array(),$col_l=2,$col_d=10){
		$item['name'] = $name;
		$item['type'] = $type;
		$item['title'] = $title;
		$item['options'] = $options;
		$this->form_items[] =$item;
		return $this;
	}

	public function addPageItem($type){
		$pageitems['type'] = $type;
		$this->pageitems[] = $pageitems;
		return $this;
	}
	/**
	 * [设置表单数据]
	 * @param [type] $form_data [description]
	 */
	public function setFormData($form_data){
		$this->form_data = $form_data;
		return $this;
	}
	/**
	 * [判断是否ajax 方式 默认是]
	 * @param [type] $is_ajax [description]
	 */
	public function setAjax($is_ajax){
		$this->is_ajax = $is_ajax;
		return $this;
	}

//表格生成
	/**
	 * [设置表头]
	 * @param array $thead [description]
	 */
	public function setThead($thead){
		$this->thead = $thead;
		return $this;
	}
	/**
	 * [设置表格数据]
	 * @param array $tbody [description]
	 */
	public function setTbodyData($tbody){//数据库读取的数据
		$this->tbody=$tbody;
		return $this;
	}
	/**
	 * [根据table 设定 匹配从数据库读取数据]
	 * @param [type] $tbody_name [description]
	 */
	public function setTbodyList($tbody_list){//循环列表
		$this->tbody_list = $tbody_list;
		return $this;
	}
	/**
	 * [设置主键]
	 * @param [type] $key [description]
	 */
	public function setKey($main_key){
		$this->main_key = $main_key;
		return $this;
	}
	/**
	 * [数据头部操作]
	 * @param [type] $type [description]
	 */
	public function addTopBtn($type){
		$alltop =array('add','resume','forbid','delete');
		if ($type =='default'){
			$type =$alltop;
		}else{
			$type = $type == is_array($type)?$type:explode(',',$type);//c处理头部按钮输入数据 这里支持三种 数组 字符串
		}
		foreach ($type as $key => $value) {
			switch ($value) {
			case 'add':
				$btn['name'] = '新增';
				$btn['href'] =U(MODULE_NAME.'/'.CONTROLLER_NAME.'/add');
				$btn['btn_class'] = 'btn-primary';
				$btn['i_class'] = 'fa-plus';
				$btns['second'] =$btn;
				break;
			case 'resume':
				$btn['name'] = '启用';
				$btn['select'] ='ids';
				$btn['href'] =U(MODULE_NAME.'/'.CONTROLLER_NAME.'/resume');
				$btn['btn_class'] = 'btn-info';
				$btn['i_class'] = 'fa-check';
				$btns['second'] =$btn;
				break;
			case 'forbid':
				$btn['name'] = '禁用';
				$btn['select'] ='ids';
				$btn['href'] =U(MODULE_NAME.'/'.CONTROLLER_NAME.'/forbid');
				$btn['btn_class'] = 'btn-warning';
				$btn['i_class'] = 'fa-ban';
				$btns['second'] =$btn;
				break;
			case 'delete':
				$btn['name'] = '删除';
				$btn['select'] ='ids';
				$btn['href'] =U(MODULE_NAME.'/'.CONTROLLER_NAME.'/delete');
				$btn['btn_class'] = 'btn-danger';
				$btn['i_class'] = 'fa-trash';
				$btns['second'] =$btn;
				break;
			}
			$this->topbtns[] =$btns;
		}
		return $this;
	}
	/**
	 * [设置表格右侧操作按钮]
	 * @param [type] $type [description]
	 */
	public function addRightBtn($type){
		switch ($type) {
			case 'edit':
				$r_btn['name'] = '编辑';
				$r_btn['href']=U(MODULE_NAME.'/'.CONTROLLER_NAME.'/edit',array($this->main_key=>'__value__id_'));
				$r_btn['btn_class']='btn-info';
				$r_btn['i_class']='fa-edit';
				$this->rightbtns[] = $r_btn;
				break;
			case 'resume':
				$r_btn['name'] = '启用';
				$r_btn['href']=U(MODULE_NAME.'/'.CONTROLLER_NAME.'/resume',array($this->main_key=>'__value__id_','status'=>1));
				$r_btn['btn_class']='btn-info is_ajax';
				$r_btn['i_class']='fa-check';
				$this->rightbtns[] = $r_btn;
				break;
				case 'forbid':
				$r_btn['name'] = '禁用';
				$r_btn['href']=U(MODULE_NAME.'/'.CONTROLLER_NAME.'/forbid',array($this->main_key=>'__value__id_','status'=>0));
				$r_btn['btn_class']='btn-warning is_ajax';
				$r_btn['i_class']='fa-ban';
				$this->rightbtns[] = $r_btn;
				break;
				case 'delete':
				$r_btn['name'] = '删除';
				$r_btn['href']=U(MODULE_NAME.'/'.CONTROLLER_NAME.'/delete',array($this->main_key=>'__value__id_','status'=>1));
				$r_btn['btn_class']='btn-danger is_ajax';
				$r_btn['i_class']='fa-trash-o';
				$this->rightbtns[] = $r_btn;
				break;
		}
		return $this;
		var_dump($this->rightbtns);
	}
	/**
	 * [设置模板]
	 * @param [type] $template [description]
	 */
	public function setTemplate($template){
		$this->template = $template;
		return $this;
	}
	/**
	 * [设置搜索]
	 * @param [type] $search [description]
	 */
	public function setSearch($search){
		$this->search = $search;
		return $this;
	}
	public function setPage($page_list){
		$this->page_list= $page_list;
		return $this;
	}
	public function display(){
				foreach ($this->tbody as $key => &$value) {
					if(count($this->rightbtns)!=0){
						$value['rightbtns'] = $this->rightbtns;
						foreach ($value['rightbtns'] as $key => &$btn) {
							$btn['href']=preg_replace('/__value__id_/',$value[$this->main_key],$btn['href']);
						}
					}
				}

				foreach ($this->tbody as $key => &$value) {
					foreach ($this->tbody_list as $key => $list) {
						switch ($list['name']) {
							case 'c_time':
								$value[$list['name']] = dateFormat($value[$list['name']]);
								break;
							case 'u_time':
								$value[$list['name']] = dateFormat($value[$list['name']]);
								break;
							case 'status':
								if($value[$list['name']]==1){
									$value[$list['name']]='<i class="fa fa-check text-navy"></i>';
								}else{
									$value[$list['name']]='<i class="fa fa-ban text-warning"></i>';
								}
								break;
							case 'icon':
							$value[$list['name']]='<i class="fa '.$value[$list['name']].'"></i>';
								break;
						}
					}
				}
				$this->assign('conftpl',$this->conftpl);
				$this->assign('pageitems',$this->pageitems);
				$this->assign('metatitle',$this->meta_title);
				$this->assign('post_url',$this->post_url);
				$this->assign('form_items',$this->form_items);
				$this->assign('form_data',$this->form_data);
				$this->assign('is_ajax',$this->is_ajax);
				$this->assign('tbody',$this->tbody);
				$this->assign('tbody_list',$this->tbody_list);
				$this->assign('thead',$this->thead);
				$this->assign('rightbtns',$this->rightbtns);
				$this->assign('topbtns',$this->topbtns);
				$this->assign('page_list',$this->page_list);
				parent::display($this->template);
	}

}

 ?>