<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/lab/Public/layui/css/layui.css">
  <script type="text/javascript" src="/lab/Public/Admin/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/lab/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/lab/Public/Admin/js/main.js"></script>
  
	<style type="text/css">
	  .header { position: relative; }
    .header .login-info { position: absolute; height: 60px;  right: 30px; top:0;  }
    .header .login-info p { display: inline-block; margin-right: 30px; line-height: 60px; color: #c2c2c2; }
    .header .login-info a { color: #c2c2c2; }
    .header .login-info a:hover { color: #fff; }
	</style>
  <script type="text/javascript">
     $(function(){
        $('.header li').click(function(){
           $('.header li').each(function(){
              $(this).removeClass('layui-this');
           });
           $(this).addClass('layui-this');
        });
     });
  </script>
</head>
<body>
    <div class="header">
       <ul class="layui-nav">
          <li class="layui-nav-item layui-this"><a href="/lab/index.php/Admin/Manager/left/name/<?php echo ($name); ?>" target="left">用户管理</a></li>
          <li class="layui-nav-item"><a href="/lab/index.php/Admin/Leftlist/lableft" target="left">实验室管理</a></li>
          <li class="layui-nav-item"><a href="/lab/index.php/Admin/Leftlist/appmleft" target="left">预约查询</a></li>
          <li class="layui-nav-item"><a href="/lab/index.php/Admin/Leftlist/controlleft" target="left">预约控制</a></li>
          <li class="layui-nav-item"><a href="/lab/index.php/Admin/leftlist/checkleft" target="left">预约审核</a></li>
          <li class="layui-nav-item"><a href="/lab/index.php/Admin/leftlist/blogleft" target="left">留言板管理</a></li>
       </ul>
       <div class="login-info">
            <p>欢迎您, <span><?php echo ($name); ?></span></p>
            <a href="/lab/index.php/Admin/Login/login" target="_parent" onclick="return confirm('是否退出登录')">注销</a>
        </div>
    </div>
	
</body>
</html>