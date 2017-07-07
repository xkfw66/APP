<?php
namespace app\index\controller;
use think\Controller;

class Transaction  extends Controller
{
    public function index()
    {
    	$field = db('trading')->select();
    	   $this->assign('field',$field);
        $nav = db('nav')->select();
    	return  $this->fetch('',['nav'=>$nav]);
    }
}