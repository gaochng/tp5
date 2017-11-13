<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/7
 * Time: 20:12
 */

namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{
    protected $rule = [
        'username'  =>  'require|max:25|min:3',
        'password'  =>  'require|max:25|min:6',
    ];

    protected $message = [
        'username.require'  =>  '管理员名必须存在',
        'username.max'  =>  '管理员名不能超过25个字符',
        'username.min'  =>  '管理员名不能小于3个字符',
        'password.require'  =>  '管理员密码必须存在',
        'password.max'  =>  '管理员密码不能超过25个字符',
        'password.min'  =>  '管理员密码不能小于3个字符',
    ];

    protected $scene = [
        'add'  =>  ['username','password'],
        'edit'  => ['username'],
    ];
}