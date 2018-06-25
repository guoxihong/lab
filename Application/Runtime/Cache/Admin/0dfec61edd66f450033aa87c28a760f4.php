<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>预约系统后台登录</title>
	<link rel="stylesheet" type="text/css" href="/lab/Public/layui/css/layui.css">
	<link rel="stylesheet" type="text/css" href="/lab/Public/Admin/css/login.css">
	<script type="text/javascript" src="/lab/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/lab/Public/Admin/js/main.js"></script>
</head>
<body>
   <div class="l_top">
      <img src="/lab/Public/Admin/img/LOGO.png">
      <!-- <ul class="lt_nav">
         <li><a href="#">系统介绍</a></li>
         <li><a href="#">使用说明</a></li>
         <li><a href="#">联系我们</a></li>
      </ul> -->
   </div>
   <div class='l_content'>
      <div class="lc_left">
         <h1>实验室预约系统后台管理</h1>
         <p>主要用于管理实验室预约系统，管理员可录入学生和教师的信息，查看各实验室的预约情况，可进行预约控制和预约审核</p>
         <a href="../../Home/Login/login">进入首页</a>
      </div>

      <div class="lc_right">
         <h4>帐号登录</h4>
         <form action="/lab/index.php/Admin/Login/login" method="post">
            <div class="m_text">
               <span></span>
               <input type="text" name="mg_name" class="m_username" autocomplete="off" placeholder="用户名">
            </div>
            <div class="m_text">
               <span></span>
               <input type="password" name="mg_pwd" class="m_password" placeholder="密码">
            </div>
            <!-- <label>
               <input type="checkbox" name="m_l">自动登录
            </label>
            <a class="m_lost" href="#">忘记密码</a>
            <a class="m_register" href="#">帮助</a> -->
            <div><input type="submit" value="登录" class="m_btn"></div>
         </form>
         
      </div>
   </div>





	
</body>
</html>