<?php
namespace app\index\controller;
   use think\Controller;	
class Message  extends Common
{
	 protected $db;
   public function _initialize(){
   parent::_initialize();
   $this->db =new \app\common\model\Message();
   
	}
    public function index()
    {
    	$field = db('message')->select();
    	   $this->assign('field',$field);
         $nav = db('nav')->select();
      return  $this->fetch('',['nav'=>$nav]);
		
    }
    public function message_add()
    {
    	if(request()->isPost())
        {
            // halt($_POST);die;
    		//if($res['vaid']){}
        


           $res= $this->db->add(input('post.'));
           if($res['vaid'])
            {
                $this->success($res['aa'],'index');exit;
            }else{
                $this->error($res['aa']);exit;
            }
    
     }
        return $this->fetch( );
    }
}
