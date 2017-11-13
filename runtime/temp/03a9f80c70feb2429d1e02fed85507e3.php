<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"E:\php\tp5demo\public/../application/admin\view\article\edit.html";i:1510555511;s:66:"E:\php\tp5demo\public/../application/admin\view\common\layout.html";i:1510557503;s:66:"E:\php\tp5demo\public/../application/admin\view\common\header.html";i:1510041876;s:64:"E:\php\tp5demo\public/../application/admin\view\common\left.html";i:1510467257;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__PUBLIC__style/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__style/font-awesome.css" rel="stylesheet">
    <link href="__PUBLIC__style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="__PUBLIC__style/beyond.css" rel="stylesheet" type="text/css">
    <link href="__PUBLIC__style/demo.css" rel="stylesheet">
    <link href="__PUBLIC__style/typicons.css" rel="stylesheet">
    <link href="__PUBLIC__style/animate.css" rel="stylesheet"> 
    <link href="__PUBLIC__style/file.css" rel="stylesheet"> 


    <!--Basic Scripts-->
    <script src="__PUBLIC__js/jquery_002.js"></script>
    <script src="__PUBLIC__js/bootstrap.js"></script>
    <script src="__PUBLIC__js/jquery.js"></script>
    <script src="__PLUGIN__ueditor/ueditor.config.js"></script>
    <script src="__PLUGIN__ueditor/ueditor.all.min.js"></script>
</head>
<body>
    <!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="__PUBLIC__images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="__PUBLIC__images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span>admin</span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/logout.html">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="/admin/user/changePwd.html">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

<!-- /头部 -->

<div class="main-container container-fluid">
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/admin/index'); ?>">
                                    <span class="menu-text">
                                        管理员列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-list"></i>
                <span class="menu-text">栏目管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/cate/index'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文档</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/article/index'); ?>">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-link"></i>
                <span class="menu-text">友情链接</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('admin/links/index'); ?>">
                                    <span class="menu-text">
                                        友情链接列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- /Sidebar Menu -->
</div>

        <!-- /Page Sidebar -->
        <!-- Page Content -->
<div class="page-content">
    <!-- Page Breadcrumb -->
    <div class="page-breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <a href="#">系统</a>
            </li>
            <li>
                <a href="#">文章管理</a>
            </li>
            <li class="active">修改文章</li>
        </ul>
    </div>
    <!-- /Page Breadcrumb -->

    <!-- Page Body -->
    <div class="page-body">

        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-header bordered-bottom bordered-blue">
                        <span class="widget-caption">修改文章</span>
                    </div>
                    <div class="widget-body">
                        <div id="horizontal-form">
                            <form class="form-horizontal" enctype="multipart/form-data" role="form" action="" method="post">
                                <input type="hidden" value="<?php echo $data['id']; ?>" name="id">
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">标题</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="title" placeholder="" name="title" required="" type="text" value="<?php echo $data['title']; ?>">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">作者</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="author" placeholder="" name="author" required="" type="text" value="<?php echo $data['author']; ?>">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">介绍</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="desc" placeholder="" name="desc" required="" type="text" value="<?php echo $data['desc']; ?>">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">关键字</label>
                                    <div class="col-sm-6">
                                        <input class="form-control" id="keywords" placeholder="" name="keywords" required="" type="text" value="<?php echo $data['keywords']; ?>">
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group" style="margin-bottom: 0px;">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">缩略图</label>
                                    <div class="col-sm-6" style="line-height: 65px;">
                                        <a href="javascript:;" class="a-file">选择文件
                                              <input type="file" name="pic" id="" onchange="showPreview(this)">
                                        </a>
                                        <img id="portrait" 
                                            <?php if($data['pic'] == ''): ?>
                                                src="__PUBLIC__images/error.png"
                                            <?php else: ?>
                                                src="<?php echo $data['pic']; ?>" 
                                            <?php endif; ?>
                                         style="height: 65px; margin-left: 20px; ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="state" class="col-sm-2 control-label no-padding-right">推荐</label>
                                    <div class="col-sm-6" style="height: 30px; padding-top: 8px;">
                                        

                                        <?php if($data['state'] == '1'): ?>
                                            <input class="checkbox-slider colored-darkorange" type="checkbox" name="state" checked="checked" >
                                        <?php else: ?>
                                            <input class="checkbox-slider colored-darkorange" type="checkbox" name="state" >
                                        <?php endif; ?>

                                        
                                        <span class="text"></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label  class="col-sm-2 control-label no-padding-right">栏目</label>
                                    <div class="col-sm-6">
                                        <select name="cateid">
                                        <option value="">请选择</option>
                                            <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if($data['cateid'] == $vo['id']): ?>
                                                    <option selected="selected" value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                                                <?php else: ?>
                                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?></option>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                        <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right">内容</label>
                                    <div class="col-sm-6">
                                        <textarea name="content" id="content"><?php echo $data['content']; ?></textarea>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>

                                
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">保存信息</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /Page Body -->
</div>
<!-- /Page Content -->
<script type="text/javascript">
    
    //ueditor的使用
    var ue = UE.getEditor('content',{initialFrameWidth:'100%',});
</script>
    </div>
</div>


<!--Beyond Scripts-->
<script src="__PUBLIC__js/beyond.js"></script>
<!-- ueditor -->


<script type="text/javascript">



    //文章缩略图,实时显示
    function showPreview(source){
        var file = source.files[0];  
        var fr = new FileReader();  
        fr.onloadend = function(e) {  
            document.getElementById("portrait").src = e.target.result;  
        };  
        fr.readAsDataURL(file); 
    }

    
    
</script>

</body>
</html>