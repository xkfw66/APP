<?php
	namespace app\admin\Controller;
	use think\Controller;
	class Index extends Common
	{

		public function index()
		{
			//$ress =  \Map::staticimage("成都府南河");
			return	$this->fetch();
		}

		public function email()
		{
			\phpmailer\Email::send('1126266505@qq.com','迪欧到啊 按时来到就 ','asjkdh asd');
			return "成功发送....";
		}

		public function test()
		{
		 \Map::Mapinterface("成都天府广场地铁");exit;
			//return 'singwa';
		}
		public function map()
		{
			 return \Map::staticimage("成都五块石");exit;


		}




	}
	
	
?>