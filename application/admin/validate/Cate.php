<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/7
 * Time: 20:12
 */

namespace app\admin\validate;

use think\Validate;

class Cate extends Validate
{
    protected $rule = [
        'catename'  =>  'require|max:15|unique:cate',
    ];

    protected $message = [
        'catename.require'  =>  '栏目名必须存在',
        'catename.max'  =>  '栏目名不能超过25个字符',
        'catename.unique'  =>  '栏目名不能重复',
    ];

    protected $scene = [
        'add'  =>  ['catename'],
        'edit'  => ['catename'],
    ];
}