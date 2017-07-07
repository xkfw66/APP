<?php
namespace app\common\model;
use think\Loader;
use think\Model;
use think\Validate;

class Login extends Model
{
    protected $pk ='id';//申明主键ID
    protected $table ='sw_bisaccount';//申明要操作的数据表

    public function login($data)
    {
        //
        //
        //halt($data);
      //  $validate = Loader::validate('Login');//加载验证
        $validate = Loader::validate('Login');
        if (!$validate->check($data))
        {
           // echo('jhsadjka');die;
            return ['vald'=>0,'msg'=>$validate->getError()];
        }

        $userInfo =	$this->where('username',$data['username'])->find();
       //halt($userInfo);
        if($data['username']!=$userInfo['username']||$userInfo->status!=1)
        {
            return ['vald'=>0,'msg'=>'用户名不正确,或者未通过审核'];
        }


        $userInfo =$this->where(["password" => md5($data['password'] .$userInfo->code)])->find();
     // halt ($userInfo);
        if(!$userInfo)
        {
            return ['vald'=>0,'msg'=>'用户名或密码不正确'];
        }
        //存入session中
        session('bisaccount.id',$userInfo['id']);
        session('bisaccount.username',$userInfo['username']);
        return ['vald'=>1,'msg'=>'登录成功'];


    }
}
