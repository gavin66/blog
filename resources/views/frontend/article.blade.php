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
                    <li><a href="#">关于我</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- 巨幕 -->
    <div class="jumbotron jumbotron-blue">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8">
                    <h1>{{ $title }}</h1>
                    <p><span class="invisible">空格</span>Markdown 写的表格最终会被解析成 HTML 代码，如果使用的编辑器支持自定义 CSS，就能方便的调整样式。
                        如果可以引入 JavaScript，样式自适应也能较好地实现。</p>
                    <ul class="list-inline">
                        <li><i class="fa fa-book"></i>分类</li>
                        <li>
                        <i class="fa fa-tag"></i>
                            <ul class="list-inline inline">
                            <li>标签一</li>
                            <li>标签二</li>
                            <li>标签三</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- 文章详细 -->
    <section class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <!-- editor.md预览 start-->
                <div id="markdown-view">
                    <textarea style="display:none;" id="markdown-text">{{ $content_md }}</textarea>
                </div>
                <!-- editor.md end-->

                <!-- 多说分享 start -->
                <div class="ds-share-custom">
                    <div class="share-to-c">
                        <span class="line"></span>
                        <span class="text">分享到</span>
                    </div>
                    <div class="ds-share share-button-c" data-thread-key="此处请替换为当前文章的thread-key" data-title="此处请替换为分享时显示的标题" data-images="此处请替换为分享时显示的图片的链接地址" data-content="此处请替换为分享时显示的内容" data-url="此处请替换为分享时显示的链接地址">
                        <a class="fa fa-weibo share-icon share-icon-weibo" title="新浪微博" data-service="weibo"></a>
                        <a class="fa fa-tencent-weibo share-icon share-icon-tweibo" title="腾讯微博" data-service="qqt"></a>
                        <a class="fa fa-weixin share-icon share-icon-weixin" title="微信" data-service="wechat"></a>
                        <a class="fa fa-qq share-icon share-icon-qq" title="QQ" data-service="qq"></a>
                        <a class="fa fa-renren share-icon share-icon-renren" title="人人" data-service="renren"></a>

                        <a class="iconfont icon-douban share-icon share-icon-douban" title="豆瓣"  data-service="douban"></a>
                        <a class="iconfont icon-baidu share-icon share-icon-baidu" title="百度" data-service="baidu"></a>
                        <a class="iconfont icon-youdao share-icon share-icon-youdao" title="有道云笔记"  data-service="youdao"></a>

                        <a class="fa fa-google-plus share-icon share-icon-google-plus" title="Google+" data-service="google"></a>
                        <a class="fa fa-facebook share-icon share-icon-facebook" title="Facebook" data-service="facebook"></a>
                        <a class="fa fa-twitter share-icon share-icon-twitter" title="Twitter" data-service="twitter"></a>
                        <a class="fa fa-linkedin share-icon share-icon-linkedin" titile="LinkedIn" data-service="linkedin"></a>
                    </div>
                </div>
                <i class=""></i>

                <!-- 多说分享 end -->

                <!-- 多说评论框 start -->
                <div class="ds-thread" data-thread-key="{{ $id }}" data-title="{{ $title }}" data-url="/article/{{ $id }}"></div>
                <!-- 多说评论框 end -->

            </div>
            <div class="col-md-3 hidden-xs hidden-sm">
                <div id="markdown-toc">#custom-toc-container</div>
            </div>
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
    <script src="{{ asset('/script/frontend/article.js') }}" ></script>


</body>
</html>