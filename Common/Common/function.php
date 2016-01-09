<?php
/**
 * 无限极分类
 * @param  integer $pid     [传入父id]
 * @param  array   &$result [结果存入新的数组]
 * @param  integer $spac    [空格数]
 * @return [type]           [返回递归后的数组]
 * @author jankz by www.jankz.com 邮箱jankz@jankz.com
 *
 */

/**
 * [getList 递归生成无限级分类]
 * @param  integer $pid     [description]
 * @param  array   &$result [description]
 * @param  integer $spac    [description]
 * @return [type]           [description]
 */
function getList($pid = 0,&$result=array(0=>array('id'=>'0','title'=>'|--顶级菜单')),$spac=0){
	$spac+=4;
	$system = M('System');
	$info = $system->field('id,pid,title')->where(array('pid'=>$pid))->select();
	foreach ($info as $key => $val) {
		$val['title'] = str_repeat('&nbsp;',$spac).'|--'.$val['title'];
		$result[] = $val;
		getList($val['id'],$result,$spac);
	}
	return $result;

}

//递归生成菜单数组
function getInto($pid=0,&$result=array()){
	$system = M('System');
	$info = $system->where(array('status'=>1,'pid'=>$pid))->select();
	foreach ($info as $key => $val) {
		$result[$val['id']] = $val;
		getInto($val['id'],$result[$val['id']][]);
	}
	return $result;

}
/**
 * [makeTable 处理自定义表格]
 * @param  [type] $table [description]
 * @return [type]        [description]
 */

function makeTable($table){
    foreach ($table as $key => $value) {
		$make_thead['thead'][] =array('name'=>$value);
		$make_list['list'][] =array('name'=>$key);
	}
	return array_merge($make_thead,$make_list);//将两个数组合并返回 这里建议放到jankzmaker 中使用便于移植
}

function dateFormat($date=null,$format="Y-m-d H:i:s"){
	$date = $date== NULL ? NOW_TIME:intval($date);
	return date($format,$date);
}


 ?>