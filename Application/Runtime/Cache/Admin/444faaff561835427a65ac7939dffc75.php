<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/lab/Public/layui/css/layui.css">
	<script type="text/javascript" src="/lab/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/lab/Public/Admin/js/main.js"></script>
</head>
<body>
   <ul class="layui-nav layui-nav-tree layui-nav-side">
     <li class="layui-nav-item layui-nav-itemed">
       <a href="javascript:;">实验室信息</a>
       <dl class="layui-nav-child">
         <dd><a href="/lab/index.php/Admin/Lab/lablist" target="right">查询实验室信息</a></dd>
         <dd><a href="../Lab/labAdd" target="right">录入实验室信息</a></dd>
       </dl>
     </li>
     <li class="layui-nav-item">
       <a href="javascript:;">公告栏信息</a>
       <dl class="layui-nav-child">
         <dd><a href="/lab/index.php/Admin/Lab/annmlist" target="right">查询公告栏信息</a></dd>
         <dd><a href="../Lab/annmAdd" target="right">录入公告栏信息</a></dd>
       </dl>
     </li>
     <li class="layui-nav-item">
       <a href="javascript:;">注意事项信息</a>
       <dl class="layui-nav-child">
         <dd><a href="/lab/index.php/Admin/Lab/noticelist" target="right">查询注意事项信息</a></dd>
         <dd><a href="../Lab/noticeAdd" target="right">录入注意事项信息</a></dd>
       </dl>
     </li>
     <li class="layui-nav-item">
       <a href="javascript:;">预约时间段</a>
       <dl class="layui-nav-child">
         <dd><a href="/lab/index.php/Admin/Lab/appmtimelist" target="right">查询预约时间段</a></dd>
         <dd><a href="../Lab/appmTimeAdd" target="right">录入预约时间段</a></dd>
       </dl>
     </li>
   </ul>
</body>
</html>