<?php
namespace Admin\Controller;
use Think\Controller;

class AppmController extends Controller{
	//显示预约信息
	public function appmlist(){
		if(session('name') == 'abc'){
			$model = M('appminfo');
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

	//更新预约信息
	public function appmupdate($af_id){
		if(IS_POST){
			$newData = M('appminfo')->create();
			if(M('appminfo')->where("af_id = $af_id")->save($newData)){
				$this->success('修改成功',U('Appm/appmlist'),3);
			}else{
				$this->error('修改失败');
			}
		}
		$seldata = M('appmtime')->select();
		$data = M('appminfo')->find($af_id);
		$this->assign('data',$data);
		$this->assign('seldata',$seldata);
		$this->display();
	}

	//删除预约信息
	public function appmdel($af_id){
		if(M('appminfo')->delete($af_id)){
			$this->success('删除成功','',3);
		}else{
			$this->error('删除失败');
		}
	}

	//显示审核预约列表
	public function appmcheck(){
		if(session('name') == 'abc'){
			$model = M('appminfo');
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

	//确认审核状态
	public function checkstate(){
		$data = $_POST["val"];
		$id = $_POST["id"];
		$appmData = M("appminfo")->find($id);
		$appmData[af_check] = $data;
		M("appminfo")->where("af_id = $id")->save($appmData);
		echo $data;
	}

	//显示审核信息列表
	public function checklist(){
		if(session('name') == 'abc'){
			$model = M('appminfo');
			$recordcount = $model->where("af_check != ''")->count();
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
			$list = $model->where("af_check != ''")->limit($startno,$pagesize)->select();
			$pagestr = $page->show();
			$this->assign('pagestr',$pagestr);
			$this->assign("list",$list);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//修改审核状态
	public function changestate(){
		$af_id = $_GET["af_id"];
		$data = M("appminfo")->where("af_id = $af_id")->find();

		if(IS_POST){
			$newdata = M("appminfo")->create();
			if(M("appminfo")->where("af_id = $af_id")->save()){
				$this->success("修改成功",U("checklist"),3);
			}else{
				$this->error("修改失败");
			}
		}
		$this->assign("data",$data);
		$this->display();
	}

	//显示预约成功信息
	public function successlist(){
		if(session('name') == 'abc'){
			$model = M('appminfo');
			$recordcount = $model->where("af_check = '通过'")->count();
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
			$list = $model->where("af_check = '通过'")->limit($startno,$pagesize)->select();
			$pagestr = $page->show();
			$this->assign('pagestr',$pagestr);
			$this->assign("list",$list);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//显示预约失败信息
	public function errorlist(){
		if(session('name') == 'abc'){
			$model = M('appminfo');
			$recordcount = $model->where("af_check = '不通过'")->count();
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
			$list = $model->where("af_check = '不通过'")->limit($startno,$pagesize)->select();
			$pagestr = $page->show();
			$this->assign('pagestr',$pagestr);
			$this->assign("list",$list);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//显示未审核预约信息
	public function nochecklist(){
		if(session('name') == 'abc'){
			$model = M('appminfo');
			$recordcount = $model->where("af_check = ''")->count();
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
			$list = $model->where("af_check = ''")->limit($startno,$pagesize)->select();
			$pagestr = $page->show();
			$this->assign('pagestr',$pagestr);
			$this->assign("list",$list);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//预约控制
	public function control(){
		if(session('name') == 'abc'){
			if(IS_POST){
				$data = M("control")->create();
				if(M("control")->where("ct_id = 1")->save($data)){
					$this->success('禁止成功','',3);
				}else{
					$this->error('禁止失败');
				}
			}
			$ctType = M('control')->where('ct_id = 1')->find();
			$this->assign('ctType',$ctType);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}
	
}

?>