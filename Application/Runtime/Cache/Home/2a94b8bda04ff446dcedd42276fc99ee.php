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
      .i_box { width: 100%; }
      .i-box .i-annm { margin-bottom: .16rem; }
      .i-box h2 { height: .3rem; line-height: .3rem; font-size: .18rem; font-weight: bold; color: #393D49; }
      .i-box ul { border: 1px solid #999; border-radius: .1rem; min-height: 1.5rem; padding: .1rem .2rem; color: #393D49; box-shadow: 0 0 .1rem #ccc; }
      .i-box li { height: .3rem; line-height: .3rem;  list-style:none;  overflow: hidden; white-space: nowrap; text-overflow: ellipsis;  }
      .i-box li span { margin-right: .1rem; }
      .i-box .i-notice ul { min-height: 2rem;  }

     }
      
   
    @media screen and (min-width: 1200px){
      .i-box { width: 1000px; margin:0 auto; }
      .i-box .i-annm { margin-bottom: 16px; }
      .i-box h2 { height: 30px; line-height: 30px; font-size: 18px; font-weight: bold; color: #393D49; }
      .i-box ul { border: 1px solid #999; border-radius: 10px; min-height: 150px; padding: 10px 20px; color: #393D49; box-shadow: 0 0 10px #ccc; }
      .i-box li { height: 30px; line-height: 30px; list-style:none;  overflow: hidden; white-space: nowrap; text-overflow: ellipsis;  }
      .i-box li span { margin-right: 10px; }
      .i-box .i-notice ul { min-height: 200px;  }
    }

	</style>
  <script>
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
            <li class="active"><a href="/lab/index.php/Home/Index/index/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">首页</a></li>
            <li>
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
    <!-- <div class="i-nav">
        <ul class="layui-nav">
            <li class="layui-nav-item layui-this "><a href="/lab/index.php/Home/Index/index/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">首页</a></li>
            <li class="layui-nav-item" >
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

    <div class="i-box">
       <div class="i-annm">
           <h2>公告栏</h2>
           <ul>
               <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li title="<?php echo ($vo["an_content"]); ?>"><span>[<?php echo ($i); ?>]</span><?php echo ($vo["an_content"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
       </div>
       <div class='i-notice'>
           <h2>注意事项</h2>
           <ul>
               <?php if(is_array($listno)): $i = 0; $__LIST__ = $listno;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$no): $mod = ($i % 2 );++$i;?><li title="<?php echo ($no["no_content"]); ?>"><span>[<?php echo ($i); ?>]</span><?php echo ($no["no_content"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
           </ul>
       </div>
    </div>
</body>
</html>