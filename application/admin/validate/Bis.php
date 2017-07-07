<?php
namespace app\common\validate;

use think\Validate;

class Bis extends Validate
{
    protected $rule =[
        'name'=>'require|max:25',
        'logo'=>'require' ,
        'licence_logo'=>'require' ,
        'description'=>'require' ,
        'bank_info'=>'require' ,
        'bank_name'=>'require' ,
        'bank_user'=>'require' ,
        'faren'=>'require' ,
        'faren_tel'=>'require' ,
        'email'=>'require|email',
        'tel'=>'require' ,
        'contact'=>'require' ,

        'address'=>'require' ,
        'open_time'=>'require',
        'content'=>'require' ,
        'username'=>'require' ,
        'password'=>'require' ,
    ];
protected $message =
      [
          'name.require'=>'请填写商户名称',
          'email.require'=>'请输入邮箱',

          'logo.require'=>'请上传缩略图' ,
          'licence_logo.require'=>'请上传营业执照' ,
          'description.require'=>'请填写商户介绍' ,

          'bank_info.require'=>'请输入银行账号' ,
          'bank_name.require'=>'请输入开户行名称' ,
          'bank_user.require'=>'请输入开户行姓名' ,
          'faren.require'=>'请填写法人' ,
          'faren_tel.require'=>'请填写法人电话' ,
          'email.require'=>'请输入邮箱',
          'tel.require'=>'请填写电话' ,
          'contact.require'=>'请输入联系人' ,

          'address.require'=>'请填写地址' ,
          'open_time.require'=>'请填写营业时间',
          'content.require'=>'请填写门店信息' ,
          'username.require'=>'请输入用户名' ,
          'password.require'=>'请输入密码' ,
      ];
    protected  $scene = [
        'add' => ['name', 'email', 'logo', 'city_id', 'bank_info', 'bank_name', 'bank_user', 'faren', 'faren_tel','address','tel','contact','open_time',],
    ];

}
