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
   <h1 class="h-title">录入预约时间段</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Lab/appmTimeAdd" method="post">
        <div class="layui-form-item">
           <label class="layui-form-label">预约时间段</label>
           <div class="layui-input-block">
               <input type="text" name="at_time" required  lay-verify="required" placeholder="请输入预约时间段,如7:00-9:00格式" autocomplete="off" class="layui-input">
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