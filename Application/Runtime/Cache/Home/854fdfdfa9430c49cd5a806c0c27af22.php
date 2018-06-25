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
    .table-box table{ width: 100%; margin: .5rem auto; }
    .table-box table td,.table-box table th{ text-align: center; border: 1px solid #ccc; height: .3rem; line-height: .3rem; font-weight: bold;}
    .mydiv { width: 100%; margin: .4rem auto; }
    .m_none { display: none; }
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
      })
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
           <li class="active">
              <?php if(($ctType["ct_type"] == '学生') AND ($type == '学生')): ?><a class="banST" href="javascript:;">开始预约</a>
              <?php elseif(($ctType["ct_type"] == '教师') AND ($type == '教师')): ?>
                  <a class="banTE" href="javascript:;">开始预约</a>
              <?php elseif($ctType["ct_type"] == '全部禁止'): ?>
                  <a class="banAll" href="javascript:;">开始预约</a>
              <?php else: ?>    
                  <a href="/lab/index.php/Home/Index/startAppm/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">开始预约</a><?php endif; ?>
           </li>
           <li><a href="/lab/index.php/Home/Index/blog/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">留言板</a></li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">个人中心 <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="/lab/index.php/Home/Index/detail/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">预约情况</a></li>
               <li><a href="/lab/index.php/Home/Index/personal/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">修改信息</a></li>
             </ul>
           </li>
         </ul>
         <ul class="nav navbar-nav navbar-right">
               <li><a href="javascript:;">欢迎您, <span><?php echo ($name); ?></span></a></li>
               <li><a href="/lab/index.php/Home/Login/login">注销</a></li>
         </ul>
         
       </div><!-- /.navbar-collapse -->
     </div><!-- /.container-fluid -->
   </nav>
    <!--导航开始-->
   <!--  <div class="i-nav">
        <ul class="layui-nav">
            <li class="layui-nav-item"><a href="/lab/index.php/Home/Index/index/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">首页</a></li>
            <li class="layui-nav-item layui-this" >
                <?php if(($ctType["ct_type"] == '学生') AND ($type == '学生')): ?><a class="banST" href="javascript:;">开始预约</a>
                <?php elseif(($ctType["ct_type"] == '教师') AND ($type == '教师')): ?>
                    <a class="banTE" href="javascript:;">开始预约</a>
                <?php elseif($ctType["ct_type"] == '全部禁止'): ?>
                    <a class="banAll" href="javascript:;">开始预约</a>
                <?php else: ?>    
                    <a href="/lab/index.php/Home/Index/startAppm/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">开始预约</a><?php endif; ?>
            </li>
            <li class="layui-nav-item">
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

    <div class="mydiv lab-list">
      <div class="table-box">
         <table class="layui-table">
            <thead>
              <tr>
                 <th>序号</th>
                 <th>实验室名称</th>
                 <th class="m_none">实验室地址</th>
                 <th class="m_none">实验室用途</th>
                 <th class="m_none">实验室备注</th>
                 <th>操作</th>
              </tr>
            </thead>
            <tbody>
               <?php if(is_array($listlab)): $i = 0; $__LIST__ = $listlab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$la): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($i); ?></td>
                    <td><?php echo ($la["lab_name"]); ?></td>
                      <td class="m_none"><?php echo ($la["lab_address"]); ?></td>
                    <td class="m_none"><?php echo ($la["lab_use"]); ?></td>
                      <td class="m_none"><?php echo ($la["lab_remark"]); ?></td>
                    <td><a class="appm-btn" href="<?php echo U('Home/index/appm',array('name'=>$name,'labname'=>$la[lab_name],'type'=>$type,'user'=>$user));?>">我要预约</a></td>
                    
                 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr>
                       <td colspan="7"><?php echo ($pagestr); ?></td>
                    </tr>
            </tbody>
         </table>
      </div>   
    </div>    

</body>
</html>