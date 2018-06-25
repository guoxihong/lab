<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="/lab/Public/layui/css/layui.css">
  <link rel="stylesheet" type="text/css" href="/lab/Public/Admin/css/public.css">
  <script type="text/javascript" src="/lab/Public/Admin/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="/lab/Public/layui/layui.js"></script>
  <script type="text/javascript" src="/lab/Public/Admin/js/main.js"></script>
  <style type="text/css">
     

  </style>
</head>
<body>
   <h1 class="h-title">查询预约信息</h1>
        <div class="table-box">
           <table class="layui-table">
              <thead>
                <tr>
                   <th>序号</th>
                   <th>预约人</th>
                   <th>预约实验室</th>
                   <th>实验项目</th>
                   <th>预约日期</th>
                   <th>预约时间段</th>
                   <th>手机号码</th>
                   <th>用户类型</th>
                   <th colspan="2">操作</th>
                </tr>
              </thead>
              <tbody>
                 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($i); ?></td>
                        <td><?php echo ($vo["af_user"]); ?></td>
                        <td><?php echo ($vo["af_labname"]); ?></td>
                         <td><?php echo ($vo["af_project"]); ?></td>
                         <td><?php echo ($vo["af_date"]); ?></td>
                        <td><?php echo ($vo["af_time"]); ?></td>
                        <td><?php echo ($vo["af_phone"]); ?></td>
                         <td><?php echo ($vo["af_type"]); ?></td>
                        <td><a href="/lab/index.php/Admin/Appm/appmupdate/af_id/<?php echo ($vo["af_id"]); ?>">编辑</a></td>
                        <td><a href="/lab/index.php/Admin/Appm/appmdel/af_id/<?php echo ($vo["af_id"]); ?>" onclick="return confirm('确定要删除吗')">删除</a></td>
                     </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      <tr>
                         <td colspan="10"><?php echo ($pagestr); ?></td>
                      </tr>
              </tbody>
           </table>
        </div>
</body>
</html>