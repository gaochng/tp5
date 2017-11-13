<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/7
 * Time: 20:12
 */

namespace app\admin\validate;

use think\Validate;

class Article extends Validate
{
    protected $rule = [
        'title'  =>  'require',
        'author'  =>  'require',
        'desc'  =>  'require',
        'content'  =>  'require',
    ];

   /* protected $message = [
        'catename.require'  =>  '栏目名必须存在',
        'catename.max'  =>  '栏目名不能超过25个字符',
        'catename.unique'  =>  '栏目名不能重复',
    ];*/

    protected $scene = [
        'add'  =>  ['title','author','desc','content'],
        'edit'  =>  ['title','author','desc','content'],
    ];
}