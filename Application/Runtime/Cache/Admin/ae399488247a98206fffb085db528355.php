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
   <h1 class="h-title">查询管理员信息</h1>
      <div class="table-box">
         <table class="layui-table">
            <thead>
              <tr>
                 <th>序号</th>
                 <th>姓名</th>
                 <th>密码</th>
                 <th>权限</th>
                 <th colspan="2">操作</th>
              </tr>
            </thead>
            <tbody>
               <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
	                  <td><?php echo ($i); ?></td>
	                  <td><?php echo ($vo["mg_name"]); ?></td>
                    <td><?php echo ($vo["mg_pwd"]); ?></td>
	                  <td><?php echo ($vo["mg_safe"]); ?></td>
	                  <td><a href="/lab/index.php/Admin/Person/manupdate/mg_id/<?php echo ($vo["mg_id"]); ?>">编辑</a></td>
	                  <td><a href="/lab/index.php/Admin/Person/mandel/mg_id/<?php echo ($vo["mg_id"]); ?>" onclick="return confirm('确定要删除吗')">删除</a></td>
	               </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr>
                       <td colspan="6"><?php echo ($pagestr); ?></td>
                    </tr>

            </tbody>
         </table>
      </div>
      
</body>
</html>