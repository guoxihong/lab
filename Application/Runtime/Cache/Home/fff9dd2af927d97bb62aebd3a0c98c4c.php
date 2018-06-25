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
        .blog-box { width: 100%; }
        .blog-box .blog-mess { width: 100%; height: 3.5rem; margin: .2rem auto; border: 1px solid #ccc; border-radius: 5px;  }
        .blog-box .blog-mess p { margin:0;  }
        .blog-box .blog-speak { width: 100%; height: 1.5rem; margin: 0 auto; border: 1px solid #ccc; border-radius: 5px; }
        .blog-btn-group { float: right; margin-top: .1rem; }
        .blog-mess { overflow: auto; }
        .blog-mess ul {}
        .blog-mess li { padding: .08rem .15rem; }
        .blog-mess li strong {}
        .blog-mess li span {}
        .blog-mess li em {word-break:break-all;}

    }
    @media screen and (min-width: 1200px){
        .blog-box { width: 602px; margin: 0 auto; }
        .blog-box .blog-mess { width: 600px; height: 350px; margin: 20px auto; border: 1px solid #ccc; border-radius: 5px;  }
        .blog-box .blog-speak { width: 600px; height: 150px; margin: 0 auto; border: 1px solid #ccc; border-radius: 5px; }
        .blog-btn-group { float: right; margin-top: 10px; }
        .blog-mess { overflow: auto; }
        .blog-mess ul {}
        .blog-mess li { padding: 8px 15px; }
        .blog-mess li strong {}
        .blog-mess li span {}
        .blog-mess li em {word-break:break-all;}
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

        //点击发表留言 
        $(".speak-btn").click(function(){
            var $speak = $(".blog-speak").val();
            var $name = $(".login-info span").html();
            $.ajax({
                type : "POST",
                url : "/lab/index.php/Home/Index/speak",
                data : {"speak":$speak,"name":$name},
                success : function(data){
                    layer.alert("发表成功");
                    $(".blog-speak").val("");
                    var oUl = $(".blog-mess ul");
                    var oLi = $("<li></li>");
                    var oStr = $("<strong></strong>");
                    var oSpan = $("<span></span>");
                    var oEm = $("<em></em>");
                    var oP = $("<p></p>")
                    oEm.html(data['bl_speak']);
                    oSpan.html(" 说 : ");
                    oStr.html(data['bl_name']);
                    oP.html(data['bl_time']);
                    oP.appendTo(oLi);
                    oStr.appendTo(oLi);
                    oSpan.appendTo(oLi);
                    oEm.appendTo(oLi);
                    oUl.prepend(oLi);
                }
            });
        });

        //联系我们
        $(".mine").click(function(){
          layer.alert('联系管理员 : 13715164003', {
            skin: 'layui-layer-lan'
          })
        });

        //点击重置
        $(".reset-btn").click(function(){
             $(".blog-speak").val("");
             $(".blog-speak").focus();
        })
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
            <li class="active"><a href="/lab/index.php/Home/Index/blog/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">留言板</a></li>
            <li class="dropdown">
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
   <!--  <div class="i-nav">
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
            <li class="layui-nav-item">
                <a href="javascript:;">个人中心</a>
                <dl class="layui-nav-child">
                    <dd><a href="/lab/index.php/Home/Index/detail/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">预约情况</a></dd>
                    <dd><a href="/lab/index.php/Home/Index/personal/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">修改信息</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item layui-this"><a href="/lab/index.php/Home/Index/blog/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>">留言板</a></li>
            <li class="layui-nav-item mine"><a href="javascript:;">联系我们</a></li>
        </ul>
        <div class="login-info">
            <p>欢迎您, <span><?php echo ($name); ?></span></p>
            <a href="/lab/index.php/Home/Login/login">注销</a>
        </div>
    </div> -->
    <!--导航结束-->

    <!--留言板开始-->
    <div class='blog-box'>
        <div class="blog-mess">
            <ul>
                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <p><?php echo ($vo["bl_time"]); ?></p>
                        <strong><?php echo ($vo["bl_name"]); ?></strong><span> 说 : </span><em><?php echo ($vo["bl_speak"]); ?></em>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>  
                
            </ul>

        </div>
        <textarea class="blog-speak"></textarea>
        <div class="layui-btn-group blog-btn-group">
          <button class="layui-btn speak-btn">发表</button>
          <button class="layui-btn reset-btn">重置</button>
        </div>
    
    </div>

    <!--留言板结束-->

</body>
</html>