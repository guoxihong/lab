<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/lab/Public/layui/css/layui.css">
	<script type="text/javascript" src="/lab/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/lab/Public/Admin/js/main.js"></script>
	<style type="text/css">
	    h1 { font-size: 18px; font-weight: bold; height: 50px; line-height: 50px; padding-left: 20px;}
	   .stu-form { width: 500px; margin: 50px auto; }
	</style>
</head>
<body>
   <h1>录入学生信息</h1>
   <div class="stu-form">
      <form class="layui-form" action="">
        <div class="layui-form-item">
          <label class="layui-form-label">姓名</label>
          <div class="layui-input-block">
            <input type="text" name="stuname" required  lay-verify="required" placeholder="请输入学生姓名" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">密码</label>
          <div class="layui-input-inline">
            <input type="password" name="stupwd" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
          </div>
          <div class="layui-form-mid layui-word-aux">长度为6-16个字符,不能包含空格</div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">学号</label>
          <div class="layui-input-block">
            <input type="text" name="stuid" required  lay-verify="required" placeholder="请输入学生学号" autocomplete="off" class="layui-input">
          </div>
        </div>
        
        <div class="layui-form-item">
          <label class="layui-form-label">单选框</label>
          <div class="layui-input-block">
            <input type="radio" name="sex" value="男" title="男">
            <input type="radio" name="sex" value="女" title="女" checked>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">手机号码</label>
          <div class="layui-input-block">
            <input type="text" name="stuphone" required  lay-verify="required" placeholder="请输入手机号码" autocomplete="off" class="layui-input">
          </div>
        </div>
       
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit>立即提交</button>
            <button type="reset" class="layui-btn layui-btn-primary">重置</button>
          </div>
        </div>
      </form>
   </div>


  

	
</body>
</html>