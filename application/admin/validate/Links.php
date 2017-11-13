<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/9
 * Time: 15:27
 */

namespace app\admin\validate;

use think\Validate;

class Links extends Validate
{
    protected $rule = [
        'title'  => 'require|min:2|max:15',
        'url'  => 'url',
        'desc' =>'max:255',
    ];


    protected $scene = [
        'add'   =>  ['title','url','desc'],
        'edit'  =>  ['title','url','desc'],
    ];
}