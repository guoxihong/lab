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
   <h1 class="h-title">录入实验室信息</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Lab/labAdd" method="post">
        <div class="layui-form-item">
          <label class="layui-form-label">实验室名称</label>
          <div class="layui-input-block">
            <input type="text" name="lab_name" required  lay-verify="required" placeholder="请输入实验室名称" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">实验室地址</label>
          <div class="layui-input-block">
            <input type="text" name="lab_address" required  lay-verify="required" placeholder="请输入实验室地址" autocomplete="off" class="layui-input">
          </div>
        </div>
        
        <div class="layui-form-item">
          <label class="layui-form-label">实验室用途</label>
          <div class="layui-input-block">
            <input type="text" name="lab_use" required  lay-verify="required" placeholder="请输入实验室用途" autocomplete="off" class="layui-input">
          </div>
        </div>
        
        <div class="layui-form-item layui-form-text">
           <label class="layui-form-label">备注</label>
           <div class="layui-input-block">
              <textarea placeholder="请输入内容" name="lab_remark" class="layui-textarea"></textarea>
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