<?php
namespace app\index\controller;
use think\Controller;

class Showlist extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}