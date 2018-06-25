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
   <h1 class="h-title">修改公告栏信息</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Lab/annmUpdate/an_id/<?php echo ($data["an_id"]); ?>" method="post">
        <div class="layui-form-item layui-form-text">
           <label class="layui-form-label">公告栏信息</label>
           <div class="layui-input-block">
              <textarea  name="an_content" class="layui-textarea"><?php echo ($data["an_content"]); ?></textarea>
           </div>
        </div>
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit>立即提交</button>
            <a href="/lab/index.php/Admin/Lab/annmlist" class="layui-btn layui-btn-primary">返回</a>
          </div>
        </div>
      </form>
   </div>
</body>
</html>