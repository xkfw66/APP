<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\phpStudy\WWW\APP\public/../application/index\view\message\index.html";i:1499060143;s:62:"D:\phpStudy\WWW\APP\public/../application/index\view\base.html";i:1499073222;}*/ ?>
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
                 <div class="yuyue">
                    <p><a href="#"><img src="__STATIC__/home/text/1.gif" width="232" height="213" alt="" />
                     中江瓜蒌</a></p>
                    <p><a href="#" class="yuyue_a"></a></p>
                </div>
            </div>
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
        </div>
        <div class="neiyeR">
            <div class="neiBT">
                <span class="mianT_span">留言反馈 | FEEDBACK </span>
            </div>
            <div class="feedbck">
            <form class="form form-horizontal" name="forma" id="form-article-add" method="post" action="<?php echo url('message_add'); ?>">
                <div class="feedb_top">
                    <div class="feedb_bate">
                        <table width="200" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="44" class="feedb_td">联系人：</td>
    <td><input name="name" type="text" class="feedb_input" /><span class="feedb_span">*</span></td>
  </tr>
  <tr>
    <td height="44" class="feedb_td">联系电话：</td>
    <td><input name="phoneNum" type="text" id="phoneNum" class="feedb_input"/><span class="feedb_span">*</span></td>
  </tr>
  <tr>
    <td class="feedb_td">内容：</td>
    <td><textarea name="message" cols="" rows="" class="feedb_tarea"></textarea></td>
  </tr>
</table>

                    </div>
                    <div class="feedb_tetx">
                        <input type="submit" class="feedb_annl" value="提交" />
                    </div>
                </div>
                 </form>
                <div class="feed_deta">
                <?php if(is_array($field) || $field instanceof \think\Collection || $field instanceof \think\Paginator): if( count($field)==0 ) : echo "" ;else: foreach($field as $key=>$vo): ?>
                    <div class="feed_xia">
                  
                      <div class="feBt">
                            <p class="cb4"><?php echo date('Y-m-d h:m:i') ###($vo['create_time'] ); ?></p>
                            <p><?php echo $vo['message']; ?></p>
                      </div>
                      
                        <div class="feed_xtex">
                                <?php echo $vo['reply']; ?>                 
                           </div>
                    </div>
                      <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="feiye">
                        <ul>
                            <li><input type="submit" value="确定" class="feiye_ban" />
                            <li>到第<input name="" type="text" class="feiye_ingp" />页</li>
                            <li><a href="#">下一页</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#" class="xuanz">1</a></li>
                            <li><a href="#" class="feiye_hs">上一页</a></li>
                            </li>
                        </ul>
                    </div>
            </div>
        </div>
    </div> 
</div>
<script type="text/javascript" src="__STATIC__/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script>
$('#phoneNum').change(function(){
  var chineseReg = /^[\u4E00-\u9FA5]{2,4}$/;
 
  if(!chineseReg.test(document.forma.name.value)) {
      alert('请填写中文2到4个字!!');
      document.forma.name.focus();
      return false;
  }
  var phoneNumReg = /(^[0-9]{3,4}\-[0-9]{7}$)|(^[0-9]{7}$)|(^[0-9]{3,4}[0-9]{7}$)|(^0{0,1}13[0-9]{9}$)/
  if(!phoneNumReg.test(document.forma.phoneNum.value)) {
      alert('请填写正确电话号码!!');
      document.forma.phoneNum.focus();
      return false;
  }
  return true;

});


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
