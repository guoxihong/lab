<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
	public function login(){
		$man = M('manager');
		if(IS_POST){
			$data = $man->create();
			$row = $man->where($data)->find();
			$name = $row['mg_name'];
			if($row){
				session('name','abc');
				$this->redirect("Admin/Manager/index/name/{$name}");
			}else{
				$this->error('用户名或密码错误',U('login'),3);
			}
		}
		$this->display();
	}

	
}
?>