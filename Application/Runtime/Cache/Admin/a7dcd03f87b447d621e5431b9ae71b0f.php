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
  .check-pass { color: #2EB62B; font-weight: bold; }
  .check-no { color: red; font-weight: bold;}
  </style>
  <script type="text/javascript">
      $(function(){
          //预约审核：点击通过或不通过按钮
          $(".check-pass,.check-no").click(function(){
            var $val = $(this).html();
            var $id = $(this).attr("name");
            var _this = $(this);
            $.ajax({
              type : "POST",
              url : "/lab/index.php/Admin/Appm/checkstate", 
              data : {"val":$val,"id":$id},
              success : function(data){
                if(data == "通过"){
                  _this.parent().next().remove();
                  _this.parent().attr("colspan",2).html("通过").css("color","#2EB62B");
                }else if(data == "不通过"){
                  _this.parent().prev().remove();
                  _this.parent().attr("colspan",2).html("不通过").css("color","red");
                }
              }
            });
          });
            //预约审核：通过为绿色字，不通过为红色字
            $(".after-check").each(function(){
              if($(this).html() == "通过"){
                $(this).css("color","#2EB62B");
              }else if($(this).html() == "不通过"){
                $(this).css("color","red");
              }

            });
      });
  </script>
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
                   <th colspan="2">审核状态</th>
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
                        <?php if($vo["af_check"] == ''): ?><td><a class="check-pass" name="<?php echo ($vo["af_id"]); ?>" href="javascript:;">通过</a></td>
                            <td><a class="check-no" name="<?php echo ($vo["af_id"]); ?>" href="javascript:;">不通过</a></td>
                        <?php else: ?>
                            <td colspan="2" class="after-check"><?php echo ($vo["af_check"]); ?></td><?php endif; ?>
                        
                     </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      <tr>
                         <td colspan="10"><?php echo ($pagestr); ?></td>
                      </tr>
              </tbody>
           </table>
        </div>
</body>
</html>