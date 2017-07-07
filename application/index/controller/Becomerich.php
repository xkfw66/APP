<?php
namespace app\index\controller;
use think\Controller;

class Becomerich extends Controller
{
    public function index()
    {
    	$nav = db('nav')->select();
    	$subnav = db('subnav')->select();
    	$field = db('become')->select();
    	return  $this->fetch('',['nav'=>$nav,'subnav'=>$subnav,'field'=>$field]);
    	
    }
}