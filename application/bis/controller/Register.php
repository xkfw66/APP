<?php
namespace app\bis\controller;

use think\Controller;
use think\Request;

class Register extends Controller
{
    public function index()
    {
        $City = model("City")->indexcity();
        $data = model("Article")->getCategoryByParentId();
        return $this->fetch('',['City'=>$City,'data'=>$data]);
    }
    public function  add()
    {
        if(!request()->isPost())
        {
            $this->error('请求错误');
        }

        $data = input('post.');
        $validate = validate('Bis');
        if(!$validate->scene('add')->check($data))
        {
            return $this->error($validate->getError());
        }
        $name = model('Bis')->get(['name'=>$data['name']]);
        //halt($name);
        if($name)
        {
            $this->error('商户名已存在');
        }

        $bisdata =[
            'name'=>$data['name'],
            'city_id' => $data['city_id'],
            'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'].','.$data['se_city_id'],
            'logo'=>$data['logo'],
            'licence_logo' => $data['licence_logo'],
            'description'=>empty($data['description'])?'':$data['description'],
            'bank_info'=>$data['bank_info'],
            'bank_name'=>$data['bank_name'],
            'bank_user'=>$data['bank_user'],
            'faren'=>$data['faren'],
            'faren_tel'=>$data['faren_tel'],
            'email'=>$data['email'],
        ];
        $bisId = model('Bis')->add($bisdata);

      /*  $lnglat = \Map::Mapinterface($data['address']);
        if(empty($lnglat)||$lnglat['status']!=0 ||$lnglat['result']['precise'] !=1)
        {
            $this->error('地址不对');
        }*/
      /*  $data['cat'] = '';
        if(!empty($data['se_category_id'])) {
            $data['cat'] = implode('|', $data['se_category_id']);
        }*/
        $data['cat'] = '';
        if(!empty($data['se_category_id'])) {
            $data['cat']
                = implode('|', $data['se_category_id']);
        }
        $locationData = [
            'bis_id' => $bisId,
            'name' => $data['name'],
            'logo' => $data['logo'],
            'tel'=>$data['tel'],
            'contact'=>$data['contact'],
            'category_id'=>$data['category_id'],
            'category_path' =>$data['category_id'] . ',' . $data['cat'],
            'city_id' => $data['city_id'],
            'city_path' => empty($data['se_city_id']) ? $data['city_id'] : $data['city_id'].','.$data['se_city_id'],

            'address' => $data['address'],
            'open_time' => $data['open_time'],
            'content' => empty($data['content']) ? '' : $data['content'],
            'is_main' => 1,// 代表的是总店信息
           /* 'xpoint' =>
                empty($lnglat['result']['location']['lng']) ? '' : $lnglat['result']['location']['lng'],
            'ypoint' =>
                empty($lnglat['result']['location']['lat']) ? '' : $lnglat['result']['location']['lat'],*/
        ];
        $locationId = model('Bislocation')->add($locationData);

        $names = model('Bisaccount')->get(['username'=>$data['username']]);
        if($names){
            $this->error('用户名已存在');
        }
        $data['code'] = mt_rand(1000,100000);
        $accountData = [
            'bis_id' => $bisId,
            'username'=>$data['username'],
            'code'=>$data['code'],
            'password'=> md5($data['password'].$data['code']),
            'is_main'=>1,
        ];
        $accountId = model("Bisaccount")->add($accountData);//添加用户信息到sw_locationdata表


        $request = Request::instance();

        $url = request()->domain().url('bis/register/waiting', ['id'=>$bisId]);

        $title = "o2o入驻申请通知";
        $content = "您提交的入驻申请需等待平台方审核，您可以通过点击链接<a href='".$url."' target='_blank'>查看链接</a> 查看审核状态";
        \phpmailer\Email::send($data['email'],$title,$content);

        $this->success('申请成功', url('register/waiting',['id'=>$bisId]));



    }
        public function waiting($id) {
            if(empty($id)) {
                $this->error('error');
            }
            $detail = model('Bis')->get($id);

            return $this->fetch('',[
                'detail' => $detail,
            ]);
        }
}