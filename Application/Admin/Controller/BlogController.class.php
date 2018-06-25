<?php
namespace Admin\Controller;
use Think\Controller;

class BlogController extends Controller{
	//显示留言板信息
	public function bloglist(){
		if(session('name') == 'abc'){
			$model = M('blog');
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
			$list = $model->limit($startno,$pagesize)->order('bl_id desc')->select();

			$pagestr = $page->show();
			$this->assign('pagestr',$pagestr);
			$this->assign('list',$list);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//删除留言板信息
	public function blogdel($bl_id){
		if(M('blog')->delete($bl_id)){
			$this->success('删除成功','',3);
		}else{
			$this->error('删除失败');
		}
	}


}





?>