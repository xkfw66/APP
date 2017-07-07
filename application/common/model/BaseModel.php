<?php
namespace app\common\model;
use think\Model;

class BaseModel extends Model{
    protected  $autoWriteTimestamp = true;//时间戳的转换
    public function add($data)
    {
      //  halt($data);
        $data['status'] = 0;
        $this->save($data); //save  更新方法
        return $this->id;

    }

}