<?php
namespace app\bis\controller;
use think\Controller;

class Deal extends Controller
{
    private  $db;
    public function _initialize() {
        $this->db = model("Deal");
    }

    /**
     * @return mixed团购商品列表
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
         $bisId =  session('bisaccount.id');
        $deals = $this->db->getmsg($sdata,$status=1,$bisId);
       // print_r($deals);die;
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

    /**
     * @return mixed团购商品添加
     */
    public function add()
    {
        $bisId =  session('bisaccount.id');

      if(request()->isPost())
      {
            $data = input('post.');
            $deals = [
                'bis_id' => $bisId,
                'name' => $data['name'],
                'image' => $data['image'],
                'category_id' => $data['category_id'],
                'se_category_id' => empty($data['se_category_id']) ? '' : implode(',', $data['se_category_id']),
                'city_id' => $data['city_id'],
                'location_ids' => empty($data['location_ids']) ? '' : implode(',', $data['location_ids']),
                'start_time' => strtotime($data['start_time']),
                'end_time' => strtotime($data['end_time']),
                'total_count' => $data['total_count'],
                'origin_price' => $data['origin_price'],
                'current_price' => $data['current_price'],
                'coupons_begin_time' => strtotime($data['coupons_begin_time']),
                'coupons_end_time' => strtotime($data['coupons_end_time']),
                'notes' => $data['notes'],
                'description' => $data['description'],
                'bis_account_id' => $bisId,
              /*  'xpoint' => $location->xpoint,
                'ypoint' => $location->ypoint,*/

           ];
            $deal = model('Deal')->add($deals);
         // halt($deal);die;
            if($deal)
            {
                $this->success("申请成功",'Deal/index');
            } else{
                $this->error('申请失败');
            }

      }else {
          //获取城市分类
          $citys = model("City")->indexcity();
         // halt($citys);
          //获取所属分类
          $categorys = model("Article")->getCategoryByParentId();
          //halt($categorys);
          //获取门店
          $location = model('Bislocation')->getmsg($bisId,$status=1);
         // halt($location);
          return $this->fetch('', ['citys' => $citys, 'categorys' => $categorys, 'location'=>$location]);
      }
    }
}