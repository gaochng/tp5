<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/9
 * Time: 15:00
 */

namespace app\admin\model;
use think\Model;

class Cate extends Model
{
	public function articles()
    {
        return $this->hasMany('Article','cateid','id');
    }

}