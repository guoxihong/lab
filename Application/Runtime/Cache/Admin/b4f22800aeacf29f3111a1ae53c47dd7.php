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
   <h1 class="h-title">修改预约时间段</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Lab/appmtimeUd/at_id/<?php echo ($data["at_id"]); ?>" method="post">
        <div class="layui-form-item">
           <label class="layui-form-label">预约时间段</label>
           <div class="layui-input-block">
               <input type="text" name="at_time" required  lay-verify="required" value="<?php echo ($data["at_time"]); ?>" autocomplete="off" class="layui-input">
           </div>
        </div>
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit>立即提交</button>
            <a href="/lab/index.php/Admin/Lab/appmtimelist" class="layui-btn layui-btn-primary">返回</a>
          </div>
        </div>
      </form>
   </div>
</body>
</html>