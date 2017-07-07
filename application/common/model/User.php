<?php
namespace app\common\model;
use think\Loader;
use think\Model;
use think\Validate;

class User extends BaseModel{
	/**
	 * @param $data用户注册
	 * @return false|int
	 */
	public function add($data)
	{
		$data['status'] = 1;
		return $user = $this->allowField(true)->save($data);
	}

	/**用户登录
	 * @param $data
	 * @return array
	 */
	public function login($data)
	{
		//1执行验证
		//halt($data);
		$validate = Loader::validate('UserLogin');
		//如果验证不通过
		if(!$validate->check($data))
		{
			return ['valid'=>0,'msg'=>$validate->getError()];
			//dump($validate->getError());
		}
		$userInfo =	$this->where('username',$data['username'])->find();
		//halt($userInfo);
		if($data['username']!=$userInfo['username'])
		{
			return ['valid'=>0,'msg'=>'用户名不正确'];
		}


		$userInfo =$this->where(["password" => md5($data['password'] .$userInfo->code)])->find();
		// halt ($userInfo['username']);
		if(!$userInfo)
		{
			return ['valid'=>0,'msg'=>'用户名或密码不正确'];
		}
		//存入session中
		session('user.id',$userInfo['id']);
		session('user.username',$userInfo['username']);


		return ['valid'=>1,'msg'=>'登录成功'];
	}

}
?>