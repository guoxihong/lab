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
   <h1 class="h-title">修改实验室信息</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Lab/labUpdate/lab_id/<?php echo ($data["lab_id"]); ?>" method="post">
        <div class="layui-form-item">
          <label class="layui-form-label">实验室名称</label>
          <div class="layui-input-block">
            <input type="text" name="lab_name" required  lay-verify="required"  autocomplete="off" class="layui-input" value="<?php echo ($data["lab_name"]); ?>">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">实验室地址</label>
          <div class="layui-input-block">
            <input type="text" name="lab_address" required  lay-verify="required"  autocomplete="off" class="layui-input" value="<?php echo ($data["lab_address"]); ?>">
          </div>
        </div>
        
        <div class="layui-form-item">
          <label class="layui-form-label">实验室用途</label>
          <div class="layui-input-block">
            <input type="text" name="lab_use" required  lay-verify="required"  autocomplete="off" class="layui-input" value="<?php echo ($data["lab_use"]); ?>">
          </div>
        </div>
        
        <div class="layui-form-item layui-form-text">
           <label class="layui-form-label">备注</label>
           <div class="layui-input-block">
              <textarea  name="lab_remark" class="layui-textarea"><?php echo ($data["lab_remark"]); ?></textarea>
           </div>
        </div>
       
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit>立即提交</button>
            <a href="/lab/index.php/Admin/Lab/lablist" class="layui-btn layui-btn-primary">返回</a>
          </div>
        </div>
      </form>
   </div>


  

	
</body>
</html>