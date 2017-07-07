<?php
namespace app\common\model;

use think\Model;

class Bis extends BaseModel
{
    protected $pk="id";
    protected $table="sw_bis";
    public function getBisdata($status)
    {
        $order =[
            'id'=>'desc'
        ];
        $data =['status'=>$status];
       $result = $this->where($data)->order($order)->paginate();

        return $result;
    }
}