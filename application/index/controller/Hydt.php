<?php
namespace app\index\controller;
use think\Controller;

class Hydt extends Controller
{
    public function index()
    {
      $nav = db('nav')->select();
    	return  $this->fetch('',['nav'=>$nav]);
    }
}