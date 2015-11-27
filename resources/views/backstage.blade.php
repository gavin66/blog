<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--移动设备优先,为了确保适当的绘制和触屏缩放，需要在 <head> 之中添加 viewport 元数据标签。-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maxmum-scale=1.0,user-scalable=no">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <!-- 在移动设备浏览器上，通过为视口（viewport）设置 meta 属性为 user-scalable=no 可以禁用其缩放（zooming）功能。
    这样禁用缩放功能后，用户只能滚动屏幕，就能让你的网站看上去更像原生应用的感觉。注意，这种方式不推荐所有网站使用，需看情况而定-->
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="博客,个人博客,Gavin的博客,田宇的博客">
    <meta name="description" content="这是田宇(Gavin)的个人网站">
    <!-- Laravel token 存放在 meta 标签中, 然后使用 jQuery 将它加入到所有的请求头中-->
    <meta name="csrf-token" content="{{ csrf_token()}}" />

{{--    <title>@yield('title','Gavin\'s Blog')</title>--}}
    <title>@yield('title','理发师')</title>

    <!-- Bootstrap css-->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/animate.css/3.4.0/animate.min.css" rel="stylesheet">
    {{--<link href="//cdn.bootcss.com/slidebars/0.10.2/slidebars.min.css" rel="stylesheet">--}}
    {{--<link href="{{ asset('/css/site.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('/css/sidebar.css') }}" rel="stylesheet">--}}

    @section('css')

    @show

</head>
<body>
    {{--<div id="pjax-c">--}}

    {{--</div>--}}
    {{--<a href="/master/pjax" target="_blank" id="pjax-a">Pjax</a><br>--}}
    {{--<a href="/master/pjax" target="_blank">重定向</a>--}}
    {{--<button id="animation">动画</button>--}}
    {{--<button id="ajax">异步请求</button>--}}

    {{--<ul class="metismenu" id="menu">--}}
        {{--<li class="active">--}}
            {{--<a href="#" aria-expanded="true">Menu 1</a>--}}
            {{--<ul aria-expanded="true">--}}
                {{--<li>我去1</li>--}}
                {{--<li>我去2</li>--}}
                {{--<li>我去3</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="#" aria-expanded="false">Menu 2</a>--}}
            {{--<ul aria-expanded="false">--}}
                {{--<li>我靠1</li>--}}
                {{--<li>我靠2</li>--}}
                {{--<li>我靠3</li>--}}
            {{--</ul>--}}
        {{--</li>--}}
    {{--</ul>--}}

    <div id="jq-sb-container">
        {{--<button type="button" class="btn btn-info sb-toggle-left" >左开关</button>--}}
        {{--<button type="button" class="btn btn-info sb-toggle-right" >右开关</button>--}}
        <header>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#blog-navbar" aria-expanded="false">
                            <span class="sr-only">导航条开关</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand sb-toggle-left" href="">
                            <span class="glyphicon glyphicon-menu-hamburger"></span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="blog-navbar">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Link</a></li>
                            <li><a href="#" class="sb-toggle-right">设置</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <div class="main"></div>
        <footer></footer>
    </div>

    <div class="jq-sb-slidebar jq-sb-left" >
        <button type="button" class="btn btn-danger" >这不是真的</button>
    </div>

    <div class="jq-sb-slidebar jq-sb-right sb-style-overlay">
        <button type="button" class="btn btn-danger" >这不是真的</button>
    </div>


    <!-- jquery 使用bootstrap等其他框架,插件必须导入的-->
    <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
    <!-- bootstrap的主要js-->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- velocity 动画切换的jQuery插件-->
    <script src="//cdn.bootcss.com/velocity/1.2.2/velocity.min.js"></script>
    {{--<script src="//cdn.bootcss.com/velocity/1.2.2/velocity.ui.min.js"></script>--}}
    <script src="//cdn.bootcss.com/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
    <!--metisMenu jquery插件 下拉菜单 https://github.com/onokumus/metisMenu -->
    {{--<script src="//cdn.bootcss.com/metisMenu/2.2.0/metisMenu.min.js"></script>--}}
    {{--<script src="//cdn.bootcss.com/slidebars/0.10.2/slidebars.min.js"></script>--}}
    <script src="{{ asset('/js/base/config  .js') }}"></script>
    <script src="{{ asset('/js/base/tools.js') }}"></script>
    <script src="{{ asset('/js/base/app.js') }}"></script>
    <script src="{{ asset('/js/base/sidebar.js') }}"></script>
    <!-- angular的主要js-->
    <!--<script src="//apps.bdimg.com/libs/angular.js/1.4.0-beta.4/angular.min.js"></script> -->
    @section('js')

    @show
    <script>
        $(function(){
            $(document).ready(function() {
                $.slidebars({
//                    siteClose:false,
//                    scrollLock:true
                });
            });
        });
//        $(function(){
//            $("#menu").metisMenu({
//                toggle: true,
//                activeClass: 'active1'
//            });
//        });


//        $(document).pjax('#pjax-a', '#pjax-c');
//        $('#animation').click(function(){
//            $('#pjax-a').addClass('animated bounce');
//        });
//        $('#ajax').on('click',function(){
//            $.ajax({
//                url:'/ajax/test',
//                method:'post',
//                dataType:'text',
//                success:function(data){
//                    alert(data);
//                }
//            });
//        });
    </script>
</body>
</html>