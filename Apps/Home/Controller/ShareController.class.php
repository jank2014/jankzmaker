<?php
namespace Home\Controller;
use Think\Controller;

class ShareController extends Controller {
	public function index(){
		$this->display();
	}
}

public function parentnum(){
		if(!empty($_POST)){
			$student = M("Student");
			$map['stu_name'] = $_POST['stu_name'];
			$map['stu_munber'] = $_POST['stu_munber'];
			$map['phone']=$_POST['phone'];
			$student = $student->where($map)->find();
			if($student){
				$parent_number = $student['parent_number'];
				$user = M('User')->where('');
				$_POST['parent_number'] = $parent_number;
				$user->create();
				$info = $user->where(array('id'=>$_POST['id']))->save();
				if($info){
					$userstudent = M("UserStudent");
					$this->success('获取成功',U('User/info'));
				}else{
					$this->error('获取家长号失败！');
				}
			}else{
				$this->error('学生信息不匹配！');
			}
		}else{
			$this->display();
		}
	}


 ?>