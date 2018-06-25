<?php
namespace Admin\Controller;
use Think\Controller;
class PersonController extends Controller{
	//添加学生信息
	public function stuAdd(){
		if(session('name') == 'abc'){
			if(IS_POST){
				$id = $_POST['st_no'];
				if(M('stuinformation')->where(array('st_no'=>$id))->find()){
					$this->error('该学号已经存在');
				}else{
					$data = I('post.');
					if(M('stuinformation')->add($data)){
						$this->success('添加成功','',3);
					}else{
						$this->error('添加失败');
					}
				}
				
			}
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//更新学生信息
	public function stuupdate($st_id){
		if(IS_POST){
			$newData = M('stuinformation')->create();
			$stu = M('stuinformation')->find($st_id);
			
			if($newData[st_usertype] == $stu[st_usertype]){
				if(M('stuinformation')->where("st_id = $st_id")->save($newData)){
					$this->success('修改成功',U('Manager/right'),3);
				}else{
					$this->error('修改失败');
				}
			}else{
				$data[te_name] = $newData[st_name];
				$data[te_pwd] = $newData[st_pwd];
				$data[te_no] = $newData[st_no];
				$data[te_usertype] = $newData[st_usertype];
				$data[te_identity] = $newData[st_identity];
				if(M('teacher')->add($data)){
					M('stuinformation')->delete($st_id);
					$this->success('修改成功',U('Manager/right'),3);
				}else{
					$this->error('修改失败');
				}
			}
			
		}
		$data = M('stuinformation')->find($st_id);
		$this->assign('data',$data);
		$this->display();

	}
	//删除学生信息
	public function studel($st_id){
		if(M('stuinformation')->delete($st_id)){
			$this->success('删除成功','',3);
		}else{
			$this->error('删除失败');
		}

	}

	//精确查询学生
	public function stusearch(){
		if(IS_POST){
			$st_no = I('post.st_no');
			$list = M('stuinformation')->where("st_no = $st_no")->select();
			$this->assign('list',$list);
			$this->display('Manager/right');
		}
	}

	//添加教师信息
	public function teacherAdd(){
		if(session('name') == 'abc'){
			if(IS_POST){
				$data = I('post.');
				if(M('teacher')->add($data)){
					$this->success('添加成功','',3);
				}else{
					$this->error('添加失败');
				}
				
			}
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//显示教师信息
	public function teacherlist(){
		if(session('name') == 'abc'){
			$model = M('teacher');
			$recordcount = $model->count();
			$page = new \Think\Page($recordcount,20);

			$page->rollPage = 6;
			$page->setConfig('prev','【上一页】');
			$page->setConfig('next','【下一页】');
			$page->setConfig('first','【首页】');
			$page->setConfig('last','【末页】');
			$page->lastSuffix=false;
			$page->setConfig('theme','共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');

			$startno = $page->firstRow;
			$pagesize = $page->listRows;
			$list = $model->limit($startno,$pagesize)->select();
			
			$pagestr = $page->show();
			$this->assign('pagestr',$pagestr);
			$this->assign('list',$list);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//更新教师信息
	public function teaupdate($te_id){
		if(IS_POST){
			$newData = M('teacher')->create();
			$te = M('teacher')->find($te_id);
			if($newData[te_usertype] == $te[te_usertype]){
				if(M('teacher')->where("te_id = $te_id")->save($newData)){
					$this->success('修改成功',U('Person/teacherlist'),3);
				}else{
					$this->error('修改失败');
				}
			}else{
				$data[st_name] = $newData[te_name];
				$data[st_pwd] = $newData[te_pwd];
				$data[st_no] = $newData[te_no];
				$data[st_usertype] = $newData[te_usertype];
				$data[st_identity] = $newData[te_identity];
				if(M('stuinformation')->add($data)){
					M('teacher')->delete($te_id);
					$this->success('修改成功',U('Person/teacherlist'),3);
				}else{
					$this->error('修改失败');
				}
			}
		}
		$data = M('teacher')->find($te_id);
		$this->assign('data',$data);
		$this->display();
	}

	//删除教师信息
	public function teadel($te_id){
		if(M('teacher')->delete($te_id)){
			$this->success('删除成功','',3);
		}else{
			$this->error('删除失败');
		}
	}

	//精确查询教师
	public function tesearch(){
		if(IS_POST){
			$te_no = I('post.te_no');
			$list = M('teacher')->where("te_no = $te_no")->select();
			$this->assign('list',$list);
			$this->display('Person/teacherlist');
		}
	}


	//添加管理员信息
	public function managerAdd(){
		if(session('name') == 'abc'){
			if(IS_POST){
				$data = I('post.');
				if(M('manager')->add($data)){
					$this->success('添加成功','',3);
				}else{
					$this->error('添加失败');
				}
			}
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//显示管理员信息
	public function managerList(){
		if(session('name') == 'abc'){
			$model = M('manager');
			$recordcount = $model->count();
			$page = new \Think\Page($recordcount,20);

			$page->rollPage = 6;
			$page->setConfig('prev','【上一页】');
			$page->setConfig('next','【下一页】');
			$page->setConfig('first','【首页】');
			$page->setConfig('last','【末页】');
			$page->lastSuffix=false;
			$page->setConfig('theme','共 %TOTAL_ROW% 条记录 %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');

			$startno = $page->firstRow;
			$pagesize = $page->listRows;
			$list = $model->limit($startno,$pagesize)->select();
			
			$pagestr = $page->show();
			$this->assign('pagestr',$pagestr);
			$this->assign('list',$list);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		

	}

	//更新管理员信息
	public function manupdate($mg_id){
		if(IS_POST){
			$newData = M('manager')->create();
			if(M('manager')->where("mg_id = $mg_id")->save($newData)){
				$this->success('修改成功',U('Person/managerlist'),3);
			}else{
				$this->error('修改失败');
			}
		}
		$data = M('manager')->find($mg_id);
		$this->assign('data',$data);
		$this->display();
	}

	//删除管理员信息
	public function mandel($mg_id){
		if(M('manager')->delete($mg_id)){
			$this->success('删除成功','',3);
		}else{
			$this->error('删除失败');
		}
	}
}
?>