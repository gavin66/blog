@extends('app')

@section('content')
    <div class="container wrap-main" id="test">
        <div class="row">
            <section class="col-sm-9">
                @foreach($rows as $v)
                    <article class="article-list-entry box-shadow">
                        <header class="article-list-header">
                            <h3 class="title font-serif">
                                <a class="post-title-link" itemprop="url" href="/article/{{ $v['id'] }}">{{ $v['title'] }}</a>
                                <small class="time">
                                    <i class="fa fa-calendar"></i>
                                    {{ $v['created_at'] }}
                                </small>
                            </h3>
                        </header>
                        <div class="article-list-content">
                            <p></p>
                            <p><span class="invisible">空格</span>{{$v['outline']}}</p>
                        </div>
                        <div class="article-list-footer">
                            <div class="category inline-block">
                                <a href="" class="tag-piece tag-piece-LightPink">程序</a>
                                <a href="" class="tag-piece tag-piece-sauce">生活</a>
                                <a href="" class="tag-piece tag-piece-swarthy">人生</a>
                            </div>
                            <div class="tag inline-block">
                                <a href="" class="tag-piece tag-piece-conifer">Javascript</a>
                                <a href="" class="tag-piece tag-piece-RedGold">HTML</a>
                                <a href="" class="tag-piece tag-piece-ultramarine">Node</a>
                                <a href="" class="tag-piece tag-piece-ink">Node</a>
                                <a href="" class="tag-piece tag-piece-amber">Node</a>
                            </div>
                            <div class="more pull-right">
                                <a class="wm-label vm-label-scale wm-label-default" href="/article/{{ $v['id'] }}">More>></a>
                            </div>
                        </div>
                    </article>
                @endforeach
                <nav>
                    <ul class="pagination pagination-sm">
                        <li class="disabled">
                            <a href="" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="active"><a href="">1</a></li>
                        <li><a href="javascript:return false;">2</a></li>
                        <li><a >3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </section>
            <section class="col-sm-3">
                <div class="sidebar-chunk box-shadow">
                    <p class="sc-label inline-block">最热门文章</p>
                    <ul class="list-unstyled">
                        <li><a href="www.baidu.com">开箱即用的GoAgent</a> - 120,314 次围观</li>
                        <li><a href="www.baidu.com">Hosts文件自动配置工具</a> - 94,951 次围观</li>
                        <li><a href="www.baidu.com">复活你的GoAgent</a> - 94,382 次围观</li>
                        <li><a href="www.baidu.com">留言板</a> - 61,003 次围观</li>
                        <li><a href="www.baidu.com">关于</a> - 22,999 次围观</li>
                        <li><a href="www.baidu.com">读者墙</a> - 12,706 次围观</li>
                    </ul>
                </div>
                <div class="sidebar-chunk article-category box-shadow">
                    <p class="sc-label inline-block">归档</p>
                    <ul class="list-unstyled font-serif">
                        <li><a href="">javascript</a></li>
                        <li><a href="">css</a></li>
                        <li><a href="">php</a></li>
                        <li><a href="">java</a></li>
                        <li><a href="">js</a></li>
                    </ul>
                </div>
                <div class="sidebar-chunk article-category box-shadow">
                    <p class="sc-label inline-block">分类</p>
                    <ul class="list-unstyled font-serif">
                        <li><a href="">javascript</a></li>
                        <li><a href="">css</a></li>
                        <li><a href="">php</a></li>
                        <li><a href="">java</a></li>
                        <li><a href="">js</a></li>
                    </ul>
                </div>
                <div class="sidebar-chunk article-category box-shadow">
                    <p class="sc-label inline-block">标签</p>
                    <ul class="list-unstyled font-serif">
                        <li><a href="">javascript</a></li>
                        <li><a href="">css</a></li>
                        <li><a href="">php</a></li>
                        <li><a href="">java</a></li>
                        <li><a href="">js</a></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
@stop

@section('js')

@stop