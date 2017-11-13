<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/9
 * Time: 15:00
 */

namespace app\admin\model;
use think\Model;

class Article extends Model
{
	public function cate()
    {
        return $this->belongsTo('cate','cateid');
    }
}