<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\Admin;
class Login extends Controller
{
    public function login()
    {
    	if (request()->isPost())
	{
		$res = (new Admin())->login(input('post.'));
		if($res['vald'])
		{
			//说明登录成功
			$this -> success($res['msg'],'admin/index/index');exit;
		}
		else{
			$this->error($res['msg']);exit;
		}
	}
    	return $this->fetch('login');
    }

	public function logout()
	{
		session(null);
		$this->redirect('admin/login/login');
	}
}
?>