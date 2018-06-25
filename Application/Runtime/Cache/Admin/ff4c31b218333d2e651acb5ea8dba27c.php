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
  <script type="text/javascript" src="/lab/Public/jquery-table2excel-master/dist/jquery.table2excel.min.js"></script>
  <style type="text/css">
     .input-long { width: 300px; float: left; margin-right: 10px; }
     .inp-btn { width: 80px; height: 38px; line-height: 38px; background-color: #009688; color: #fff; text-align: center; border: none; border-radius: 2px; cursor: pointer; }
     .inp-btn:hover { opacity: 0.8; }
     .download-btn { width: 80px; height: 38px; line-height: 38px; background-color: #009688; color: #fff; text-align: center; border: none; border-radius: 2px; cursor: pointer; display: inline-block; }
     .download-btn:hover {opacity: 0.8; color: #fff;}
  </style>
  <script type="text/javascript">
      $(function(){
        $(".inp-btn").click(function(){
          if($(this).prev().val() == null || $(this).prev().val() == ""){
            layer.msg("请输入职工号");
            $(this).prev().focus();
            return false;
          }else{
            $("form").submit();
          }
        });

        //点击打印导出表格信息
        $(".download-btn").click(function(){
            layer.confirm('是否下载到您的电脑？', {
                btn: ['下载','取消'] //按钮
            },function(index){
                $(".table2excel").table2excel({
                    exclude: ".noExl",
                    name: "Excel Document Name",
                    filename: "myFileName",
                    fileext: ".xls",
                    exclude_img: true,
                    exclude_links: true,
                    exclude_inputs: true
                });
               layer.close(index);
            });
        });
      });
  </script>
</head>
<body>
   <h1 class="h-title">查询教师信息</h1>
      <form class="layui-form" action="/lab/index.php/Admin/Person/tesearch" method="post">
         <div class="layui-form-item">
            <label class="layui-form-label">职工号</label>
            <div class="layui-input-block">
               <input type="text" name="te_no" placeholder="请输入职工号查询" autocomplete="off" class="layui-input input-long">
               <input type="submit" value="查询" class="inp-btn">
               <a href="javascript:;" class="download-btn ">打印</a>
            </div>
         </div>
         <div class="table-box">
            <table class="layui-table table2excel">
               <thead>
                 <tr>
                    <th>序号</th>
                    <th>姓名</th>
                    <th>职工号</th>
                    <th>密码</th>
                    <th>学院</th>
                    <th>手机号码</th>
                    <th>用户类型</th>
                    <th>身份证</th>
                    <th colspan="2">操作</th>
                 </tr>
               </thead>
               <tbody>
                  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                      <td><?php echo ($i); ?></td>
                      <td><?php echo ($vo["te_name"]); ?></td>
                      <td style="mso-number-format:'\@';"><?php echo ($vo["te_no"]); ?></td>
                       <td><?php echo ($vo["te_pwd"]); ?></td>
                       <td><?php echo ($vo["te_college"]); ?></td>
                       <td><?php echo ($vo["te_phone"]); ?></td>
                      <td><?php echo ($vo["te_usertype"]); ?></td>
                      <td style="mso-number-format:'\@';"><?php echo ($vo["te_identity"]); ?></td>
                      <td><a href="/lab/index.php/Admin/Person/teaupdate/te_id/<?php echo ($vo["te_id"]); ?>">编辑</a></td>
                      <td><a href="/lab/index.php/Admin/Person/teadel/te_id/<?php echo ($vo["te_id"]); ?>" onclick="return confirm('确定要删除吗')">删除</a></td>
                   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                       <tr>
                          <td colspan="10"><?php echo ($pagestr); ?></td>
                       </tr>

               </tbody>
            </table>
         </div>




      </form>
      
      
</body>
</html>