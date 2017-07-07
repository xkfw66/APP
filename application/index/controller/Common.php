<?php
namespace app\index\controller;
use think\Controller;
use think\Request;
class Common extends Controller{
    public function _initialize(){
        define("CONTROLLER_NAME",Request::instance()->controller());//定义获取当前控制器的常量
        define("MODULE_NAME",Request::instance()->module());//定义获取当前模块的常量
        define("ACTION_NAME",Request::instance()->action());//定义获取当前方法的常量
    }
}