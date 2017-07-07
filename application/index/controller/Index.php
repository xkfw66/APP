<?php
namespace app\index\controller;
use think\Controller;

class Index extends Controller
{
    public function index()
    {	
    	$field = db('about')->select();
    	$nav = db('nav')->select();
    	return  $this->fetch('',['nav'=>$nav,'field'=>$field]);
    }
}