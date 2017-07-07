<?php
namespace app\index\controller;
use think\Controller;

class Introduction extends Controller
{
    public function index()
    {
      $nav = db('nav')->select();
    
    	return  $this->fetch('',['nav'=>$nav]);
    	
    }
    public function present()
    {
       $field = db('inrtoduce')->select();
       $nav = db('nav')->select();
    	$subnav = db('subnav')->select();
    	return  $this->fetch('',['nav'=>$nav,'subnav'=>$subnav,'field'=>$field]);
    	
    }
}