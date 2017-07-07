<?php
namespace app\admin\controller;
use think\Controller;

class  Product extends Common
{
    public function index()
    {
        return $this->fetch();
    }
    public function category()
    {
        return $this->fetch();
    }
    public function lists()
    {
        return $this->fetch();
    }
    public function add()
    {
        return $this->fetch();
    }


}