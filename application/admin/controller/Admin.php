<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/11/7
 * Time: 14:00
 */

namespace app\admin\controller;
use think\Controller;
use think\Db;

class Admin extends Controller
{
    public function index()
    {
        //分页
        $list = Db::name('admin')->order('id asc')->paginate(5);
        // 把分页数据赋值给模板变量list
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function add()
    {
        if (!request()->isPost()){
            return $this->fetch();
        }else{
            $data= input();
            $res = $this->validate($data,'Admin.add');
            if ($res!==true){
                $this->error($res,'',2);
            }
            $data['password'] = md5($data['password']);
            $res = db('admin')->insert($data);//写入数据
            //写入数据成功
            if ($res){
                $this->success("添加管理员成功",'index',1);
            }else{
                $this->error("添加管理员失败",'',2);
            }
        }
    }
    public function edit($id){
        //处理更新操作
        if (request()->isPost()){
            $data = input();
            //首先验证用户名是否符合要求
            $res = $this->validate($data,'Admin.edit');
            if ($res!==true){
                $this->error($res,'',2);
            }
            //如果密码字符串为空
            if (strlen($data['password'])==0){
                //删除数组 password 元素
                unset($data['password']);
            }else{
                //需要验证更新的密码
                $res = $this->validate(
                    [
                        'password'  => $data['password'],
                    ],
                    [
                        'password'  => 'min:6|max:25',
                    ]);
                if(true !== $res){
                    // 验证失败 输出错误信息
                    $this->error($res,'',2);
                }
                //密码验证通过,使用md5加密存入data数组
                $data['password'] = md5($data['password']);
            }
            //存入数据库
            $res = db('admin')->update($data);
            if ($res){
                $this->success("更新管理员成功",'index',1);
            }else{
                $this->error("更新管理员失败",'',2);
            }
        }
        //相应更新,首先输出视图,以及要更新的内容
        $data = Db::name('admin')->find($id);
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function del($id){
        $res = db('admin')->delete($id);
        if ($res){
            $this->success("删除管理员成功",'index',1);
        }else{
            $this->error("删除管理员失败",'',2);
        }
    }
}