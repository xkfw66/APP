<?php
namespace app\admin\validate;
use think\Validate;

class message extends Validate
{
    protected $rule = [
        'reply'=>'require',
	
        

    ];
    protected $message = [
       'reply'=>'请输入标题',
	  
        
    ];
}