<?php
namespace app\common\validate;
use think\Validate;
class Register extends Validate
{
	protected $rule =[
	'username'=>'require',
	'password'=>'require',
	'repassword'=>'require',
	'email'=>'require|email',
	'verifycode'=>'require|captcha'
	
	];
	protected $message =[
	'username.require'=>'请输入用户名',
	'password.require'=>'请输入密码',
	'repassword.require'=>'请输入密码',
	'email.require'=>'请输入邮箱',
	'email.email'	=>'邮箱格式不正确',
	'verifycode.require'=>'请输入验证码',
	'verifycode.captcha'=>'验证码不正确'
	];
	protected  $scene = [
		'add' => ['username', 'password', 'repassword', 'email', 'verifycode']
	];

}
?>