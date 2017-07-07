<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"E:\phpStudy\WWW\APP\public/../application/index\view\index\index.html";i:1499136295;s:62:"E:\phpStudy\WWW\APP\public/../application/index\view\base.html";i:1499073222;}*/ ?>
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
    <div class="banner">
        <div class="banL">
            <div class="yuyue">
                <p><a href="#"><img src="__STATIC__/home/text/1.gif" width="232" height="213" alt="" />
                    中江瓜蒌</a></p>
                <p><a href="#" class="yuyue_a"></a></p>
            </div>
        </div>
           <div class="banR">
            <div class="banR_pt">
                <a href="#"><img src="__STATIC__/index/text/2.gif" width="736" height="274" id="targetImg" alt="" /></a>            </div>
          <div class="banR_anl" id="btns">
                <a href="#"></a>
                <a href="#" class="xuanz"></a>
                <a href="#"></a>
            </div>
      </div>
    </div>
    <div class="mian">
        <div class="mianL">
            <div class="mianTop">
                <span class="mianT_span">特产一览│SPECIALTIES LIST</span>
                <a href="#">更多&gt;&gt;</a>
            </div>
           <div class="mianText">
                <ul>
                <?php if(is_array($field) || $field instanceof \think\Collection || $field instanceof \think\Paginator): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
                    <li>
                        <p><a href="<?php echo url('product/index'); ?>"><img src="<?php echo $vo['article_image']; ?>" width="208" height="177" alt="" /> <?php echo $vo['article_title']; ?></a></p>
                        <p><a href="#" class="yuyue_a"></a></p>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>   
                </ul>
          </div>
        </div>
        <div class="mianR">
            <div class="hezuo">
                <div class="hezuo_top">推荐合作单位</div>
                <div class="hezuo_text">
                    <ul>
                        <li><a href="#"><img src="__STATIC__/home/text/9.gif" width="206" height="60" alt="" /></a></li>
                        <li><a href="#"><img src="__STATIC__/home/text/10.gif" width="206" height="60" alt="" /></a></li>
                        <li><a href="#"><img src="__STATIC__/home/text/11.gif" width="206" height="60" alt="" /></a></li>
                        <li><a href="#"><img src="__STATIC__/home/text/12.gif" width="206" height="60" alt="" /></a></li>
                        <li><a href="#"><img src="__STATIC__/home/text/13.gif" width="206" height="60" alt="" /></a></li>
                    </ul>
                </div>
            </div>
            <div class="hezAd">
                <img src="__STATIC__/home/text/14.gif" />
                <a href="#" class="hezL01"></a>
                <a href="#" class="hezL02"></a>
            </div>
        </div>
    </div>
    <div class="mian3">
        <div class="mian3_top">
            <span class="mianT_span">资讯& 商机│IT & BUSINESS</span>
        </div>
        <div class="mian3_text">
            <div class="gonggao">
                <div class="gonggao_top">最新交易公告</div>
                <div class="gonggao_text">
                    <ul>
                        <li><a href="#">&middot;大量优质新鲜的草莓上市啦！</a></li>
                        <li><a href="#">&middot;质优价廉的山核桃大量上市..！</a></li>
                        <li><a href="#">&middot;大量供应红富士苹果！</a></li>
                        <li><a href="#">&middot;春季时令蔬菜已上市！</a></li>
                    </ul>
                </div>
            </div>
            <div class="xiangx">
                <div class="xiangx_top">
                    <a href="#" class="r">更多&gt;&gt;</a>
                    <span class="xian_span">最新信息</span>
                </div>
                <div class="xiangx_text">
                    <div class="xian_img">
                        <a href="#"><img src="__STATIC__/home/text/15.gif" width="139" height="112" alt="" /></a>                    </div>
                    <div class="xianWZ">
                        <ul>
                            <li><a href="#">&middot;山东大雨浇“落”无花果 斤..</a></li>
                            <li><a href="#">&middot;江苏常州：近期“菜走势..</a></li>
                            <li><a href="#">&middot;国庆将至 四川内江提前入..</a></li>
                            <li><a href="#">&middot;国庆节前山东青水果价格..</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="xiangx">
                <div class="xiangx_top">
                    <a href="#" class="r">更多&gt;&gt;</a>
                    <span class="xian_span">行业快讯</span>
                </div>
                <div class="xiangx_text">
                    <div class="xian_img">
                        <a href="#"><img src="__STATIC__/home/text/15.gif" width="139" height="112" alt="" /></a>                    </div>
                    <div class="xianWZ">
                        <ul>
                            <li><a href="#">&middot;山东大雨浇“落”无花果 斤..</a></li>
                            <li><a href="#">&middot;江苏常州：近期“菜走势..</a></li>
                            <li><a href="#">&middot;国庆将至 四川内江提前入..</a></li>
                            <li><a href="#">&middot;国庆节前山东青水果价格..</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    var imgs=["__STATIC__/index/text/2.gif","__STATIC__/index/text/1.gif","__STATIC__/index/text/3.gif",]
    var btns=document.getElementById("btns").getElementsByTagName("a");
    var targetImg=document.getElementById("targetImg");
    var timer;
    for(var i=0;i<btns.length;i++)
    {
        btns[i].id=i;
        btns[i].onmouseover=function(){
            targetImg.src=imgs[this.id];
            index=this.id;
            for(var i=0;i<btns.length;i++)
            {
                btns[i].style.background="#FFF";
            }
            btns[index].style.background="red";
            window.clearInterval(timer);
        }
        btns[i].onmouseout=function(){
            timer=setInterval(nextimg,3000);
        }
    }
    var index=0;
    function nextimg()
    {
        if(index>btns.length-1)
        {
            index=0;
        }
        targetImg.src=imgs[index];

        for(var i=0;i<btns.length;i++)
        {
            btns[i].style.background="#FFF";
        }
        btns[index].style.background="red";
        index++;
    }
    timer=setInterval(nextimg,3000);
    var img = document.getElementsByClassName('imgonmouse');
    var time = null;
    for(i=0;i<img.length;i++){
        img[i].onmouseover=function(){
            clearInterval(time);
            movein(this);
        }
        img[i].onmouseout=function(){
            clearInterval(time);
            moveout(this);
        }

    }
    function movein(img){
        var x = 0;
        time = setInterval(function(){
            x++;

            if(x>10){
                x=10;
            }
            img.style.backgroundPositionX = (-x) + "px";
        },10);
    }
    function moveout(img){
        var x = 5;
        time = setInterval(function(){
            x--;

            if(x<0){
                x=0;
            }
            img.style.backgroundPositionX = (-x) + "px";
        },10);
    }

</script>


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
