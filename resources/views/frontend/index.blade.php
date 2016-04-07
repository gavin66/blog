@extends('app')

@section('content')
    <div class="container wrap-main" id="test">
        <div class="row">
            <section class="col-sm-9">
                @foreach($rows as $v)
                    <article class="article-list-entry">
                        <header class="article-list-header">
                            <h3 class="title">
                                <a class="post-title-link" itemprop="url" href="/article/{{ $v['id'] }}">{{ $v['title'] }}</a>
                                <small class="time">
                                    <i class="fa fa-calendar"></i>
                                    {{ $v['created_at'] }}
                                </small>
                            </h3>
                        </header>
                        <div class="article-list-content">
                            <p></p>
                            <p><span class="invisible">空格</span>Markdown 写的表格最终会被解析成 HTML 代码，如果使用的编辑器支持自定义 CSS，就能方便的调整样式。
                                如果可以引入 JavaScript，样式自适应也能较好地实现。</p>
                        </div>
                        <div class="article-list-footer">
                            <h4>
                                {{--<i class="fa fa-book fa-fw"></i>--}}
                                <span class="label label-warning">分类</span>
                                {{--<i class="fa fa-tag fa-fw"></i>--}}
                                <span class="label label-info">tag1</span>
                                <span class="label label-success">tag2</span>
                                <a class="more" href="/article/{{ $v['id'] }}">
                                    <span class="label label-default pull-right">More >></span>
                                </a>
                            </h4>
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">分类</div>
                            <ul class="list-group collapse in" id="release">
                                <li class="list-group-item">PHP</li>
                                <li class="list-group-item">状态:草稿 编辑</li>
                                <li class="list-group-item">公开度:公开 编辑</li>
                                <li class="list-group-item">发布时间: 编辑</li>
                                <li class="list-group-item">JJJ</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">标签</div>
                            <ul class="list-group collapse in" id="release">
                                <li class="list-group-item">保存草稿 预览</li>
                                <li class="list-group-item">状态:草稿 编辑</li>
                                <li class="list-group-item">公开度:公开 编辑</li>
                                <li class="list-group-item">发布时间: 编辑</li>
                                <li class="list-group-item">JJJ</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">归档</div>
                            <ul class="list-group collapse in" id="release">
                                <li class="list-group-item">保存草稿 预览</li>
                                <li class="list-group-item">状态:草稿 编辑</li>
                                <li class="list-group-item">公开度:公开 编辑</li>
                                <li class="list-group-item">发布时间: 编辑</li>
                                <li class="list-group-item">JJJ</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12"></div>
            </section>
        </div>
    </div>
@stop

@section('js')

@stop