<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    /**
     * @return mixed
     * 首页
*/
    public function index()
    {
        return $this->fetch();
    }

    /**首页生活馆
     * @return mixed
     */
    public function sunshine()
    {
        return $this->fetch();
    }

    /**首页产品详情
     * @return mixed
     */
    public function changpingxiangqing()
    {
        return $this->fetch();
    }

    /**量子科技
     * @return mixed
     */
    public function lzkj()
    {
        return $this->fetch();

    }
    /**
     * 首页旗下项目
     */
    public function xiangmu()
    {
     return   $this->fetch();
    }
}
