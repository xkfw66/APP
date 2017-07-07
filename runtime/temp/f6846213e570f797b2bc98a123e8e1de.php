<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"D:\phpStudy\WWW\APP\public/../application/index\view\product\index.html";i:1499068509;s:62:"D:\phpStudy\WWW\APP\public/../application/index\view\base.html";i:1499073222;s:69:"D:\phpStudy\WWW\APP\public/../application/index\view\public\left.html";i:1499065653;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="author" content="$Id$" />
    <meta http-equiv="copyright" content="Copyright (C) 2013 * All rights reserved." />
    <meta http-equiv="keywords" content="关键字" />
    <meta http-equiv="description" content="描述" />
    <link type="text/css" href="__STATIC__/home/css/style.css" rel="stylesheet" rev="stylesheet" media="screen" />
    <title>首页</title>
</head>

<body>
<div class="centBox">
    <div class="top">
         <span><?php if(session('user.username')): ?><?php echo session('user.username'); ?> | <a href="<?php echo url('user/login'); ?>">退出</a><?php else: ?>【<a href="<?php echo url('user/login'); ?>">登陆管理</a> 】 <?php endif; ?> 【<a href="<?php echo url('bis/register/index'); ?>">申请入驻</a>】  【<a href="#">前往采购</a>】  【<a href="#">联系我们</a>】</span>
        您好！欢迎来到中江县名优产品展销平台!     您遇到任何疑问请致电：0838 -6668888
    </div>
    <div class="top2">
        <div class="top2R">
            <div class="soru">
                <input name="" type="text" class="soru_input" />
            </div>
            <input name="" type="submit" class="soru_banu" />
        </div>
        <div class="logo">
            <a href="#" class="logo_a">中江名优特产</a>
        </div>
    </div>
</div>
<div class="nav">
    <div class="nav_nei">
        <div class="natebia_ji"></div>
        <div class="natebia"><a href="#" class="natebia_a">特别推荐</a></div>
        <div class="navR">
            <ul>
           <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): if( count($nav)==0 ) : echo "" ;else: foreach($nav as $key=>$vo): ?>
    <li><a href="<?php echo url($vo['url'] ,['id'=>$vo['id']]); ?>" <?php if(input('param.id')==$vo['id']): ?> class="xuanz"<?php endif; ?>><?php echo $vo['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
              
            </ul>
            }
        </div>
    </div>
</div>


<div class="centBox">
    <div class="neiye clearfix">
          <div class="neiyeL">
            <div class="banL noel">
                <div class="lanmu">
                      <ul>
           <?php if(is_array($subnav) || $subnav instanceof \think\Collection || $subnav instanceof \think\Paginator): if( count($subnav)==0 ) : echo "" ;else: foreach($subnav as $key=>$vo): ?>
    <li><a href="<?php echo url($vo['url'] ,['id'=>$vo['id']]); ?>" <?php if(input('param.id')==$vo['id']): ?> class="xuanz"<?php endif; ?>><?php echo $vo['name']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
              
            </ul>
                </div>
            </div>
            <div class="dianhua">
                <div class="dianhua_top">联系电话</div>
                <div class="dianhua_text">
                    联  系  人：陈波 （总裁） <br />
                    电       话 ：86 0838 7102727<br />
                    移动电话 ：	138-8180-1576<br />
                    传       真 ：86 0838 7102771<br />
                    地       址 ：	中国 四川 德阳市四川省德阳市中江县双龙镇                </div>
            </div>
        </div>
             <div class="neiyeR">
            <div class="neiBT">
                <span class="mianT_span">产品介绍 | PRODUCTS</span>
            </div>
            <div class="product">
            <?php if(is_array($field) || $field instanceof \think\Collection || $field instanceof \think\Paginator): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
                <div class="product_top">
                  <div class="product_name">
                        <img src="<?php echo $vo['image']; ?>" width="396" height="277" alt="" />
                  </div>
                    <div class="product_info">
                      <p class="prod_bt">中江柚</p>
                      <p><?php echo $vo['leibie']; ?></p>
                      <p><?php echo $vo['guige']; ?></p>
                      <p><?php echo $vo['chandi']; ?></p>
                      <p><?php echo $vo['jiage']; ?></p>
                      <p><?php echo $vo['shijian']; ?></p>
                      <p class="prod_pad">
                            <span class="l">购买数量：</span>
                            <a href="#" class="prod_jia"></a>
                            <input name="" type="text" class="prod_tetx" />
                            <a href="#" class="prod_jian"></a>                            
                      </p>
                      <p><a href="#" class="prod_dg"></a></p>
                    </div>
                </div>
                <div class="proTd">
                    <div class="proTd_top">
                        产品特点
                    </div>
                    <div class="proTd_yte">
                      <?php echo $vo['tedian']; ?>
                    </div>
                </div>
            </div>
              <?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
    </div>
</div>


</div>
<div class="fooer">
    <div class="fooer_nei">
        服务中心  |  联系我们  |  平台介绍  |  网站地图  |  邮件反馈  |  友情链接<br />
        客服热线：0838-8888888  平台名称：展销网 <br />
        中江县名优产品展销　版权所有 蜀ICP备 05000282号-2
        <p><a href="#"><img src="__STATIC__/home/images/jg.gif" /></a></p>
    </div>
</div>
</body>
</html>
