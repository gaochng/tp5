<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/7
 * Time: 14:00
 */

namespace app\index\controller;
use think\Controller;

class Article extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}