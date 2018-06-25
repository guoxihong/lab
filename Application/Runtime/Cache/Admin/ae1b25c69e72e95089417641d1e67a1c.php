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
       <a href="javascript:;">预约信息</a>
       <dl class="layui-nav-child">
         <dd><a href="/lab/index.php/Admin/Appm/appmlist" target="right">查询预约信息</a></dd>
         <dd><a href="/lab/index.php/Admin/Appm/nochecklist" target="right">未审核预约信息</a></dd>
         <dd><a href="/lab/index.php/Admin/Appm/successlist" target="right">预约成功信息</a></dd>
         <dd><a href="/lab/index.php/Admin/Appm/errorlist" target="right">预约失败信息</a></dd>
       </dl>
     </li>
   </ul>
</body>
</html>