<?php
namespace app\common\validate;

use think\Validate;

class Location extends Validate
{
    protected $rule =[
        'name'=>'require|max:25',
        'city_id' => 'require',
        'logo'=>'require' ,
        'content'=>'require' ,
        'category_id'=>'require',
        'address'=>'require' ,
        'tel'=>'require' ,
        'contact'=>'require' ,

        'open_time'=>'require' ,


    ];
protected $message =
      [
          'name.require'=>'请填写分店名称',
          'logo.require'=>'请上传缩略图' ,
          'content.require'=>'请填写门店信息' ,
          'address.require'=>'请填写地址' ,
          'tel.require'=>'请填写电话' ,
          'contact.require'=>'请输入联系人' ,
          'open_time.require'=>'请输入营业时间' ,

      ];
    protected  $scene = [
        'add' => ['name',  'logo', 'city_id','content','category_id','address','tel','contact','open_time'],
    ];

}
