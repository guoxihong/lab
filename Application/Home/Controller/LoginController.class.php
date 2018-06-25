<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function verifyImg(){
		$config = array(
			'imageW' => 110,
			'imageH' => 38,
			'fontSize' => 15,
			'length' => 4,
			'fontttf' => '4.ttf'
		);
		$obj = new \Think\Verify($config);
		$obj->entry();
	}
	public function login(){
		if(IS_POST){
			$obj = new \Think\Verify();
			if( I('post.user_type') == "教师"){
				if($obj->check(I('post.captcha'))){
					$te = M('teacher');
					//$this->model = D("login");
					//$data = $this->model->create($_POST);
					//$username = $data['user_name'];
					//$pwd = $data['user_pwd'];
					$username = I('post.user_name');
					$pwd = I('post.user_pwd');
					$check = $te->where(array('te_no' => $username ,'te_pwd' => $pwd))->find();
					$name = $check['te_name'];
					$type = I('post.user_type');
					if($check){
						session('name1','acc');
						$this->redirect("Home/Index/index/name/{$name}/user/{$username}/type/{$type}");
					}else{
						$this->error('用户名或密码错误');
					}
				}else{
					$this->error('验证码错误');
				}
			}else{
				if($obj->check(I('post.captcha'))){
					$st = M('stuinformation');
					$username = I('post.user_name');
					$pwd = I('post.user_pwd');
					$check = $st->where(array('st_no' => $username , 'st_pwd' => $pwd))->find();
					$name = $check['st_name'];
					$type = I('post.user_type');
					if($check){
						session('name1','acc');
						$this->redirect("Home/Index/index/name/{$name}/user/{$username}/type/{$type}");
					}else{
						$this->error('用户名或密码错误');
					}
				}else{
					$this->error('验证码错误');
				}
			}
		}
		$this->display();
	}
    
}