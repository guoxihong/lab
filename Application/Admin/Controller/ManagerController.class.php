<?php
namespace Admin\Controller;
use Think\Controller;
class ManagerController extends Controller{
	public function index(){
		if(session('name') == 'abc'){
			$name = $_GET['name'];
			$this->assign("name",$name);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	public function right(){
		if(session('name') == 'abc'){
			//数据分页
			$model = M('stuinformation');
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

	public function head(){
		$name = $_GET['name'];
		$this->assign("name",$name);
		$this->display();
	}

	public function left(){
		$name = $_GET['name'];
		$data = M('manager')->where(array('mg_name'=>$name))->find();
		$this->assign("data",$data);
		$this->display();
	}




}

?>