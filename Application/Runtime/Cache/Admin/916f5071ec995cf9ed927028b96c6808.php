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
  .stu-form .set-sel { width: 220px; margin-right: 0;  }
  .stu-form .set-date { margin-right: 0; width: 165px; }
  </style>
</head>
<body>
   <h1 class="h-title">修改审核状态</h1>
   <div class="stu-form">
      <form class="layui-form" action="/lab/index.php/Admin/Appm/changestate/af_id/<?php echo ($data["af_id"]); ?>" method="post">
         <div class="layui-form-item">
             <label class="layui-form-label">预约人</label>
             <div class="layui-input-block">
               <input type="text" name="af_user" readonly="readonly"  value="<?php echo ($data["af_user"]); ?>" class="layui-input">
             </div>
         </div>
         <div class="layui-form-item">
             <label class="layui-form-label">预约实验室</label>
             <div class="layui-input-block">
               <input type="text" name="af_labname" readonly="readonly"  value="<?php echo ($data["af_labname"]); ?>" class="layui-input">
             </div>
         </div>
       
         <div class="layui-form-item">
             <label class="layui-form-label">预约日期</label>
             <div class="layui-inline set-date">
                 <input class="layui-input" name="af_date" value="<?php echo ($data["af_date"]); ?>" readonly="readonly">
             </div>
             <div class="layui-inline set-sel" readonly="readonly">
                 <input class="layui-input" name="af_time" value="<?php echo ($data["af_time"]); ?>" readonly="readonly">
                 <!-- <select name="af_time">
                     <option value=""><?php echo ($data["af_time"]); ?></option>
                 </select> -->
             </div>
         </div>

         <div class="layui-form-item">
             <label class="layui-form-label">实验项目</label>
             <div class="layui-input-block">
               <input type="text" name="af_project" value="<?php echo ($data["af_project"]); ?>" class="layui-input" readonly="readonly">
             </div>
         </div>
         <div class="layui-form-item">
              <label class="layui-form-label">手机号码</label>
              <div class="layui-input-block">
                  <input type="text" name="af_phone" value="<?php echo ($data["af_phone"]); ?>" class="layui-input" readonly="readonly">
              </div>
         </div>
         <div class="layui-form-item">
              <label class="layui-form-label">审核状态</label>
              <div class="layui-input-block">
                  <?php if($data["af_check"] == '通过'): ?><input type="radio" name="af_check" value="通过" title="通过" checked>
                      <input type="radio" name="af_check" value="不通过" title="不通过">
                  <?php else: ?>
                      <input type="radio" name="af_check" value="通过" title="通过" >
                      <input type="radio" name="af_check" value="不通过" title="不通过" checked><?php endif; ?>
                  

              </div>
         </div>
         <div class="layui-form-item">
           <div class="layui-input-block">
             <button class="layui-btn" lay-submit>立即提交</button>
             <a href="/lab/index.php/Admin/Appm/checklist" class="layui-btn layui-btn-primary">返回</a>
           </div>
         </div>

     </form>
   </div>


  

	
</body>
</html>