<?php
namespace app\common\validate;
use think\Validate;
class Administrator extends  Validate
{
    protected $rule =[
        'uname'=>'require|max:30',
        'tel'=>'require',
        'email'=>'require'

    ];
    protected $message =[
        'uname.require'=>'请输入管理员名',
        'uname.max'=>'名称最多为30个字符',
        'tel.require'=>'请输入电话号码',
        'email.require'=>'请输入邮箱',

    ];
}
