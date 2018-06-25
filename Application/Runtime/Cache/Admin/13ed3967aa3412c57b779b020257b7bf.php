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
   <h1 class="h-title">预约控制</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Appm/control" method="post">
        <div class="layui-form-item">
           <label class="layui-form-label">禁止预约</label>
           <div class="layui-input-block">
               <select name="ct_type" lay-verify="required">
                   <option value=""><?php echo ($ctType["ct_type"]); ?></option>
                   <option value="无">无</option>
                   <option value="学生">学生</option>
                   <option value="教师">教师</option>
                   <option value="全部禁止">全部禁止</option>
               </select>
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