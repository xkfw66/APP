<?php
namespace app\bis\Controller;
use think\Controller;
use think\Request;

class Common extends Controller
{
	public function __construct(Request $request = null)
	{
		parent::__construct($request);
		if(!session('bisaccount.id'))
		{
			$this->redirect('login/index');
		}
	}
}


?>