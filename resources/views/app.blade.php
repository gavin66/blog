<!DOCTYPE html>
<html lang="zh-CN">
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

    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('/plug-in/jQuery-Sidebar/dist/jQuery-Sidebar.min.css') }}">
    <link href="{{ asset('/style/app.css') }}" rel="stylesheet">

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
    <div class="jqsb-container">
        @section('content')

        @show
        <!-- 版权等信息 -->
        <footer class="footer text-center">
            <div class="container">
                <div class="copyright inline" itemscope itemtype="http://www.isgavin.me">
                    ©  2014 -
                    <span itemprop="copyrightYear">2016</span>
                    <a itemprop="copyrightHolder" href="http://www.isgavin.me">Gavin</a>
                </div>
                <span class="dot"></span>
                <div class="record inline" >
                    <a href="http://www.miibeian.gov.cn/" target="_blank">津 ICP 备 15004268 号</a>
                </div>
            </div>
        </footer>
    </div>



    <!-- 侧边栏 -->
    <aside class="jqsb-sidebar jqsb-right">
        <div class="sidebar-inner">
            <section class="site-overview">
                <div class="author motion-element" itemscope itemprop="author" itemtype="http://schema.org/Person">
                    <img class="img-responsive img-thumbnail" src="{{asset('/img/portrait.jpg')}}" alt="Gavin" itemprop="portrait">
                    <p class="author-name" itemprop="name">Gavin</p>
                </div>
                <p class="description motion-element" itemprop="description" >
                    青春是一场大雨。即使感冒了,还盼望回头再淋它一次！
                </p>
                <nav class="state motion-element" >
                    <div class="state-item">
                        <a href="/archives">
                            <span class="state-item-count">55</span>
                            <span class="state-item-name">日志</span>
                        </a>
                    </div>
                    <div class="state-item">
                        <a href="/categories">
                            <span class="state-item-count">5</span>
                            <span class="state-item-name">分类</span>
                        </a>
                    </div>
                </nav>
                {{--<div class="rss motion-element">--}}
                {{--<a href="/atom.xml">RSS</a>--}}
                {{--</div>--}}
                <div class="contact motion-element">
                    <span class="">
                        <a href="https://github.com/gavin66" target="_blank">GitHub</a>
                      </span>
                      <span class="">
                        <a href="https://github.com/gavin66" target="_blank">Twitter</a>
                      </span>
                      <span class="">
                        <a href="https://github.com/gavin66" target="_blank">Facebook</a>
                      </span>
                      <span class="">
                        <a href="https://github.com/gavin66" target="_blank">Google+</a>
                      </span>
                      <span class="">
                        <a href="http://weibo.com/lanbert" target="_blank">Weibo</a>
                      </span>
                      <span class="">
                        <a href="http://www.zhihu.com/people/Gavin23" target="_blank">ZhiHu</a>
                      </span>
                </div>
            </section>
        </div>
    </aside>

    <div class="sidebar-toggle jqsb-toggle-right">
        <span class="glyphicon glyphicon-menu-hamburger"></span>
    </div>
    <div class="back-to-top" style="display: none;">
        <span class="glyphicon glyphicon-triangle-top"></span>
    </div>

    <script src="{{ asset('/plug-in/seajs-3.0.0/dist/sea.js') }}"></script>
    <script src="{{ asset('/script/config/seajs-config.js') }}"></script>
    <script src="{{ asset('/script/app.js') }}" ></script>

    @section('js')

    @show

</body>
</html>