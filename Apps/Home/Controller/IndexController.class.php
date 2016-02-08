<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index(){
		$this->display();
	}
	public function search(){
		$student = M('Student');
		$map['stu_number'] = $_POST['stu_number'];
		$map['stu_name'] = $_POST['stu_name'];
		$info = $student->where($map)->find();
		if($info){
			var_dump($info);
		}
		$this->display();
	}
	public function detail(){
		$exams =M('Exam')->where('status = 1')->select();
		foreach ($exams as $key => $value) {
			$value['stu_number'] = $_POST['stu_number'];
			$exam[] = $value;
		}
		$this->exam = $exam;
		$this->display();

	}
	public function moredetail(){
		$grade = M('Grade');
		$map['stu_number']=$_POST['stu_number'];
		$map['exam_id'] = $_POST['exam_id'];
		$grade = $grade->where($map)->select();
		$this->grade=$grade;
		$this->display();

	}
}