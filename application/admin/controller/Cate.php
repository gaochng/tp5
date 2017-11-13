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

class Cate extends Controller
{
    public function index()
    {
        //分页
        $list = Db::name('cate')->order('id asc')->paginate(5);
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
            //验证数据是否符合规定
            $res = $this->validate($data,'cate.add');
            if(true !== $res){
                // 验证失败 输出错误信息
                $this->error($res,'',2);
            }
            $res = db('cate')->insert($data);//写入数据
            //写入数据成功
            if ($res){
                $this->success("添加栏目成功",'index',1);
            }else{
                $this->error("添加栏目失败",'',2);
            }
        }
    }
    public function edit($id){
        //处理更新操作
        if (request()->isPost()){
            $data = input();
            //验证数据是否符合规定
            $res = $this->validate($data,'cate.edit');
            if ($res!==true){
                $this->error($res,'',2);
            }
            //存入数据库
            $res = db('cate')->update($data);
            if ($res){
                $this->success("更新栏目成功",'index',1);
            }else{
                $this->error("更新栏目失败",'',2);
            }
        }
        //相应更新,首先输出视图,以及要更新的内容
        $data = Db::name('cate')->find($id);
        $this->assign('data',$data);
        return $this->fetch();
    }
    public function del($id){
        $res = db('cate')->delete($id);
        if ($res){
            $this->success("删除栏目成功",'index',1);
        }else{
            $this->error("删除栏目失败",'',2);
        }
    }
}