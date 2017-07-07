<?php
namespace app\common\model;
use think\Loader;
use think\Model;
use think\Validate;

class Admin extends Model{
	protected $pk = 'id';
	protected $table = 'sw_admin';
	
	public function Login($data)
	{
		//1执行验证
		$validate = Loader::validate('Admin');
		//如果验证不通过
		if(!$validate->check($data))
		{	
			return ['vald'=>0,'msg'=>$validate->getError()];
		    //dump($validate->getError());
		}
		//比对用户名和密码是否正确
		$userinfo =	$this->where('username',$data['username'])->where('password',$data['password'])->find();
		//halt ($userinfo);
		if(!$userinfo)
		{
			return ['vald'=>0,'msg'=>'用户名或密码不正确'];
		}
		//存入session中
		session('admin.id',$userinfo['id']);
		session('admin.username',$userinfo['username']);
		return ['vald'=>1,'msg'=>'登录成功'];	
	}
	public function passupd($data)
	{
		$validate = new Validate
		([
			    'password'  => 'require',
   				 'newpsd' => 'require',
				'confirmpsd'=>'require|confirm:newpsd'
		],
		[		'password.require'=>'请输入原始密码',
				'newpsd.require'=>'请输入新密码',
				'confirmpsd.require'=>'请输入确认密码',
				'confirmpsd.confirm'=>'原始密码和新密码不一致'
				]);
		//执行验证
		if (!$validate->check($data)) {
			return ['vald'=>0,'msg'=>$validate->getError()];
		   //dump($validate->getError());
		}
		//验证原始密码
		$userinfo = $this->where('id',session('admin.id'))->where('password',$data['password'])->find();
		if(!$userinfo)
		{
			return['vald'=>0,'msg'=>'原始密码不正确'];
		}
		//密码修改

		// save方法第二个参数为更新条件
		$res = $this->save([
				'password'  => $data['newpsd'],

				],[$this->pk => session('admin.id')]);
			//halt($res);
		if($res)
		{
			return['vald'=>1,'msg'=>'密码修改成功'];

		} else{
			return['vald'=>0,'msg'=>'密码修改失败'];
		}

	}
}
?>