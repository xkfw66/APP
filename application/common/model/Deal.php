<?php
namespace app\common\model;
use think\Model;

class Deal extends BaseModel
{
    public function getmsg($data = [],$status,$bisId)
    {
        $data['status']=$status;
        $data['bis_id']=$bisId;
        $order = ['id'=>'desc'];
        $result = $this->where($data)
            ->order($order)
            ->paginate();
      //  halt($result);
        //echo $this->getLastSql();
        return  $result;
    }
    public function getAllmsg($data = [],$status)
    {
        $data['status']=$status;
        $order = ['id'=>'desc'];
        $result = $this->where($data)
            ->order($order)
            ->paginate();

        return  $result;
    }
}