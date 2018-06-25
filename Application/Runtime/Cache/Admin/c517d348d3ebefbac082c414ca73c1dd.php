<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/lab/Public/layui/css/layui.css">
  <script type="text/javascript" src="/lab/Public/Admin/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/lab/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/lab/Public/Admin/js/main.js"></script>
</head>
<body>
   <ul class="layui-nav layui-nav-tree layui-nav-side">
     <li class="layui-nav-item layui-nav-itemed">
       <a href="javascript:;">学生信息</a>
       <dl class="layui-nav-child">
         <dd><a href="/lab/index.php/Admin/Manager/right" target="right">查询学生信息</a></dd>
         <dd><a href="/lab/index.php/Admin/Person/stuAdd" target="right">录入学生信息</a></dd>
       </dl>
     </li>
     <li class="layui-nav-item">
       <a href="javascript:;">教师信息</a>
       <dl class="layui-nav-child">
         <dd><a href="/lab/index.php/Admin/Person/teacherlist" target="right">查询教师信息</a></dd>
         <dd><a href="/lab/index.php/Admin/Person/teacherAdd" target="right">录入教师信息</a></dd>
       </dl>
     </li>
     <?php if($data["mg_safe"] == '0'): ?><li class="layui-nav-item">
           <a href="javascript:;">管理员信息</a>
           <dl class="layui-nav-child">
             <dd><a href="/lab/index.php/Admin/Person/managerlist" target="right">查询管理员信息</a></dd>
             <dd><a href="/lab/index.php/Admin/Person/managerAdd" target="right">录入管理员信息</a></dd>
           </dl>
         </li><?php endif; ?>
     
   </ul>
</body>
</html>