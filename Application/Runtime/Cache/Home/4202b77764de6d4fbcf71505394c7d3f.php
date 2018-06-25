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
      .appm_list li:nth-of-type(1){border-bottom: 2px solid #cc2931; background: url(/lab/Public/Home/img/lo_1.png) no-repeat 1rem center;}
      .appm_list li:nth-of-type(2){ color: #999; background: url(/lab/Public/Home/img/lo_2.png) no-repeat 55px center; display: none; }
      .appm_form{ width:100%; margin: 0 auto; margin-top: .2rem; padding: 0 .2rem; }
     }
      @media screen and (min-width: 1200px){
        #appm{padding: 20px 90px;}
        .appm_list{ height: 40px; margin-top: 60px; border-bottom:2px solid #ccc; position: relative;  }
        .appm_list ul{ width: 500px;height: 40px; position: absolute; top: 0; left: 50%; margin-left: -250px;  }
        .appm_list li{ float: left; text-align: center; width: 250px; height: 40px; font-size: 16px; line-height: 40px; }
        .appm_list li:nth-of-type(1){border-bottom: 2px solid #cc2931; background: url(/lab/Public/Home/img/lo_1.png) no-repeat 40px center;}
        .appm_list li:nth-of-type(2){ color: #999; background: url(/lab/Public/Home/img/lo_2.png) no-repeat 55px center; }
        .appm_form{ width: 500px; margin: 0 auto; margin-top: 60px; }
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
        <div class="appm_list">
           <ul>
              <li>填写预约信息</li>
              <li>成功预约</li>
           </ul>
        </div>
        <div class="appm_form">
           <!--  <form class="layui-form" action="/lab/index.php/Home/Index/appm/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>" method="post">
                <div class="layui-form-item">
                    <label class="layui-form-label">预约人</label>
                    <div class="layui-input-block">
                      <input type="text" name="af_user" readonly="readonly" value="<?php echo ($name); ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">预约实验室</label>
                    <div class="layui-input-block">
                      <input type="text" name="af_labname" readonly="readonly" value="<?php echo ($labname); ?>" class="layui-input">
                    </div>
                </div>
              
                <div class="layui-form-item">
                    <label class="layui-form-label">预约日期</label>
                    <div class="layui-inline set-date">
                      <input class="layui-input" placeholder="请选择预约时间" name="af_date" onclick="layui.laydate({elem: this, festival: true})">
                    </div>
                    <div class="layui-inline set-sel">
                        <select name="af_time" lay-verify="required">
                            <option value="">请选择时间段</option>
                            <?php if(is_array($time)): $i = 0; $__LIST__ = $time;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><option value="<?php echo ($t["at_time"]); ?>"><?php echo ($t["at_time"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">实验项目</label>
                    <div class="layui-input-block">
                      <input type="text" name="af_project" placeholder="请输入实验项目" class="layui-input" autocomplete="off">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">手机号码</label>
                    <div class="layui-input-block">
                      <input type="text" name="af_phone" placeholder="请输入手机号码" class="layui-input" autocomplete="off">
                    </div>
                </div>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <button class="layui-btn" lay-submit>立即提交</button>
                    <a href="/lab/index.php/Home/Index/startAppm/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>" class="layui-btn layui-btn-primary">返回</a>
                  </div>
                </div>

            </form> -->

            <form action="/lab/index.php/Home/Index/appm/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>" method="post">
              <div class="form-group">
                <label for="af_user">预约人</label>
                <input type="text" name="af_user" class="form-control" id="af_user" readonly="readonly" value="<?php echo ($name); ?>">
              </div>
              <div class="form-group">
                <label for="af_labname">预约实验室</label>
                <input type="text" class="form-control" id="af_labname" name="af_labname" readonly="readonly" value="<?php echo ($labname); ?>">
              </div>
              <div class="form-group">
                <label for="af_date">预约日期</label>
                <input type="text" class="form-control" id="af_date" placeholder="请选择预约时间" name="af_date" onclick="layui.laydate({elem: this, festival: true})" required="required">
              </div>
              <div class="form-group">
                <label for="af_time">预约实验室</label>
                <select class="form-control" id="af_time" name="af_time">
                  <?php if(is_array($time)): $i = 0; $__LIST__ = $time;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$t): $mod = ($i % 2 );++$i;?><option value="<?php echo ($t["at_time"]); ?>"><?php echo ($t["at_time"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="af_project">实验项目</label>
                <input type="text" class="form-control" id="af_project" name="af_project" placeholder="请输入实验项目" autocomplete="off" required="required">
              </div>
              <div class="form-group">
                <label for="af_phone">手机号码</label>
                <input type="text" class="form-control" id="af_phone" name="af_phone" placeholder="请输入手机号码" autocomplete="off" required="required">
              </div>

              <button type="submit" class="btn btn-default">立即提交</button>
               <a href="/lab/index.php/Home/Index/startAppm/name/<?php echo ($name); ?>/user/<?php echo ($user); ?>/type/<?php echo ($type); ?>" class="btn btn-default">返回</a>
            </form>  


        </div>
    </div>
</body>
</html>