<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>实验室预约系统</title>
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
  <link rel="stylesheet" type="text/css" href="/lab/Public/layui/css/layui.css">
  <link rel="stylesheet" type="text/css" href="/lab/Public/Home/css/public.css">
  <link rel="stylesheet" type="text/css" href="/lab/Public/bootstrap-3.3.0/dist/css/bootstrap.min.css">
  <script type="text/javascript" src="/lab/Public/Home/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="/lab/Public/layui/layui.js"></script>
  <script type="text/javascript" src="/lab/Public/Home/js/main.js"></script>
  <script type="text/javascript" src="/lab/Public/bootstrap-3.3.0/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  var scale = document.documentElement.clientWidth/375;
  document.getElementsByTagName('html')[0].style.fontSize = scale*100+'px';
  </script>
  <style type="text/css">
      @media screen and (max-width: 1200px){
        .table-box { width: 100%; }
        .table-box table { width: 100%; }
        .table-box tr td,.table-box tr th { font-weight: bold; }
        .table-box tr .nocheck { color: #999; }
        
        .m_none { display: none; }

      }
      @media screen and (min-width: 1200px){
        .table-box tr .nocheck { color: #999; }
      }
      
  </style>
  <script type="text/javascript">
      $(function(){
        $(".banST").click(function(){
          layer.alert("学生暂时无法预约");
        });
        $(".banTE").click(function(){
          layer.alert("教师暂时无法预约");
        });
        $(".banAll").click(function(){
          layer.alert("系统暂时无法预约");
        });

        //联系我们
        $(".mine").click(function(){
          layer.alert('联系管理员 : 13715164003', {
            skin: 'layui-layer-lan'
          })
        });


        //状态的颜色
          var arr = [];
          $('.af_state').each(function(i){
            arr[i] = $(this).html();
          });
          for(var i=0;i<arr.length;i++){
            if(arr[i] == '通过'){
                $(".af_state").eq(i).css("color","#2EB62B");
            }else if(arr[i] == "不通过"){
                $(".af_state").eq(i).css("color","red");
            }else if(arr[i] == ""){
                $(".af_state").eq(i).css("color","#999");
                $(".af_state").eq(i).html("未审核");
            } 
          }
          

      });
  </script>
</head>
<body>
   <nav class="navbar navbar-inverse">
     <div class="container-fluid">
       <!-- Brand and toggle get grouped for better mobile display -->
       <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
           <span class="sr-only">Toggle navigation</span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="#">MYLAB</a>
       </div>

       <!-- Collect the nav links, forms, and other content for toggling -->
       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
           <li ><a href="/lab/index.php/Home/Index/index/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">首页</a></li>
           <li ">
              <?php if(($ctType["ct_type"] == '学生') AND ($type == '学生')): ?><a class="banST" href="javascript:;">开始预约</a>
              <?php elseif(($ctType["ct_type"] == '教师') AND ($type == '教师')): ?>
                  <a class="banTE" href="javascript:;">开始预约</a>
              <?php elseif($ctType["ct_type"] == '全部禁止'): ?>
                  <a class="banAll" href="javascript:;">开始预约</a>
              <?php else: ?>    
                  <a href="/lab/index.php/Home/Index/startAppm/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">开始预约</a><?php endif; ?>
           </li>
           <li><a href="/lab/index.php/Home/Index/blog/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">留言板</a></li>
           <li class="dropdown active">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人中心 <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="/lab/index.php/Home/Index/detail/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">预约情况</a></li>
               <li><a href="/lab/index.php/Home/Index/personal/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">修改信息</a></li>
             </ul>
           </li>
         </ul>
         <ul class="nav navbar-nav navbar-right login-info">
               <li><a href="javascript:;">欢迎您, <span><?php echo ($name); ?></span></a></li>
               <li><a href="/lab/index.php/Home/Login/login">注销</a></li>
         </ul>
         
       </div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
   </nav>
   <!--导航开始-->
   <!-- <div class="i-nav">
       <ul class="layui-nav">
           <li class="layui-nav-item  "><a href="/lab/index.php/Home/Index/index/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">首页</a></li>
           <li class="layui-nav-item" >
               <?php if(($ctType["ct_type"] == '学生') AND ($type == '学生')): ?><a class="banST" href="javascript:;">开始预约</a>
               <?php elseif(($ctType["ct_type"] == '教师') AND ($type == '教师')): ?>
                   <a class="banTE" href="javascript:;">开始预约</a>
               <?php elseif($ctType["ct_type"] == '全部禁止'): ?>
                   <a class="banAll" href="javascript:;">开始预约</a>
               <?php else: ?>    
                   <a href="/lab/index.php/Home/Index/startAppm/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">开始预约</a><?php endif; ?>
           </li>
           <li class="layui-nav-item layui-this">
               <a href="javascript:;">个人中心</a>
               <dl class="layui-nav-child">
                   <dd><a href="/lab/index.php/Home/Index/detail/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">预约情况</a></dd>
                   <dd><a href="/lab/index.php/Home/Index/personal/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">修改信息</a></dd>
               </dl>
           </li>
           <li class="layui-nav-item"><a href="/lab/index.php/Home/Index/blog/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">留言板</a></li>
           <li class="layui-nav-item mine"><a href="javascript:;">联系我们</a></li>
       </ul>
       <div class="login-info">
           <p>欢迎您, <span><?php echo ($name); ?></span></p>
           <a href="/lab/index.php/Home/Login/login">注销</a>
       </div>
   </div> -->
   <!--导航结束-->
        <div class="table-box">
           <table class="layui-table">
              <thead>
                <tr>
                   <th class="m_none">预约人</th>
                   <th>预约实验室</th>
                   <th class="m_none">实验项目</th>
                   <th>预约日期</th>
                   <th>预约时间段</th>
                   <th class="m_none">手机号码</th>
                   <th class="m_none">用户类型</th>
                   <th>审核状态</th>
                </tr>
              </thead>
              <tbody>
                 <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td class="m_none"><?php echo ($vo["af_user"]); ?></td>
                        <td><?php echo ($vo["af_labname"]); ?></td>
                        <td class="m_none"><?php echo ($vo["af_project"]); ?></td>
                        <td><?php echo ($vo["af_date"]); ?></td>
                        <td><?php echo ($vo["af_time"]); ?></td>
                        <td class="m_none"><?php echo ($vo["af_phone"]); ?></td>
                        <td class="m_none"><?php echo ($vo["af_type"]); ?></td>
                        <td class='af_state'><?php echo ($vo["af_check"]); ?></td>
                     </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
           </table>
        </div>
</body>
</html>