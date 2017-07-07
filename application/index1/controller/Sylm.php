<?php
namespace app\index\controller;
use think\Controller;

class Sylm extends Controller
{
    public function index()
    {
         return $this->fetch();

    }

    public function lmxq()
    {
        return $this->fetch();
    }
    public function lmlist()
    {
        return $this->fetch();
    }
}