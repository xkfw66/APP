<?php
namespace app\common\validate;
use think\Validate;

class Article extends Validate
{   //声明规则
protected $rule =[
    'name'=>'require',
    'sort'=>'require|between:1,9999',
    'pid'=>'require|number',
    'status'=>'number|in:-1,0,1'
];
//提示信息
protected $message =[
    'name.require'=>'请输入分类名',
    'sort.require'=>'请输入排序',
    'sort.between'=>'排序需在1-9999之间',
    'status.number'=>'状态必须为数字',
    'status.in'=>'状态范围在-1到1之间',
];
//场景的筛选
protected $scene =[
    'add' => ['name', 'pid','id'],
    'status' => ['id', 'status'],
];
}