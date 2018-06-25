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
  <script type="text/javascript" src="/lab/Public/Home/js/ajax.js"></script>
  <script type="text/javascript" src="/lab/Public/bootstrap-3.3.0/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  var scale = document.documentElement.clientWidth/375;
  document.getElementsByTagName('html')[0].style.fontSize = scale*100+'px';
  </script>
</head>
<style type="text/css">
     @media screen and (max-width: 1200px){
      .stu-form { width: 90%; margin: .2rem auto; }
      .h-title { font-size: .18rem; font-weight: bold; height: .5rem; line-height: .5rem; padding-left: .2rem;}
      .mybox { text-align: center; margin-left: 0; }


     }

    @media screen and (min-width: 1200px){
      .stu-form { width: 500px; margin: 50px auto; }
      .h-title { font-size: 18px; font-weight: bold; height: 50px; line-height: 50px; padding-left: 20px;}
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


      //修改个人信息
        $(".per-btn").click(function(){
            var $pwd = $(".per-pwd").val();
            var $iden = $(".per-iden").val();
            var $id = $(".per-id").val();
            $.ajax({
                type : "POST",                
                url  : "/lab/index.php/Home/Index/savepar",
                data : {"pwd":$pwd,"iden":$iden,"id":$id},
                success : function(data){
                    if(data == 'success'){
                      layer.alert("修改成功");
                    }
                    
                }

            }); 
        });
    });

    
</script>
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
   <h1 class="h-title">修改个人信息</h1>
   <div class="stu-form">
        <!-- <div class="layui-form-item">
          <label class="layui-form-label">姓名</label>
          <div class="layui-input-block">
            <?php if($type == '学生'): ?><input type="text" name="st_name" required  lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo ($data["st_name"]); ?>" readonly="readonly">
            <?php else: ?>
                <input type="text" name="te_name" required  lay-verify="required" autocomplete="off" class="layui-input" value="<?php echo ($data["te_name"]); ?>" readonly="readonly"><?php endif; ?>   
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">ID</label>
          <div class="layui-input-block">
            <?php if($type == '学生'): ?><input type="text" name="st_no" required  lay-verify="required" autocomplete="off" class="layui-input per-id" value="<?php echo ($data["st_no"]); ?>" readonly="readonly">
            <?php else: ?>
                <input type="text" name="te_name" required  lay-verify="required" autocomplete="off" class="layui-input per-id" value="<?php echo ($data["te_no"]); ?>" readonly="readonly"><?php endif; ?>   
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">密码</label>
          <?php if($type == '学生'): ?><div class="layui-input-inline">
                <input type="text" name="st_pwd" required lay-verify="required"  autocomplete="off" class="layui-input per-pwd" value="<?php echo ($data["st_pwd"]); ?>">
              </div>
          <?php else: ?>
              <div class="layui-input-inline">
                <input type="text" name="te_pwd" required lay-verify="required"  autocomplete="off" class="layui-input per-pwd" value="<?php echo ($data["te_pwd"]); ?>">
              </div><?php endif; ?>
          
          <div class="layui-form-mid layui-word-aux">长度为6-16个字符,不能包含空格</div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">身份证</label>
          <?php if($type == '学生'): ?><div class="layui-input-block">
                <input type="text" name="st_identity" required  lay-verify="required"  autocomplete="off" class="layui-input per-iden" value="<?php echo ($data["st_identity"]); ?>">
              </div>
          <?php else: ?>
              <div class="layui-input-block">
                <input type="text" name="te_identity" required  lay-verify="required"  autocomplete="off" class="layui-input per-iden" value="<?php echo ($data["te_identity"]); ?>">
              </div><?php endif; ?>
        </div>
       
         -->




        <div class="form-group">
          <label>姓名</label>
          <?php if($type == '学生'): ?><input type="text" name="st_name" required  lay-verify="required" autocomplete="off" class="form-control" value="<?php echo ($data["st_name"]); ?>" readonly="readonly">
          <?php else: ?>
              <input type="text" name="te_name" required  lay-verify="required" autocomplete="off" class="form-control" value="<?php echo ($data["te_name"]); ?>" readonly="readonly"><?php endif; ?>  
        </div>

        <div class="form-group">
          <label>ID</label>
          <?php if($type == '学生'): ?><input type="text" name="st_no" required  lay-verify="required" autocomplete="off" class="form-control per-id" value="<?php echo ($data["st_no"]); ?>" readonly="readonly">
          <?php else: ?>
              <input type="text" name="te_name" required  lay-verify="required" autocomplete="off" class="form-control per-id" value="<?php echo ($data["te_no"]); ?>" readonly="readonly"><?php endif; ?> 
        </div>

        <div class="form-group">
          <label>密码</label>
          <?php if($type == '学生'): ?><input type="text" name="st_pwd" required lay-verify="required"  autocomplete="off" class="form-control per-pwd" value="<?php echo ($data["st_pwd"]); ?>">
          <?php else: ?>
              <input type="text" name="te_pwd" required lay-verify="required"  autocomplete="off" class="form-control per-pwd" value="<?php echo ($data["te_pwd"]); ?>"><?php endif; ?>
        </div>

        <div class="form-group">
          <label>身份证</label>
          <?php if($type == '学生'): ?><input type="text" name="st_identity" required  lay-verify="required"  autocomplete="off" class="form-control per-iden" value="<?php echo ($data["st_identity"]); ?>">
          <?php else: ?>
              <input type="text" name="te_identity" required  lay-verify="required"  autocomplete="off" class="form-control per-iden" value="<?php echo ($data["te_identity"]); ?>"><?php endif; ?>
        </div>

        <div class="layui-form-item">
          <div class="layui-input-block mybox">
            <button class="layui-btn per-btn">立即修改</button>
            <a href="/lab/index.php/Home/Index/index/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>" class="layui-btn layui-btn-primary">返回</a>
          </div>
        </div>
      
   </div>


  

	
</body>
</html>