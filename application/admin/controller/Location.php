<?php
namespace app\admin\controller;
use think\Controller;
class Location extends  Controller
{
    /**
     * @return mixed列表页 小伙伴自行完成 列表开发
     */

    public function apply()
    {   $bisId =  session('bisaccount.id');
        //halt($bisId);
        $detail = model('Bislocation')->getAllmsg($status =0);
        return $this->fetch('',['detail'=>$detail]);
    }
    /***
     * 状态修改
     */
    public function status()
    {

        $data = input("get.");
        $res = model('bislocation')->save(["status"=>$data['status']],["id"=>$data['id']]);

        if($res )
        {
            $this->success("更新成功");
        }
        else{
            $this->success("更新失败");

        }

    }
    /**
     * @return mixed|void门店添加
     */
    public function add()
    {
        if (request()->isPost()) {
            //halt($_POST);

            $data = input('post.');
            $validate = validate('Location');
            if (!$validate->scene('add')->check($data)) {
                return $this->error($validate->getError());
            }
            /*  $lnglat = \Map::Mapinterface($data['address']);
              halt($lnglat);
              if (empty($lnglat) || $lnglat['status'] != 0 || $lnglat['result']['precise'] != 1) {
                  $this->error('地址不对');
              }*/
            $data['cat'] = '';
            if (!empty($data['se_category_id'])) {
                $data['cat']
                    = implode('|', $data['se_category_id']);
            }

            $bisId =  session('bisaccount.id');
            // halt($bisId);
            $locationData = [
                'bis_id' => $bisId,//链接字段  外键  相关联
                'name' => $data['name'],
                'logo' => $data['logo'],
                'tel' => $data['tel'],
                'contact' => $data['contact'],
                'category_id' => $data['category_id'],
                'category_path' =>$data['category_id'] . ',' . $data['cat'],
                'city_id' => $data['city_id'],

                'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'] . ',' . $data['se_city_id'],
                //城市相关联数据
                'address' => $data['address'],
                'open_time' => strtotime($data['open_time']),
                'content' => empty($data['content']) ? '' : $data['content'],
                // 'is_main' => 1,// 代表的是总店信息
                /*'xpoint' =>
                    empty($lnglat['result']['location']['lng']) ? '' : $lnglat['result']['location']['lng'],
                'ypoint' =>
                    empty($lnglat['result']['location']['lat']) ? '' : $lnglat['result']['location']['lat'],*/
            ];

            $locationId = model('Bislocation')->add($locationData);
            if ($locationId) {
                $this->success('申请成功', 'index');
            } else {
                $this->error('申请失败');
            }
        } else {

            $citys = model("City")->indexcity();
            $categorys = model("Article")->getCategoryByParentId();
            return $this->fetch('', ['citys' => $citys, 'categorys' => $categorys]);
        }


    }
    /**
     * 商户门店查看
     */
    public function detail()
    {
        $id =  input('get.id');
       // halt($id);
        $citys = model("City")->indexcity();
        $categorys = model("Article")->getCategoryByParentId();
        $locationData = model('Bislocation')->get(["id"=>$id]);
        //halt($locationData);
        return $this->fetch('',
            [
                'citys'=>$citys,'categorys'=>$categorys,"locationData"=>$locationData
               /* "bisData"=>$bisData,
                "accountData"=>$accountData,
                */
            ]);

    }
    /**
     * 商户门店列表
     */
    public function index()
    {

        $detail = model('Bislocation')->getAllmsg($status=1);
        return $this->fetch('',['detail'=>$detail]);
    }
}