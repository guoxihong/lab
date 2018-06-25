<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller{
	public function index(){
		if(session('name1') == 'acc'){
			//显示公告栏信息
			$list = M('annm')->select();
			$this->assign('list',$list);

			//显示注意事项
			$listno = M('notice')->select();
			$this->assign('listno',$listno);
			   
			//获取登录的人员
			$name = $_GET['name'];
			$type = $_GET['type'];
			$user = $_GET['user'];
			$this->assign('type',$type);
			$this->assign('user',$user);
			$this->assign('name',$name);

			//获取禁止预约类型
			$ctType = M('control')->find();
			$this->assign('ctType',$ctType);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		

	}


    //显示预约实验室信息
	public function startAppm(){
		if(session('name1') == 'acc'){
			//显示实验室信息
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
			$listlab = $model->limit($startno,$pagesize)->select();

			$pagestr = $page->show();
			$this->assign('pagestr',$pagestr);
			$this->assign('listlab',$listlab);

			//获取登录的人员
			$name = $_GET['name'];
			$type = $_GET['type'];
			$user = $_GET['user'];
			$this->assign('type',$type);
			$this->assign('user',$user);
			$this->assign('name',$name);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

    //预约
	public function appm(){
		if(session('name1') == 'acc'){
			$type = $_GET['type'];
			$user = $_GET['user'];
			if(IS_POST){
				$date = $_POST["af_date"];
				$time = $_POST["af_time"];
				$lab = $_POST["af_labname"];

				if(M("appminfo")->where(array('af_labname'=>$lab,'af_date'=>$date,'af_time'=>$time,'af_check'=>'通过'))->find()){
					$this->error("该时段已被预约");
				}else{
					$appmdata = M('appminfo')->create();
					$name = $_GET['name'];
					$appmdata['af_type'] = $type;
					if(M('appminfo')->add($appmdata)){
						$this->redirect("Home/Index/appmsuccess/name/{$name}/user/{$user}/type/{$type}");
					}else{
						$this->error('预约失败');
					}
				}
			}

			//获取预约时间段
			$time = M('appmtime')->select();
			$this->assign("time",$time);
			
			//获取登录的人员
			$name = $_GET['name'];
			$labname = $_GET['labname'];
			$this->assign('type',$type);
			$this->assign('user',$user);
			$this->assign('labname',$labname);
			$this->assign('name',$name);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	public function appmsuccess(){
		if(session('name1') == 'acc'){
			$user = $_GET['user'];
			$type = $_GET['type'];

			//获取登录的人员
			$name = $_GET['name'];
			$this->assign('name',$name);
			$this->assign('user',$user);
			$this->assign('type',$type);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

    //预约情况
	public function detail(){
		if(session('name1') == 'acc'){
			$user = $_GET['user'];
			$type = $_GET['type'];
			$name = $_GET['name'];

			$data = M('appminfo')->where(array('af_user'=>$name))->select();
			$this->assign('data',$data);

			$this->assign('name',$name);
			$this->assign('user',$user);
			$this->assign('type',$type);

			//获取禁止预约类型
			$ctType = M('control')->find();
			$this->assign('ctType',$ctType);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//个人信息
	public function personal(){
		if(session('name1') == 'acc'){
			$user = $_GET['user'];
			$type = $_GET['type'];
			$name = $_GET['name'];
			
			if($type == '学生'){
				$data = M('stuinformation')->where(array("st_no = $user"))->find();
				$this->assign('data',$data);
			}else if($type == '教师'){
				$data = M("teacher")->where(array("te_no = $user"))->find();
				$this->assign('data',$data);
			}
			$this->assign("user",$user);
			$this->assign('type',$type);
			$this->assign('name',$name);

			//获取禁止预约类型
			$ctType = M('control')->find();
			$this->assign('ctType',$ctType);
			
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//修改个人信息
	public function savepar(){
		if(IS_AJAX){
			$pwd = $_POST["pwd"];
			$iden = $_POST["iden"];
			$id = $_POST["id"];

			if(M('stuinformation')->where(array("st_no = $id"))->find()){
				$data = M('stuinformation')->where(array("st_no = $id"))->find();
				if($pwd != $data["st_pwd"] || $iden != $data["st_identity"]){
					$data["st_pwd"] = $pwd;
					$data["st_identity"] = $iden;
					if(M('stuinformation')->where(array("st_no = $id"))->save($data)){
						echo 'success';
					}
				}
			}else if(M('teacher')->where(array("te_no = $id"))->find()){
				$data = M('teacher')->where(array("te_no = $id"))->find();
				if($pwd != $data["te_pwd"] || $iden != $data["te_identity"]){
					$data["te_pwd"] = $pwd;
					$data["te_identity"] = $iden;
					if(M('teacher')->where(array("te_no = $id"))->save($data)){
						echo 'success';
					}
				}
			}
		}

	}

	//留言板
	public function blog(){
		if(session('name1') == 'acc'){
			$data = M("blog")->order('bl_id desc')->select();
			$this->assign("data",$data);

			$user = $_GET['user'];
			$type = $_GET['type'];
			$name = $_GET['name'];
			$this->assign("user",$user);
			$this->assign('type',$type);
			$this->assign('name',$name);

			//获取禁止预约类型
			$ctType = M('control')->find();
			$this->assign('ctType',$ctType);
			$this->display();
		}else{
			$this->error('请先登录',U('Login/login'),3);
		}
		
	}

	//留言板发表
	public function speak(){
		if(IS_AJAX){
			$speak = $_POST["speak"];
			$name = $_POST["name"];
			$data["bl_name"] = $name;
			$data["bl_speak"] = $speak;
			$data["bl_time"] = date("Y-m-d H:i:s");
			if(M("blog")->add($data)){
				$this->ajaxReturn($data);
			}

		}

	}



}
?>