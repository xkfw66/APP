<?php
namespace app\index\validate;
use think\Validate;

class Message extends Validate
{
    protected $rule = [
        'message'=>'require',
        

    ];
    protected $message = [
       'message'=>'请输入标题',
        
    ];
}