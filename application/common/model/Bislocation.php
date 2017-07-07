<?php
namespace app\common\model;
use think\Model;

class Bislocation extends BaseModel
{
    public function getmsg($bisId,$status) {
        $data = [
          'bis_id'=>  $bisId,
           'status'=>$status,
        ];

        $result = $this->where($data)
            ->order('id', 'desc')
            ->select();

        return $result;
    }
    public function getAllmsg($status) {
        $data = [

            'status'=>$status,
        ];

        $result = $this->where($data)
            ->order('id', 'desc')
            ->select();

        return $result;
    }
}