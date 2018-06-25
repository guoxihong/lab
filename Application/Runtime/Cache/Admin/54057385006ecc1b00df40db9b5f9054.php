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
   <h1 class="h-title">修改管理员信息</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Person/manupdate/mg_id/<?php echo ($data["mg_id"]); ?>" method="post">
        <div class="layui-form-item">
          <label class="layui-form-label">姓名</label>
          <div class="layui-input-block">
            <input type="text" name="mg_name" required  lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo ($data["mg_name"]); ?>">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">密码</label>
          <div class="layui-input-inline">
            <input type="text" name="mg_pwd" required lay-verify="required"  autocomplete="off" class="layui-input" value="<?php echo ($data["mg_pwd"]); ?>">
          </div>
          <div class="layui-form-mid layui-word-aux">长度为6-16个字符,不能包含空格</div>
        </div>
 

        <div class="layui-form-item">
          <label class="layui-form-label">权限</label>
          <div class="layui-input-block">
            <input type="text" name="mg_safe" required  lay-verify="required"  autocomplete="off" class="layui-input" value="<?php echo ($data["mg_safe"]); ?>">
          </div>
        </div>
       
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit>立即提交</button>
            <a href="/lab/index.php/Admin/Person/managerlist" class="layui-btn layui-btn-primary">返回</a>
          </div>
        </div>
      </form>
   </div>


  

	
</body>
</html>