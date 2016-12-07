<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>酒店后台管理</title>
    <link rel="stylesheet" type="text/css" href="/hotelms/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/hotelms/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/hotelms/Public/admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="<?php echo U('Admin/index/index');?>" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Admin/index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Home/index/index');?>" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>客房管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/room/index');?>"><i class="icon-font">&#xe008;</i>所有客房</a></li>
                        <li><a href="<?php echo U('Admin/room/create');?>"><i class="icon-font">&#xe005;</i>添加客房</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>客房分类管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/category/index');?>"><i class="icon-font">&#xe017;</i>所有分类<li><a href="<?php echo U('Admin/category/create');?>"><i class="icon-font">&#xe037;</i>添加分类</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/news/index');?>"><i class="icon-font">&#xe017;</i>所有新闻<li><a href="<?php echo U('Admin/news/create');?>"><i class="icon-font">&#xe037;</i>添加新闻</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>商务会议管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/meet/index');?>"><i class="icon-font">&#xe017;</i>所有会议<li><a href="<?php echo U('Admin/meet/create');?>"><i class="icon-font">&#xe037;</i>添加会议</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    
 <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allCategorys.html">客房分类管理</a><span class="crumb-step">&gt;</span><span>编辑客房分类</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/category/update');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                                <th><i class="require-red">*</i>类型：</th>
                                <td>
                                    <input class="common-text required" id="thumb" name="catname" size="50" value="<?php echo ($category["catname"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>价格：</th>
                                <td>
                                    <input class="common-text required" id="price" name="price" size="50" value="<?php echo ($category["price"]); ?>" type="text">元
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td>
                                <img src="/hotelms/Public/<?php echo ($category["thumb"]); ?>" />
                                <input name="thumb" id="" type="file"><!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>--></td>
                            </tr>
                            <tr>
                                <th width="120"><i class="require-red">*</i>早餐：</th>
                                <td>
                                    <input type="radio" value="1" name="broadcast" checked="checked" />有   &nbsp; &nbsp; &nbsp; &nbsp;
                                    <input type="radio" value="0" name="broadcast" checked="checked" />无
                                </td>
                            </tr>
                            <tr>
                                <th width="120"><i class="require-red">*</i>宽带：</th>
                                <td>
                                    <input type="radio" value="1" name="wifi" checked="checked" />有   &nbsp; &nbsp; &nbsp; &nbsp;
                                    <input type="radio" value="0" name="wifi" checked="checked" />无
                                </td>
                            </tr>
                            
                            <tr>
                                <th>备注：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"><?php echo ($category["content"]); ?></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                <input type="hidden" value="<?php echo ($category["id"]); ?>" name="id">
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
    <!--/main-->
</div>
</body>
</html>