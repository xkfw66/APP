<?php
namespace app\common\validate;
use think\Validate;
class Login extends Validate
{
    protected $rule =[
        'username'=>'require',
        'password'=>'require',
    ];
    protected $message =[
        'username.require'=>'请输入用户名',
        'password.require'=>'请输入密码',
    ];
}