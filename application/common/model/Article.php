<?php
namespace app\common\model;
use houdunwang\arr\Arr;
use think\Model;

class Article extends Model
{
    protected $autoWriteTimestamp = true;
    protected $pk = 'id';
    protected $table = "sw_category";

    /***
     * 获取首页分类顶层数据
     */
    public function index($pid=0)
    {
        $data = [
            'pid'=>$pid,
            "status" => ['neq',-1],
        ];
        $order = [
            "sort" => "desc",
        ];
        //print_r($data);
      //  return  Arr::tree(db('category')->order('sort desc')->where($data)->select(),'name',$fieldPri='id',$fieldPid='pid');
    return $this->where($data)->order($order)->paginate(10);
        //halt($a);

    }

    /***
     * 记载索取分类的全部数据
     *
     */
   public function store()
    {
        $data = [
            "status" => 1,
        ];
        $order = [
            "sort" => "desc",
        ];
        return $this->where($data)->order($order)->select();

    }

    /***
     * 执行添加
     *
     */
    public function add($data)
    {
       //halt($data);
         $result = $this->validate(true)->save($data);//引用验证并执行保存添加

            if (false == $result) {
                //执行失败
                return ['vaild' => 0, 'msg' => $this->getError()];
            } else {
                //执行成功
                return ['vaild' => 1, 'msg' => '添加成功'];
            }
    }
    /***
     * 删除
     */
    public function del($id)
    {
        //1 先获取当前要删除数的pid;
        $pid = $this->where('id',$id)->value('pid');
       //halt($pid);
        //2 将当前要删除的$ID数据的子集数据的pid修改为$pid
      $res = $this->where('pid',$id)->update(['pid'=>$pid]);

        //执行当前的删除
       if( Article::destroy($id)) {
           return ['vaild' => 1,'msg'=>'操作成功'];
       }else{
           return ['vaild' => 0,'msg'=>'操作成功'];
       }
    }
    /***
     * 处理所属分类
     */
    public function cateData($id)
    {
      //1找到$id 的子集数据
       //halt(db('category')->select());
      $ids =  $this->getSon(db('category')->select(),$id);
        //吧自己追加进
        $ids[] = $id;
        //halt($ids);
        //找到除开自己和子集的其他数据
       $filed = db('category')->whereNotIn('id',$ids)->select();
        //变成树桩结构
     return Arr::tree($filed,'name','id','pid');//￥filed为整个数组数据，name在此表示是将它变为树桩结构，id为主键；
    }

    /***
     *运用递归找到自己的子集数据
     *
     *
     */
    public function getSon($data,$id)
    {   static $temp = [];
        foreach($data as $k=>$v)
        {
            if($id==$v['pid'])
            {
                $temp[] =$v['id'];
                $this->getson($data,$v['id']);
            }
        }
        return $temp;
    }
    /***
     * 执行修改
     */
    public function edit($data)
    {
       // halt($data);
     $result = $this->validate(true)->save($data,[$this->pk=>$data['id']]);
       // halt($result);
        if($result)
        {
            //s说明执行成功
            return ['vaild'=>1,'msg'=>'操作成功'];

        }else{
            return ['vaild'=>0,'msg'=>$this->getError()];
        }
    }
    /***
     * 获取顶层分类的数据
     */

    public function getCategoryByParentId($pid=0)
    {
        $data = [
            'status' => 1,
            'pid' => $pid,
        ];
        $order =[
            'id' => 'desc',
        ];
        $result = $this->where($data)
            ->order($order)
            ->select();
        //echo $this->getLastSql();
        return $result;
    }
    /***
     * 获取全部分类的数据
     */
    public function getCategoryAllmsg()
    {
        $data = [
            'status' => 1,

        ];
        $order =[
            'id' => 'desc',
        ];
        $result = $this->where($data)
            ->order($order)
            ->select();
        //echo $this->getLastSql();
        return $result;
    }
}