<!DOCTYPE html>
<html lang="zh-CN" class="theme-default">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--移动设备优先,为了确保适当的绘制和触屏缩放，需要在 <head> 之中添加 viewport 元数据标签。-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="博客,个人博客,Gavin的博客">
    <meta name="description" content="这是Gavin的个人博客">
    <!-- Laravel token 存放在 meta 标签中, 然后使用 jQuery 将它加入到所有的请求头中-->
    <meta name="csrf-token" content="{{ csrf_token()}}" />
    <!-- 在移动设备浏览器上，通过为视口（viewport）设置 meta 属性为 user-scalable=no 可以禁用其缩放（zooming）功能。
        这样禁用缩放功能后，用户只能滚动屏幕，就能让你的网站看上去更像原生应用的感觉。注意，这种方式不推荐所有网站使用，需看情况而定-->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->

    <title>@yield('title','Gavin\' Blog')</title>

    <link rel="stylesheet" href="{{ asset('/plug-in/bootstrap-3.3.5/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plug-in/font-awesome-4.5.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/plug-in/APlayer-master/dist/APlayer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/style/app.css') }}" >

    {{--<link rel="stylesheet" href="{{ asset('/plug-in/editor.md-1.5.0/css/editormd.min.css') }}" >--}}
    {{--<link rel="stylesheet" href="{{ asset('/style/frontend/duoshuo.css') }}" >--}}

</head>
<body style="position: relative;">

<!-- 导航栏 -->
<header class="navbar navbar-white navbar-static-top" id="top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <nav class="collapse navbar-collapse" id="bs-navbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/') }}">首页</a></li>
                <li><a href="#">分类</a></li>
                <li><a href="#">归档</a></li>
                <li><a href="{{ url('/about') }}">关于</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- 巨幕 -->
<div class="jumbotron jumbotron-green">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <h1>About</h1>
            </div>
        </div>
    </div>
</div>

<!-- 关于我 详细信息 -->
<section class="container">
    <div class="row">
        <section class="col-xs-12 col-md-8">
            <!-- editor.md预览 start-->
            <article class="box-shadow" id="markdown-view" >
                <textarea style="display:none;" id="markdown-text">{{ $content_md }}</textarea>
            </article>
            <!-- editor.md end-->

            <!-- 多说评论框 start -->
            <div class="ds-thread" data-thread-key="{{ $id }}" data-title="{{ $title }}" data-url="/article/{{ $id }}"></div>
            <!-- 多说评论框 end -->
        </section>
        <section class="col-md-4 hidden-xs hidden-sm">
            <div class="profile box-shadow">
                <table>
                    <tr>
                        <td><img class="user-portrait img-rounded img-responsive" src="http://7xp2cl.com1.z0.glb.clouddn.com/portrait%20200x200.jpg" alt="头像"></td>
                        <td><span>宁愿小众,不愿平庸</span></td>
                    </tr>
                </table>
                <div class="social text-center">
                    <a class="fa fa-weibo share-icon share-icon-weibo" id="ds-reset" title="新浪微博"></a>
                    <a class="fa fa-tencent-weibo share-icon share-icon-tweibo" id="ds-reset" title="腾讯微博"></a>
                    <a class="fa fa-weixin share-icon share-icon-weixin" id="ds-reset" title="微信"></a>
                    <a class="fa fa-qq share-icon share-icon-qq" id="ds-reset" title="QQ"></a>
                    <a class="fa fa-renren share-icon share-icon-renren" id="ds-reset" title="人人"></a>

                    {{--<a class="iconfont icon-douban share-icon share-icon-douban" id="ds-reset" title="豆瓣"></a>--}}
                    {{--<a class="iconfont icon-baidu share-icon share-icon-baidu" id="ds-reset" title="百度"></a>--}}
                    {{--<a class="iconfont icon-youdao share-icon share-icon-youdao" id="ds-reset" title="有道云笔记"></a>--}}

                    <a class="fa fa-google-plus share-icon share-icon-google-plus" id="ds-reset" title="Google+"></a>
                    <a class="fa fa-facebook share-icon share-icon-facebook" id="ds-reset" title="Facebook"></a>
                    <a class="fa fa-twitter share-icon share-icon-twitter" id="ds-reset" title="Twitter"></a>
                    {{--<a class="fa fa-linkedin share-icon share-icon-linkedin" id="ds-reset" title="LinkedIn"></a>--}}
                </div>
            </div>

            <div class="music-player box-shadow">
                <div id="aPlayer" class="aplayer"></div>
            </div>

            <div class="popular box-shadow">
                <p class="p-label inline-block">最热门文章</p>
                <ul class="list-unstyled">
                    <li><a href="www.baidu.com">EasyGoAgent — 开箱即用的GoAgent</a> - 120,314 次围观</li>
                    <li><a href="www.baidu.com">huhamhire-hosts — Hosts文件自动配置工具</a> - 94,951 次围观</li>
                    <li><a href="www.baidu.com">GoGo Tester—复活你的GoAgent</a> - 94,382 次围观</li>
                    <li><a href="www.baidu.com">留言板</a> - 61,003 次围观</li>
                    <li><a href="www.baidu.com">关于</a> - 22,999 次围观</li>
                    <li><a href="www.baidu.com">读者墙</a> - 12,706 次围观</li>
                </ul>
            </div>
            <div class="like-me box-shadow text-center">
                <i class="fa fa-heart" aria-hidden="true"></i> 6666
            </div>
        </section>
    </div>
</section>

<!-- 版权等信息 -->
<footer class="container text-center">
    <div class="row">
        <div class="col-xs-12">
            <ul class="app-footer list-inline small">
                <li>Copyright© 2014 - 2016 </li>
                <li class="padding-null">·</li>
                <li>Gavin's Blog</li>
                <li class="padding-null">·</li>
                <li>Designed by <a itemprop="copyrightHolder" href="http://www.isgavin.me">Gavin</a></li>
                <li class="padding-null">·</li>
                <li><a href="http://www.miibeian.gov.cn/" target="_blank">津 ICP 备 15004268 号</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- 返回顶端 -->
<div class="back-to-top" style="display: none;">
    <span class="fa fa-chevron-up"></span>
</div>

<!-- 加载JS -->
<script src="{{ asset('/plug-in/editor.md-1.5.0/lib/raphael.min.js') }}"></script>
<script src="{{ asset('/plug-in/seajs-3.0.0/dist/sea.js') }}"></script>
<script src="{{ asset('/script/config/seajs-config.js') }}"></script>

<script src="{{ asset('/script/app.js') }}" ></script>
<script src="{{ asset('/script/frontend/about.js') }}" ></script>

</body>
</html>