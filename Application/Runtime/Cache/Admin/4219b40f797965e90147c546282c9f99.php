<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/lab/Public/layui/css/layui.css">
  <link rel="stylesheet" type="text/css" href="/lab/Public/Admin/css/public.css">
	<script type="text/javascript" src="/lab/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/lab/Public/Admin/js/main.js"></script>
</head>
<body>
   <h1 class="h-title">录入学生信息</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Person/stuAdd" method="post">
        <div class="layui-form-item">
          <label class="layui-form-label">姓名</label>
          <div class="layui-input-block">
            <input type="text" name="st_name" required  lay-verify="required" placeholder="请输入学生姓名" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">密码</label>
          <div class="layui-input-inline">
            <input type="text" name="st_pwd" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
          </div>
          <div class="layui-form-mid layui-word-aux">长度为6-16个字符,不能包含空格</div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">学号</label>
          <div class="layui-input-block">
            <input type="text" name="st_no" required  lay-verify="required" placeholder="请输入学生学号" autocomplete="off" class="layui-input">
          </div>
        </div>
        
        <div class="layui-form-item">
          <label class="layui-form-label">用户类型</label>
          <div class="layui-input-block">
            <input type="radio" name="st_usertype" value="学生" title="学生" checked>
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">身份证</label>
          <div class="layui-input-block">
            <input type="text" name="st_identity" required  lay-verify="required" placeholder="请填写身份证" autocomplete="off" class="layui-input">
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