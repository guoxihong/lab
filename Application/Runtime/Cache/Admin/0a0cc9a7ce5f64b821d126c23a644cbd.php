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
   <h1 class="h-title">录入注意事项信息</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Lab/noticeAdd" method="post">
        <div class="layui-form-item layui-form-text">
           <label class="layui-form-label">注意事项</label>
           <div class="layui-input-block">
              <textarea placeholder="请输入内容" name="no_content" class="layui-textarea"></textarea>
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