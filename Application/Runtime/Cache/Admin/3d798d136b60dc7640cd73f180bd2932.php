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
   <h1 class="h-title">修改注意事项信息</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Lab/noticeUpdate/no_id/<?php echo ($data["no_id"]); ?>" method="post">
        <div class="layui-form-item layui-form-text">
           <label class="layui-form-label">注意事项</label>
           <div class="layui-input-block">
              <textarea  name="no_content" class="layui-textarea"><?php echo ($data["no_content"]); ?></textarea>
           </div>
        </div>
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit>立即提交</button>
            <a href="/lab/index.php/Admin/Lab/noticelist" class="layui-btn layui-btn-primary">返回</a>
          </div>
        </div>
      </form>
   </div>
</body>
</html>