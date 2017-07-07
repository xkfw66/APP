<?php
namespace app\common\model;
use think\Model;

class City extends Model
{
    protected  $pk ='id';
    protected $table ='sw_city';
    //查询顶级城市
    public function indexcity($pid=0){

        $data = ['status' => 1, 'pid' => $pid,];
        $order =['id' => 'desc',];
        $result = $this->where($data)
            ->order($order)
            ->select();
        return $result;
    }

    public function getCitySon()
    {
        $data = [
            'status'=>1,
            'pid'=>['gt',0]
        ];
        $order =['id' => 'desc',];
        $result = $this->where($data)
            ->order($order)
            ->select();
        //halt($result);
        return $result;
    }


}