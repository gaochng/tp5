<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/7
 * Time: 14:00
 */

namespace app\admin\controller;
use think\Controller;

class Admin extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function add()
    {
        if (!request()->isPost()){
            return $this->fetch();
        }else{
            $data= input('');
            $res = $this->validate($data,'Admin.add');
            if ($res!==true){
                $this->error($res,'',2);
            }
            $data['password'] = md5($data['password']);
            $res = db('admin')->insert($data);//写入数据
            //写入数据成功
            if ($res){
                $this->success("添加管理员成功",'index',2);
            }else{
                $this->error("添加管理员失败",'',2);
            }
        }
    }
}