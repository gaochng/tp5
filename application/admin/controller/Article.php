<?php
/**
 * Created by PhpStorm.
 * User: Article
 * Date: 2017/11/7
 * Time: 14:00
 */

namespace app\admin\controller;
use think\Controller;
use think\Db;
use app\admin\model\Article as ArticleModel;
class Article extends Controller
{
    public function index()
    {
        $list = ArticleModel::order('id asc')->paginate(3);
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function add()
    {
        if (!request()->isPost()){
            $data = db('cate')->select();
            $this->assign('data',$data);
            return $this->fetch();
        }else{
            $data= input('');
            $data['state'] = isset($data['state']) ? 1:0;
            $file = request()->file('pic');
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    // 成功上传后 获取上传信息
                    $data['pic'] = DS .'uploads'. DS .$info->getSaveName();
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
            $res = $this->validate($data,'Article.add');
            if ($res!==true){
                $this->error($res,'',2);
            }
            $data['time'] = time();
            $res = db('Article')->insert($data);//写入数据
            //写入数据成功
            if ($res){
                $this->success("添加文章成功",'index',1);
            }else{
                $this->error("添加文章失败",'',2);
            }
        }
    }
    public function edit($id){
        //处理更新操作
        if (request()->isPost()){
            $data= input('');
            $data['state'] = isset($data['state']) ? 1:0;
            $file = request()->file('pic');
            // 移动到框架应用根目录/public/uploads/ 目录下
            if($file){
                $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                if($info){
                    // 成功上传后 获取上传信息
                    $data['pic'] = DS .'uploads'. DS .$info->getSaveName();
                }else{
                    // 上传失败获取错误信息
                    echo $file->getError();
                }
            }
            $res = $this->validate($data,'Article.edit');
            if ($res!==true){
                $this->error($res,'',2);
            }
            $data['time'] = time();
            $res = db('Article')->update($data);//写入数据
            //写入数据成功
            if ($res){
                $this->success("修改文章成功",'index',1);
            }else{
                $this->error("修改文章失败",'',2);
            }
        }else{
           //相应更新,首先输出视图,以及要更新的内容
            $cate = db('cate')->select();
            $this->assign('cate',$cate);
            $data = Db::name('Article')->find($id);
            $this->assign('data',$data);
            return $this->fetch(); 
        }
        
    }
    public function del($id){
        $res = db('Article')->delete($id);
        if ($res){
            $this->success("删除文章成功",'index',1);
        }else{
            $this->error("删除文章失败",'',2);
        }
    }
    //响应ajax更改state状态操作
    public function changeState($id){
        $state = Db::name('article')->field('state')->find($id)['state'];
         // ArticleModel::get($id);
        $state = ( $state == 0 )?1:0;
        $res = Db::name('article')->update(['state' => $state,'id'=>$id]);
        return $res;
    }
}