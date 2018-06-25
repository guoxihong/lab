<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>实验室预约系统</title>
  <link rel="stylesheet" type="text/css" href="/lab/Public/layui/css/layui.css">
  <link rel="stylesheet" type="text/css" href="/lab/Public/Home/css/public.css">
  <script type="text/javascript" src="/lab/Public/Home/js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="/lab/Public/layui/layui.js"></script>
  <script type="text/javascript" src="/lab/Public/Home/js/main.js"></script>
  <style type="text/css">
    #appm{padding: 20px 90px;}
    .appm_list{ height: 40px; margin-top: 60px; border-bottom:2px solid #ccc; position: relative;  }
    .appm_list ul{ width: 500px;height: 40px; position: absolute; top: 0; left: 50%; margin-left: -250px;  }
    .appm_list li{ float: left; text-align: center; width: 250px; height: 40px; font-size: 16px; line-height: 40px; }
    .appm_list li:nth-of-type(1){border-bottom: 2px solid #cc2931; background: url(/lab/Public/Home/img/lo_1.png) no-repeat 40px center;}
    .appm_list li:nth-of-type(2){ color: #999; background: url(/lab/Public/Home/img/lo_2.png) no-repeat 55px center; }
    .appm_form{ width: 500px; margin: 0 auto; margin-top: 60px; }
    #appm .appm_list .r_success{ border-bottom: 2px solid #cc2931; background: url(/lab/Public/Home/img/lo_3.png) no-repeat 55px center; color: #000;}

    .appm_success{ width: 340px; margin: 0 auto; margin-top: 60px; overflow: hidden; }
    .appm_success div{}
    .appm_success div span{float: left; width: 60px; height: 52px; background: url(/lab/Public/Home/img/lo_4.png) no-repeat; margin-right: 10px;}
    .appm_success div p{float: left; width: 270px; height: 25px; line-height: 25px; font-size: 16px;}
    .appm_success div p strong{color: #bf2c24;}

    .appm_form .set-sel { width: 204px; margin-right: 0;  }
    .appm_form .set-date { margin-right: 0; }


  </style>
</head>
<body>
    <!--导航开始-->
    <div class="i-nav">
        <ul class="layui-nav">
            <li class="layui-nav-item layui-this nav-index"><a href="javascript:;">首页</a></li>
            <li class="layui-nav-item nav-appm" ><a href="#">开始预约</a></li>
            <li class="layui-nav-item">
                <a href="javascript:;">预约查询</a>
                <dl class="layui-nav-child">
                    <dd><a href="#">已预约实验室</a></dd>
                    <dd><a href="#">未预约实验室</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item">
                <a href="javascript:;">个人中心</a>
                <dl class="layui-nav-child">
                    <dd><a href="#">预约情况</a></dd>
                    <dd><a href="#">修改信息</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="#">留言板</a></li>
        </ul>
        <div class="login-info">
            <p>欢迎您, <span><?php echo ($name); ?></span></p>
            <a href="/lab/index.php/Home/Login/login">注销</a>
        </div>
    </div>
    <!--导航结束-->


    <div class="mydiv lab-list">
      <div class="table-box">
         <table class="layui-table">
            <thead>
              <tr>
                 <th>序号</th>
                 <th>实验室名称</th>
                 <th>实验室地址</th>
                 <th>实验室用途</th>
                 <th>实验室备注</th>
                 <th>操作</th>
              </tr>
            </thead>
            <tbody>
               <?php if(is_array($listlab)): $i = 0; $__LIST__ = $listlab;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$la): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($i); ?></td>
                    <td><?php echo ($la["lab_name"]); ?></td>
                      <td><?php echo ($la["lab_address"]); ?></td>
                    <td><?php echo ($la["lab_use"]); ?></td>
                      <td><?php echo ($la["lab_remark"]); ?></td>
                    <td><a class="appm-btn" name="<?php echo ($la["lab_id"]); ?>" href="javascript:;">我要预约</a></td>
                 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr>
                       <td colspan="7"><?php echo ($pagestr); ?></td>
                    </tr>

            </tbody>
         </table>
      </div>   
    </div>    


    <div id="appm" style="display:none">
        <div class="appm_list">
           <ul>
              <li>填写预约信息</li>
              <li>成功预约</li>
           </ul>
        </div>
        <div class="appm_form">
            <form class="layui-form">
                <div class="layui-form-item">
                    <label class="layui-form-label">预约人</label>
                    <div class="layui-input-block">
                      <input type="text" name="appm-user" readonly="readonly" value="<?php echo ($name); ?>" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">预约实验室</label>
                    <div class="layui-input-block">
                      <input type="text" name="appm-lab" readonly="readonly" value="" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">预约日期</label>
                    <div class="layui-inline set-date">
                      <input class="layui-input" placeholder="请选择预约时间" onclick="layui.laydate({elem: this, festival: true})">
                    </div>
                    <div class="layui-inline set-sel">
                        <select name="city" lay-verify="required">
                            <option value=""></option>
                            <option value="0">北京</option>
                            <option value="1">上海</option>
                            <option value="2">广州</option>
                            <option value="3">深圳</option>
                            <option value="4">杭州</option>
                        </select>
                    </div>
                </div>
            </form>
           

            
            

        </div>
        <div class="appm_success" style="display:none">
           <div>
              <span></span>
              <p>恭喜您预约成功，请等候审核</p>
              <p>您的ID为：<strong>130201011011</strong></p>
           </div>
        </div>
    </div>






  
</body>
</html>