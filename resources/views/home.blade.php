@extends('app')

@section('content')
    <div class="container content">
        <div class="">
            <section class="">
                <article class="bulletin" itemscope itemtype="" >
                    <header class="bulletin-header">
                        <h1 class="bulletin-title"><a class="post-title-link" itemprop="url" href="">国行Surface Pro 4上手体验：值不值得买？</a></h1>
                        <div class="bulletin-meta">
                            <span class="post-time">发表于<time itemscope="dateCreated" datetime="2015-05-15T22:48:56+08:00" content="2015-09-13">2015-09-13</time></span>
                            <span class="post-category">分类于<span itemscope itemtype="" itemprop="about"><a href="" itemprop="url" rel="index"><span itemprop="name">读书笔记</span></a></span></span>
                            <span class="post-comments-count"><a href="" itemprop="discussionUrl"><span class="post-comments-count" itemprop="commentsCount">3条评论</span></a></span>
                        </div>
                    </header>
                    <div class="bulletin-body">
                        <p class="description" itemprop="description">
                            周五微软带领一些IT记者去北京望京的微软大厦，去体验了一下即将正式对外开售的SurfacePro4。这款机器是微软10月6日新品发布会之后，最早能够向中国用户发出的产品。虽然说中国用户没有美国那样幸运，Surface Pro4带有指纹的键盘盖和Surface book都没有办法在中国大陆首发，但是相对世界其他地方来说，中国已经是足够幸运的地方。应该说中国是第一批参与Surface Pro4首发的国家和地区之一。
                        </p>
                        <div class="bulletin-link-full">
                            <a class="" href="" rel="contents">阅读全文 »</a>
                        </div>
                    </div>
                </article>
            </section>
            <nav class="paging">
                <a class="prev pull-left" rel="prev" href="#" ><span class="glyphicon glyphicon-chevron-left"></span></a>
                <span class="page-number current">1</span>
                <a class="page-number" href="#">2</a>
                <span class="space">…</span>
                <a class="page-number" href="#">7</a>
                <a class="next pull-right" rel="next" href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </nav>
        </div>
        <aside id="sidebar" class="sidebar" data-status="closed">
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
    </div>
@stop

@section('js')
    <script src="//cdn.bootcss.com/jquery-validate/1.14.0/jquery.validate.min.js"></script>
    <script src="{{ asset('/js/lib/messages_zh.min.js') }}"></script>
    <script type="text/javascript">
        $(function(){
            //初始化表单验证
//            loginValidator.init();
        });

        //表单验证
        var loginValidator = function() {
            var handleSubmit = function() {
                $('#form-login').validate({
                    debug:true,
                    errorElement : 'span',
                    errorClass : 'help-block',
                    focusInvalid : false,
                    rules : {
                        email : {
                            required : true
                        },
                        password : {
                            required : true
                        }
                    },
//                        messages : {
//                            email : {
//                                required : "Username is required."
//                            },
//                            password : {
//                                required : "Password is required."
//                            }
//                        },
                    highlight : function(element) {
                        $(element).closest('.form-group').addClass('has-error');
                    },
                    success : function(element) {
                        $(element).closest('.form-group').removeClass('has-error');
                        $(element).remove();
                    },
                    errorPlacement : function(error, element) {
                        element.parent('div').append(error);
                    },
                    submitHandler : function(form) {
                        $.post("auth/login",gApp.getFormParams($('#form-login')),function(data){
                            alert(data);
                        },"text");
                    }
                });

                $('#form-login input').keypress(function(event) {
                    if (event.which == 13) {
                        if ($('#form-login').validate().form()) {
                            $('#form-login').submit();
                        }
                        return false;
                    }
                });

                $('#login_commit').click(function(){
                    $('#form-login').submit();
                });
            }
            return {
                init : function() {
                    handleSubmit();
                }
            };

        }();
    </script>
@stop