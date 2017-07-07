<?php
namespace app\index\Controller;
use think\Controller;
class Map extends Controller
{
    public function one()
    {
        return $this->fetch();
    }
}