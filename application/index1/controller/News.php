<?php
namespace app\index\controller;
use think\Controller;
class News extends  Controller
{
   public function index()
    {
        return $this->fetch();
    }

    public function gszx()
    {
        return $this->fetch();
    }
    public function newsxq()
    {
        return $this->fetch();
    }
    public function hyzx()
    {
        return $this->fetch();
    }
    public function spzx()
    {
        return $this->fetch();
    }
}