<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>预约系统登录</title>
  <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, width=device-width">
	<link rel="stylesheet" type="text/css" href="/lab/Public/layui/css/layui.css">
<!-- 	<link rel="stylesheet" type="text/css" href="/lab/Public/Admin/css/login.css"> -->
<link rel="stylesheet" type="text/css" media="screen and (min-width:1200px)" href="/lab/Public/Admin/css/login.css">;
  <script type="text/javascript" src="/lab/Public/Home/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="/lab/Public/layui/layui.js"></script>
	<script type="text/javascript" src="/lab/Public/Admin/js/main.js"></script>
  <script type="text/javascript">
    var scale = document.documentElement.clientWidth/375;
    document.getElementsByTagName('html')[0].style.fontSize = scale*100+'px';
  </script>
   
	<style type="text/css">
  body { background-color: #393D49; }
  @media screen and (max-width: 1200px){
    .myradio { margin-left: 0; }
    .mydiv { width: 3rem; }
    .mydiv .myset { text-align: left; padding: .09rem 0; width: .5rem; color: #000;  }
    .myinp-wrap { margin-left: .7rem;  }
    .myinp-wrap input { display: inline-block; width: 1.1rem;}
    .verify-img { width: 1.1rem; height: .38rem; border: none; cursor: pointer;}
    body .l_content .lc_right { height: 3.6rem; }

    .lc_left { position: absolute; left: -9999px; }
    
    .l_content .lc_right { width: 90%; height: 3rem; padding-left:10%;  background-color: #fff; border-radius:10px; box-shadow: 2px 2px 5px #373737; margin-top: 20%;  }
    .lc_right h4 { height: .6rem; line-height: .6rem; font-size: .14rem; font-weight: bold; }
    .lc_right .m_text{ width: 3rem; height: .4rem; border: 1px solid #e5e5e5; margin-bottom: .15rem; }
    .lc_right .m_text span{ display: inline-block; height: .4rem; width: .44rem; float: left; border-right: 1px solid #e5e5e5; }
    .lc_right .m_text input{ width: 2.45rem; height: .4rem; border:none; padding-left: .05rem; }
    .lc_right .m_text:nth-of-type(1) span{ background: url(/lab/Public/Admin/img/2.png) no-repeat;  }
    .lc_right .m_text:nth-of-type(2) span{ background: url(/lab/Public/Admin/img/3.png) no-repeat;  }
    .lc_right label{ color: #999; cursor: pointer; }
    .lc_right label input{ vertical-align: middle; margin-top: -.02rem; margin-bottom: .01rem; }
    .lc_right .m_lost{ color: #999; margin-left: .5rem; }
    .lc_right .m_register{ color: #999; margin-left: .72rem; }
    .lc_right .m_lost:hover,.lc_right .m_register:hover{color:#E83512; }
    .lc_right .m_btn{width: 3rem; height: .35rem; margin-top: .2rem; background-color: #cc2931; color: #fff;  font-size: .14rem; font-weight: bold; border: none; border-radius: 5px; cursor: pointer;}
    .lc_right .m_btn:hover{ background-color: #f42a2a; }
  }
	    

   @media screen and (min-width: 1200px){
    .myradio { margin-left: 0; }
    .mydiv { width: 300px; }
    .mydiv .myset { text-align: left; padding: 9px 0; width: 50px; color: #000;  }
    .myinp-wrap { margin-left: 70px;  }
    .myinp-wrap input { display: inline-block; width: 110px;}
    .verify-img { width: 110px; height: 38px; border: none; cursor: pointer;}
    body .l_content .lc_right { height: 360px; }



   }
	</style>

</head>
<body>
   <div class="l_top">
      <img src="/lab/Public/Admin/img/LOGO.png">
   </div>
   <div class='l_content'>
      

      <div class="lc_right">
         <h4>帐号登录</h4>
         <form action="/lab/index.php/Home/Login/login" class="layui-form" method="post">
            <div class="m_text">
               <span></span>
               <input type="text" name="user_name" class="m_username" autocomplete="off" placeholder="用户名">
            </div>
            <div class="m_text">
               <span></span>
               <input type="password" name="user_pwd" class="m_password" placeholder="密码">
            </div>

            <div class="layui-form-item">
                <div class="layui-input-block myradio">
                  <input type="radio" name="user_type" value="教师" title="教师">
                  <input type="radio" name="user_type" value="学生" title="学生" checked>
                </div>
            </div>

            <div class="layui-form-item mydiv">
                <label class="layui-form-label myset">验证码</label>
                <div class="layui-input-block myinp-wrap">
                  <input type="text" name="captcha" required  lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input">
                  <img class='verify-img' src="/lab/index.php/Home/Login/verifyImg" onclick="this.src='/lab/index.php/Home/Login/verifyImg/'+Math.random()" alt="">
                </div>
                
              </div>
            
            
            <div><input type="submit" value="登录" class="m_btn"></div>
         </form>
         
      </div>
      <div class="lc_left">
         <h1>实验室预约系统</h1>
         <p>主要应用于学校等具有实验室的场景，学生和教师可进行提前预约实验室，能更好的规划使用实验室的时间。</p>
         <a href="../../Admin/Login/login">进入后台</a>
      </div>
   </div>





	
</body>
</html>