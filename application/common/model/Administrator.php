<?php
namespace  app\common\model;
use think\Model;
class Administrator extends Model
{
    protected $pk ='id';
    protected $table ='sw_user';

    public function add($data)
    {
        $result = $this->validate(true)->save($data);
        if(false === $result)
        {
            // 验证失败 输出错误信息
            return ['vaid'=>0,'aa'=>$this->getError()];
            //dump($this->getError());
        }else
        {
            return ['vaid'=>1,'aa'=>"管理员添加成功"];
        }

    }
    public function upd($data)
    {
        $result = $this->validate(true)->save($data,$data['id']);
        if(false === $result)
        {
            // 验证失败 输出错误信息
            return ['vaid'=>0,'message'=>$this->getError()];
            //dump($this->getError());
        }else
        {
            return ['vaid'=>1,'message'=>"管理员编辑成功"];
        }

    }


}