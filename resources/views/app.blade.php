<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--移动设备优先,为了确保适当的绘制和触屏缩放，需要在 <head> 之中添加 viewport 元数据标签。-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

    <!-- Laravel token 存放在 meta 标签中, 然后使用 jQuery 将它加入到所有的请求头中-->
    <meta name="csrf-token" content="{{ csrf_token()}}" />

    <!-- 在移动设备浏览器上，通过为视口（viewport）设置 meta 属性为 user-scalable=no 可以禁用其缩放（zooming）功能。
        这样禁用缩放功能后，用户只能滚动屏幕，就能让你的网站看上去更像原生应用的感觉。注意，这种方式不推荐所有网站使用，需看情况而定-->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->

{{--    <title>@yield('title','Gavin\'s Blog')</title>--}}
    <title>@yield('title','理发师')</title>


    <!-- Bootstrap css-->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/css/site.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/sidebar.css') }}" rel="stylesheet">

    @section('css')

    @show

</head>
<body>
    <header class="navbar navbar-inverse navbar-fixed-top" id="top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Gavin's Blog</a>
            </div>
            <nav class="collapse navbar-collapse" id="bs-navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">首页</a></li>
                    <li><a href="#">归档</a></li>
                    <li><a href="#">关于我</a></li>
                    <li>
                        <form class="navbar-form navbar-left" role="search" id="">
                            <div class="input-group ">
                                <span class="glyphicon glyphicon-search" id="navbar-searchicon"></span>
                                <input type="text" class="form-control" placeholder="关键字搜索" id="navbar-search">
                            </div>
                        </form>
                    </li>
                    {{--<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">登录</a></li>--}}
                </ul>
            </nav>
        </div>
    </header>

    @section('content')

    @show

    <footer id="footer">
        <div class="container">
            <div class="copyright" itemscope>
                ©  2014 -
                {{--©2015 isgavin.me 备案号:津ICP备15004268号--}}
                <span itemprop="copyrightYear">2015</span>
                <a itemprop="copyrightHolder" href="http://www.isgavin.me">Gavin</a>
            </div>
            <div class="record">
                <a href="http://www.miibeian.gov.cn/" target="_blank">津ICP备15004268号</a>
            </div>
        </div>
    </footer>


    <div class="sidebar-toggle">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
    </div>
    <div class="back-to-top" style="display: none;">
        <span class="glyphicon glyphicon-triangle-top"></span>
    </div>

    <!-- jquery 使用bootstrap等其他框架,插件必须导入的-->
    <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
    <!-- bootstrap的主要js-->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- velocity 动画切换的jQuery插件-->
    <script src="//cdn.bootcss.com/velocity/1.2.2/velocity.min.js"></script>
    {{--<script src="//cdn.bootcss.com/velocity/1.2.2/velocity.ui.min.js"></script>--}}

    <script src="{{ asset('/js/base/config.js') }}"></script>
    <script src="{{ asset('/js/base/tools.js') }}"></script>
    <script src="{{ asset('/js/base/app.js') }}"></script>
    <script src="{{ asset('/js/base/sidebar.js') }}"></script>
    <!-- angular的主要js-->
    <!--<script src="//apps.bdimg.com/libs/angular.js/1.4.0-beta.4/angular.min.js"></script> -->
    @section('js')

    @show
</body>
</html>