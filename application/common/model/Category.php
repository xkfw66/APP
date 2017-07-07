<?php
namespace app\common\model;

use think\Model;

class Category extends Model{
   
  public function indexcategory(){
    return 	db('categorys')->select();
  }
    
}