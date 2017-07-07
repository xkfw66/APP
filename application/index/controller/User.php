<?php
namespace app\index\controller;
use think\Controller;

class User extends Controller
{
    public function login()
    {
         session(null);
        if (request()->isPost())
        {
           // echo('asdsa');die;
          //  halt($_POST);
            $res = (new \app\common\model\User())->login(input('post.'));
            if($res['valid'])
            {
                $this -> success($res['msg'],'index/index');exit;
            } else{
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }
    public function register()
    {
        if (request()->isPost())
        {
            $data = input("post.");
            $validate = validate('Register');
            if(!$validate->scene('add')->check($data))
            {
                return  $this->error($validate->getError());
            }
            $name = model('User')->get(['username'=>$data['username']]);
            if($name)
            {
                $this->error('用户名已存在');
            }
            if($data['password'] != $data['repassword'] )
            {
                $this->error("你输入原始密码与确认密码不一致，请从新输入");
            }
            $data['code'] = mt_rand(100,10000);
            $data['password'] = md5($data['password'].$data['code']);
            $res = model('User')->add($data);
            if($res)
            {
                $this->success("注册成功","user/login");
            }else{
                $this->error("注册失败");
            }

        }
        return $this->fetch();
    }
}