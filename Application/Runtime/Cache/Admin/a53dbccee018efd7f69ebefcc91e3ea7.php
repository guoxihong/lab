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
   <h1 class="h-title">修改教师信息</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Person/teaupdate/te_id/<?php echo ($data["te_id"]); ?>" method="post">
        <div class="layui-form-item">
          <label class="layui-form-label">姓名</label>
          <div class="layui-input-block">
            <input type="text" name="te_name" required  lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo ($data["te_name"]); ?>">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">密码</label>
          <div class="layui-input-inline">
            <input type="text" name="te_pwd" required lay-verify="required"  autocomplete="off" class="layui-input" value="<?php echo ($data["te_pwd"]); ?>">
          </div>
          <div class="layui-form-mid layui-word-aux">长度为6-16个字符,不能包含空格</div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">职工号</label>
          <div class="layui-input-block">
            <input type="text" name="te_no" required  lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo ($data["te_no"]); ?>">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">学院</label>
          <div class="layui-input-block">
            <input type="text" name="te_college" required  lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo ($data["te_college"]); ?>">
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">手机号码</label>
          <div class="layui-input-block">
            <input type="text" name="te_phone" required  lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo ($data["te_phone"]); ?>">
          </div>
        </div>
        
        <div class="layui-form-item">
          <label class="layui-form-label">用户类型</label>
          <div class="layui-input-block">
            <?php if($data["te_usertype"] == '教师'): ?><input type="radio" name="te_usertype" value="教师" title="教师" checked>
               <input type="radio" name="te_usertype" value="学生" title="学生">
            <?php else: ?>
               <input type="radio" name="te_usertype" value="教师" title="教师">
               <input type="radio" name="te_usertype" value="学生" title="学生" checked><?php endif; ?>
            
            
          </div>
        </div>

        <div class="layui-form-item">
          <label class="layui-form-label">身份证</label>
          <div class="layui-input-block">
            <input type="text" name="te_identity" required  lay-verify="required"  autocomplete="off" class="layui-input" value="<?php echo ($data["te_identity"]); ?>">
          </div>
        </div>
       
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit>立即提交</button>
            <a href="/lab/index.php/Admin/Person/teacherlist" class="layui-btn layui-btn-primary">返回</a>
          </div>
        </div>
      </form>
   </div>


  

	
</body>
</html>