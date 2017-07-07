<?php
namespace app\admin\controller;
use think\Controller;
use app\common\model\Admin;
class Passupd extends Common
{
    public function passupd()
    {
        if(request()->isPost())
        {
            //halt($_POST);
            $res = (new Admin())->passupd(input('post.'));
            if($res['vald'])
            {
                session(null);
                $this->success($res['msg'],'admin/index/index');exit;
            }
            else{
                $this->error($res['msg']);exit;
            }
        }
        return $this->fetch();
    }
}