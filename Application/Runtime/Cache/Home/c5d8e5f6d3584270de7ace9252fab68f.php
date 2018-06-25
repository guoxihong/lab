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
      #appm{  width:100%; }
      .appm_list{ height: .4rem; margin-top: .2rem;  position: relative;  }
      .appm_list ul{ width: 100%;height: .4rem; }
      .appm_list li{  text-align: center; width: 100%; height: .4rem; font-size: .16rem; line-height: .4rem; }
      .appm_list li:nth-of-type(1){border-bottom: 2px solid #cc2931; background: url(/lab/Public/Home/img/lo_1.png) no-repeat 1rem center; display: none;}
      .appm_list li:nth-of-type(2){ color: #999; background: url(/lab/Public/Home/img/lo_2.png) no-repeat 1rem center;  }
      .appm_form{ width:100%; margin: 0 auto; margin-top: .2rem; padding: 0 .2rem; }

      #appm .appm_list .r_success{ border-bottom: 2px solid #cc2931; background: url(/lab/Public/Home/img/lo_3.png) no-repeat 1rem center; color: #000;}

      .appm_success{ width: 3.4rem; margin: 0 auto; margin-top: .6rem; overflow: hidden; }
      .appm_success div{}
      .appm_success div span{float: left; width: .65rem; height: .6rem; background: url(/lab/Public/Home/img/lo_4.png) no-repeat; margin-right: .05rem;}
      .appm_success div p{float: left; width: 2.7rem; height: .25rem; line-height: .25rem; font-size: .16rem;}
      .appm_success div p strong{color: #bf2c24;}
    }


    @media screen and (min-width: 1200px){
      #appm{padding: 20px 90px;}
      .appm_list{ height: 40px; margin-top: 60px; border-bottom:2px solid #ccc; position: relative;  }
      .appm_list ul{ width: 500px;height: 40px; position: absolute; top: 0; left: 50%; margin-left: -250px;  }
      .appm_list li{ float: left; text-align: center; width: 250px; height: 40px; font-size: 16px; line-height: 40px; }
      
      .appm_form{ width: 500px; margin: 0 auto; margin-top: 60px; }
      #appm .appm_list .r_success{ border-bottom: 2px solid #cc2931; background: url(/lab/Public/Home/img/lo_3.png) no-repeat 55px center; color: #000;}

      .appm_success{ width: 340px; margin: 0 auto; margin-top: 60px; overflow: hidden; }
      .appm_success div{}
      .appm_success div span{float: left; width: 60px; height: 52px; background: url(/lab/Public/Home/img/lo_4.png) no-repeat; margin-right: 10px;}
      .appm_success div p{float: left; width: 270px; height: 25px; line-height: 25px; font-size: 16px;}
      .appm_success div p strong{color: #bf2c24;}
      
    }
    



  </style>

  <script type="text/javascript">
      $(function(){
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
    <!-- <div class="i-nav">
        <ul class="layui-nav">
            <li class="layui-nav-item"><a href="/lab/index.php/Home/Index/index/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">首页</a></li>
            <li class="layui-nav-item layui-this" ><a href="/lab/index.php/Home/Index/startAppm/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">开始预约</a></li>
          
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
   
    <div id="appm">
        <div class="appm_list ">
           <ul>
              <li>填写预约信息</li>
              <li class="r_success">成功预约</li>
           </ul>
        </div>
        <div class="appm_success">
           <div>
              <span></span>
              <p>恭喜您预约成功，请等候审核</p>
              <p>您预约的用户名为：<strong><?php echo ($user); ?></strong></p>
           </div>
        </div>
    </div>
</body>
</html>