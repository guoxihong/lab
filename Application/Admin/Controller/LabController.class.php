<?php
namespace Admin\Controller;
use Think\Controller;

class LabController extends Controller{
	//录入实验室
	public function labAdd(){
		if(session('name') == 'abc'){
			if(IS_POST){
				$data = M('lab')->create();
				if(M('lab')->add($data)){
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

	//显示实验室信息
	public function lablist(){
		if(session('name') == 'abc'){
			$model = M('lab');
			$recordcount = $model->count();
			$page = new \Think\Page($recordcount,10);
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

    //更新实验室信息
	public function labupdate($lab_id){
		if(IS_POST){
			$newData = M('lab')->create();
			if(M('lab')->where("lab_id = $lab_id")->save($newData)){
				$this->success('修改成功',U('Lab/lablist'),3);
			}else{
				$this->error('修改失败');
			}
		}
		$data = M('lab')->find($lab_id);
		$this->assign('data',$data);

		$this->display();
	}


    //删除实验室信息
	public function labdel($lab_id){
		if(M('lab')->delete($lab_id)){
			$this->success('删除成功','',3);
		}else{
			$this->error('删除失败');
		}

	}

	//录入公告栏信息
	public function annmAdd(){
		if(session('name') == 'abc'){
			if(IS_POST){
				$data = M('annm')->create();
				if(M('annm')->add($data)){
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


	//显示公告栏信息
	public function annmlist(){
		if(session('name') == 'abc'){
			$model = M('annm');
			$recordcount = $model->count();
			$page = new \Think\Page($recordcount,10);
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

	//更新公告栏信息
	public function annmupdate($an_id){
		if(IS_POST){
			$newData = M('annm')->create();
			if(M('annm')->where("an_id = $an_id")->save($newData)){
				$this->success('修改成功',U('Lab/annmlist'),3);
			}else{
				$this->error('修改失败');
			}
		}
		$data = M('annm')->find($an_id);
		$this->assign('data',$data);
		$this->display();
	}

    //删除公告栏信息
	public function annmdel($an_id){
		if(M('annm')->delete($an_id)){
			$this->success('删除成功','',3);
		}else{
			$this->error('删除失败');
		}

	}




	//录入注意事项信息
	public function noticeAdd(){
		if(session('name') == 'abc'){
			if(IS_POST){
				$data = M('notice')->create();
				if(M('notice')->add($data)){
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

	//显示注意事项信息
	public function noticelist(){
		if(session('name') == 'abc'){
			$model = M('notice');
			$recordcount = $model->count();
			$page = new \Think\Page($recordcount,10);
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

	//更新注意事项信息
	public function noticeupdate($no_id){
		if(IS_POST){
			$newData = M('notice')->create();
			if(M('notice')->where("no_id = $no_id")->save($newData)){
				$this->success('修改成功',U('Lab/noticelist'),3);
			}else{
				$this->error('修改失败');
			}
		}
		$data = M('notice')->find($no_id);
		$this->assign('data',$data);
		$this->display();
	}

    //删除注意事项信息
	public function noticedel($no_id){
		if(M('notice')->delete($no_id)){
			$this->success('删除成功','',3);
		}else{
			$this->error('删除失败');
		}

	}

	//录入预约时间段
	public function appmtimeAdd(){
		if(session('name') == 'abc'){
			if(IS_POST){
				$data = M('appmtime')->create();
				if(M('appmtime')->add($data)){
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

	//显示预约时间段
	public function appmTimelist(){
		if(session('name') == 'abc'){
			$model = M('appmtime');
			$recordcount = $model->count();
			$page = new \Think\Page($recordcount,10);
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

	//更新预约时间段
	public function appmtimeud($at_id){
		if(IS_POST){
			$newData = M('appmtime')->create();
			if(M('appmtime')->where("at_id = $at_id")->save($newData)){
				$this->success('修改成功',U('Lab/appmtimelist'),3);
			}else{
				$this->error('修改失败');
			}
		}
		$data = M('appmtime')->find($at_id);
		$this->assign('data',$data);
		$this->display();
	}

    //删除预约时间段
	public function appmtimedel($at_id){
		if(M('appmtime')->delete($at_id)){
			$this->success('删除成功','',3);
		}else{
			$this->error('删除失败');
		}
	}

	
}
?>