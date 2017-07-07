<?php
namespace app\admin\Controller;
use think\Controller;
use think\Request;

class Common extends Controller
{
	public function __construct(Request $request = null)
	{
		parent::__construct($request);
		if(!session('admin.id'))
		{
			$this->redirect('admin/login/login');
		}
	}
}


?>