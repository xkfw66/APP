<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\phpStudy\WWW\APP\public/../application/index\view\user\login.html";i:1499128062;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="author" content="$Id$" />
    <meta http-equiv="copyright" content="Copyright (C) 2013 * All rights reserved." />
    <meta http-equiv="keywords" content="关键字" />
    <meta http-equiv="description" content="描述" />
    <link type="text/css" href="__STATIC__/home/css/style.css" rel="stylesheet" rev="stylesheet" media="screen" />
    <title>登录</title>
</head>

<body>
<div class="centBox">
    <div class="top">
        <span>【<a href="#">登陆管理</a> 】 【<a href="#">申请入驻</a>】  【<a href="#">前往采购</a>】  【<a href="#">联系我们</a>】</span>
        您好！欢迎来到中江县名优产品展销平台!     您遇到任何疑问请致电：0838 -6668888
    </div>
    <div class="top2">
        <div class="top2R">
            <div class="fanhui"><a href="<?php echo url('index/index'); ?>">返回首页</a></div>
        </div>
        <div class="logo">
            <a href="#" class="logo_a">中江名优特产</a>
        </div>
    </div>
</div>
<div class="denlu">
    <form action="<?php echo url('user/login'); ?>" method="post">
        <div class="denlu_nei">
        <div class="denluL">
            <img src="__STATIC__/home/text/23.gif" class="pt145" />
        </div>
        <div class="denluR">
            <div class="den_bt">
                登录我们
            </div>
            <div class="den_kang">
                <table width="100%" height="155" border="0" cellspacing="0" cellpadding="0">
                    <tr >
                        <td width="50"><span class="den_span">用户名</span></td>
                        <td><input type="text" class="denl_input" -value="邮箱/会员账号" name="username" /></td>
                    </tr>
                    <tr>
                        <td height="30"><span class="den_span">密&nbsp;&nbsp;&nbsp;&nbsp;码</span></td>
                        <td><input name="password" type="password" class="denl_input"  />
                        </td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><p><input name="" type="checkbox" value="" />十天免费登录</p></td>
                    </tr>
                </table>

            </div>
            <div class="deng_ann">
                <input name="" type="submit"  class="deng_a"/>
                <a href="#">忘记密码？</a>
            </div>
            <div class="zhece">
                <span class="zhece_spa"></span><a href="<?php echo url('user/register'); ?>">免费注册</a>            </div>
          
    </div>
    </form>
</div>
<div class="fooer">
 
</div>
</body>
</html>
