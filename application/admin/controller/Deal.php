<?php
namespace app\admin\controller;
use think\Controller;
class Deal extends  Controller
{
    private  $db;
    public function _initialize() {
        $this->db = model("Deal");
    }
    /**
     * 团购申请提交
     */
    public function apply() {

        $sdata = [];
        $data = input("get.");

        if(!empty($data['start_time']) && !empty($data['end_time']) && strtotime($data['end_time']) >= strtotime($data['start_time']))
        {
            $sdata["create_time"] =[
                ["lt",strtotime($data['end_time'])],
                ["gt",strtotime($data['start_time'])]
            ];
        }

        if(!empty($data['category_id']))
        {
            $sdata['category_id'] = $data['category_id'];
            //halt($sdata['category_id']);
        }

        if(!empty($data['city_id']))
        {
            $sdata['city_id'] = $data['city_id'];
        }


        if(!empty($data['name']))
        {

            $sdata['name'] = ['like', '%'.$data['name'].'%'];
        }


        $categoryArrs = $cityArrs =[];
        $categorys = model("Article")->getCategoryByParentId();

        foreach($categorys as $category_id)
        {
            $categoryArrs[$category_id->id] = $category_id->name;
            //halt($categoryArrs[$category_id->id]);
        }
        $citys = model("City")->getCitySon();
        foreach($citys as $city_id)
        {
            $cityArrs[$city_id->id] = $city_id->name;
            //halt($cityArrs[$city_id->id]);die;
        }

        $deals = $this->db->getAllmsg($sdata,$status=0 );
        //print_r($deals);die;
        return $this->fetch('',[
            "categorys"=>$categorys,
            "citys"=>$citys,
            "categoryArrs"=>$categoryArrs,
            "cityArrs"=>$cityArrs,
            "deals"=>$deals,
            "category_id"=>empty($data['category_id']) ? "":$data['category_id'],
            "city_id" => empty($data['city_id']) ? "":$data['city_id'],
            'name' => empty($data['name']) ? "":$data['name'],
            "start_time"=>empty($data['start_time']) ? "":$data['start_time'],
            "end_time"=>empty($data['end_time']) ? "":$data['end_time'],
        ]);
    }
    /***
     * 状态修改
     */
    public function status()
    {

        $data = input("get.");
        $res = model('Deal')->save(["status"=>$data['status']],["id"=>$data['id']]);

        if($res )
        {
            $this->success("更新成功");
        }
        else{
            $this->success("更新失败");

        }

    }
    /**
     * @return mixed团购列表
     */

    public function index() {

        $sdata = [];
        $data = input("get.");

        if(!empty($data['start_time']) && !empty($data['end_time']) && strtotime($data['end_time']) >= strtotime($data['start_time']))
        {
            $sdata["create_time"] =[
                ["lt",strtotime($data['end_time'])],
                ["gt",strtotime($data['start_time'])]
            ];
        }

        if(!empty($data['category_id']))
        {
            $sdata['category_id'] = $data['category_id'];
            //halt($sdata['category_id']);
        }

        if(!empty($data['city_id']))
        {
            $sdata['city_id'] = $data['city_id'];
        }


        if(!empty($data['name']))
        {

            $sdata['name'] = ['like', '%'.$data['name'].'%'];
        }


        $categoryArrs = $cityArrs =[];
        $categorys = model("Article")->getCategoryByParentId();

        foreach($categorys as $category_id)
        {
            $categoryArrs[$category_id->id] = $category_id->name;
            //halt($categoryArrs[$category_id->id]);
        }
        $citys = model("City")->getCitySon();
        foreach($citys as $city_id)
        {
            $cityArrs[$city_id->id] = $city_id->name;
            //halt($cityArrs[$city_id->id]);die;
        }

        $deals = $this->db->getAllmsg($sdata,$status=1);
        //print_r($deals);die;
        return $this->fetch('',[
            "categorys"=>$categorys,
            "citys"=>$citys,
            "categoryArrs"=>$categoryArrs,
            "cityArrs"=>$cityArrs,
            "deals"=>$deals,
            "category_id"=>empty($data['category_id']) ? "":$data['category_id'],
            "city_id" => empty($data['city_id']) ? "":$data['city_id'],
            'name' => empty($data['name']) ? "":$data['name'],
            "start_time"=>empty($data['start_time']) ? "":$data['start_time'],
            "end_time"=>empty($data['end_time']) ? "":$data['end_time'],
        ]);
    }

    public function detail()
    {

        $id = input("get.id");
        $bisId =  session('bisaccount.id');
        // halt($id);
        $citys = model("City")->indexcity();
        //halt($citys);
        $categorys = model("Article")->getCategoryAllmsg();
        //halt($categorys);
        $location = model('Bislocation')->getmsg( $bisId,$status=1);
        $deal = model("Deal")->get($id);
       // halt($deal);
        return $this->fetch('',['citys'=>$citys,'categorys'=>$categorys,'location'=>$location,'deal'=>$deal]);
    }
}
