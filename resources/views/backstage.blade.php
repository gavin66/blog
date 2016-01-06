<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--移动设备优先,为了确保适当的绘制和触屏缩放，需要在 <head> 之中添加 viewport 元数据标签。-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <!-- 在移动设备浏览器上，通过为视口（viewport）设置 meta 属性为 user-scalable=no 可以禁用其缩放（zooming）功能。
    这样禁用缩放功能后，用户只能滚动屏幕，就能让你的网站看上去更像原生应用的感觉。注意，这种方式不推荐所有网站使用，需看情况而定-->
    <meta name="renderer" content="webkit">
    <meta name="keywords" content="博客,个人博客,Gavin的博客,田宇的博客">
    <meta name="description" content="这是田宇(Gavin)的个人网站">
    <!-- Laravel token 存放在 meta 标签中, 然后使用 jQuery 将它加入到所有的请求头中-->
    <meta name="csrf-token" content="{{ csrf_token()}}" />

{{--    <title>@yield('title','Gavin\'s Blog')</title>--}}
    <title>@yield('title','Gavin\'blog')</title>

    <!-- Bootstrap css-->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/animate.css/3.4.0/animate.min.css" rel="stylesheet">
    {{--<link href="{{ asset('/css/site.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ asset('/css/sidebar.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('/plug-in/jQuery-Sidebar/dist/jQuery-Sidebar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/backstage.main.css') }}" >

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

    <div class="jqsb-container">
        <header>
            <nav class="navbar navbar-site">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#blog-navbar" aria-expanded="false">
                            <span class="sr-only">导航条开关</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand jqsb-toggle-left " href="#">
                            <span class="glyphicon glyphicon-arrow-left"></span>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="blog-navbar">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="站内搜索">
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">消息通知</a></li>
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
        <div class="main">

        </div>
        <footer></footer>
    </div>

    <div class="jqsb-sidebar jqsb-left">
        <div class="jqsb-left-sm">
            <ul class="sm-item-list">
                <li class="personal-icon"><a href="#"><img src="/img/test/iconfont-pic.png" alt="图标"></a></li>
                <li><a href="#" data-toggle="tooltip" data-trigger="hover" data-placement="right" title="文章" data-container=".sidebar-tooltip"><i class="glyphicon glyphicon-book"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="right" title="多媒体" data-container=".sidebar-tooltip"><i class="glyphicon glyphicon-film"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="right" title="评论" data-container=".sidebar-tooltip"><i class="glyphicon glyphicon-comment"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="right" title="外观" data-container=".sidebar-tooltip"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="right" title="用户" data-container=".sidebar-tooltip"><i class="glyphicon glyphicon-user"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="right" title="工具" data-container=".sidebar-tooltip"><i class="glyphicon glyphicon-th-list"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="right" title="设置" data-container=".sidebar-tooltip"><i class="glyphicon glyphicon-cog"></i></a></li>
            </ul>
        </div>
        <div class="jqsb-left-bg">
            <ul class="metismenu" id="metisMenu">
                <li class="user-info">
                    <img class="user-portrait img-rounded" src="http://7xp2cl.com1.z0.glb.clouddn.com/portrait%20200x200.jpg" alt="头像">
                    <div class="user-info-dropdown">
                        <a class="dropdown-toggle cancelDefault" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="user-name block">Gavin</span>
                            <span class="user-role block">超级管理员<span class="caret"></span></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInLeft20">
                            <li><a href="#">修改头像</a></li>
                            <li><a href="#">个人资料</a></li>
                            <li><a href="#">信箱</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">退出</a></li>
                        </ul>
                    </div>
                </li>
                <li class="active">
                    <a class="item-link" href="#" aria-expanded="true">
                        <i class="glyphicon glyphicon-book" aria-hidden="true"></i>
                        <span class="">文章</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="item-list" aria-expanded="true">
                        <li><a href="/article/lists">文章列表</a></li>
                        <li><a href="#">写文章</a></li>
                        <li><a href="#">分类</a></li>
                        <li><a href="#">标签</a></li>
                    </ul>
                </li>
                <li>
                    <a class="item-link" href="#" aria-expanded="false">
                        <i class="glyphicon glyphicon-film" aria-hidden="true"></i>
                        <span>多媒体</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="item-list" aria-expanded="false">
                        <li><a href="#">多媒体1</a></li>
                        <li><a href="#">多媒体2</a></li>
                        <li><a href="#">多媒体3</a></li>
                    </ul>
                </li>
                <li>
                    <a class="item-link" href="#" aria-expanded="false">
                        <i class="glyphicon glyphicon-comment" aria-hidden="true"></i>
                        <span>评论</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="item-list" aria-expanded="false">
                        <li><a href="#">评论1</a></li>
                        <li><a href="#">评论2</a></li>
                        <li><a href="#">评论3</a></li>
                    </ul>
                </li>
                <li>
                    <a class="item-link" href="#" aria-expanded="false">
                        <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                        <span>外观</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="item-list" aria-expanded="false">
                        <li><a href="#">外观1</a></li>
                        <li><a href="#">外观2</a></li>
                        <li><a href="#">外观3</a></li>
                    </ul>
                </li>
                <li>
                    <a class="item-link" href="#" aria-expanded="false">
                        <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                        <span>用户</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="item-list" aria-expanded="false">
                        <li><a href="#">用户1</a></li>
                        <li><a href="#">用户2</a></li>
                        <li><a href="#">用户3</a></li>
                    </ul>
                </li>
                <li>
                    <a class="item-link" href="#" aria-expanded="false">
                        <i class="glyphicon glyphicon-th-list" aria-hidden="true"></i>
                        <span>工具</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="item-list" aria-expanded="false">
                        <li><a href="#">工具1</a></li>
                        <li><a href="#">工具2</a></li>
                        <li><a href="#">工具3</a></li>
                    </ul>
                </li>
                <li>
                    <a class="item-link" href="#" aria-expanded="false">
                        <i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
                        <span>设置</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul class="item-list" aria-expanded="false">
                        <li><a href="#">设置1</a></li>
                        <li><a href="#">设置2</a></li>
                        <li><a href="#">设置3</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    {{--<div class="jqsb-sidebar jqsb-right">--}}
        {{--<button type="button" class="btn btn-danger">测试元素</button>--}}
    {{--</div>--}}

    {{--侧边栏的工具提示层--}}
    <div class="sidebar-tooltip"></div>

    <!-- jquery 使用bootstrap等其他框架,插件必须导入的-->
    <script src="//cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
    <!-- bootstrap的主要js-->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- velocity 动画切换的jQuery插件-->
    <script src="//cdn.bootcss.com/velocity/1.2.2/velocity.min.js"></script>
    {{--<script src="//cdn.bootcss.com/velocity/1.2.2/velocity.ui.min.js"></script>--}}
    <script src="//cdn.bootcss.com/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
    <!--metisMenu jquery插件 下拉菜单 https://github.com/onokumus/metisMenu -->
    {{--<script src="{{ asset('/js/base/config  .js') }}"></script>--}}
    {{--<script src="{{ asset('/js/base/tools.js') }}"></script>--}}
    {{--<script src="{{ asset('/js/base/app.js') }}"></script>--}}
    {{--<script src="{{ asset('/js/base/sidebar.js') }}"></script>--}}
    <script src="{{ asset('/plug-in/jQuery-Sidebar/dist/jQuery-Sidebar.js') }}"></script>
    <script src="//cdn.bootcss.com/metisMenu/2.2.0/metisMenu.min.js"></script>
    <!-- angular的主要js-->
    <!--<script src="//apps.bdimg.com/libs/angular.js/1.4.0-beta.4/angular.min.js"></script> -->
    @section('js')

    @show
    <script>
        $(function(){
            var jqSidebar = new $.jqSidebar({
                leftMode: 'sidebar-turn',
//                leftTurnShow: 'jqsb-left-sm',
                autoClose: false
            });

            $('#metisMenu').metisMenu();

            $('[data-toggle="tooltip"]').tooltip();
            $('[data-toggle="popover"]').popover();

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
        });
    </script>
</body>
</html>