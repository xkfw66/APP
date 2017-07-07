<?php
namespace app\bis\controller;
use think\Controller;

class Login extends Controller
{
    /**
     * @return mixed登录
     */
    public function index()
    {
        if(request()->isPost())
        {
          $res = (new \app\common\model\Login())->login(input('post.'));
            if($res['vald'])
            {
                //说明登录成功
                $this -> success($res['msg'],'bis/index/index');exit;
            }
            else{
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }

    /***
     * 退出
     */
    public function logout()
    {
        session(null);
        $this->redirect('bis/login/index');
    }
}