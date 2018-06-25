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
       <a href="javascript:;">审核信息</a>
       <dl class="layui-nav-child">
         <dd><a href="/lab/index.php/Admin/Appm/appmcheck" target="right">审核预约信息</a></dd>
         <dd><a href="/lab/index.php/Admin/Appm/checklist" target="right">修改审核状态</a></dd>
       </dl>
     </li>
   </ul>
</body>
</html>