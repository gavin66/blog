@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <section class="col-sm-9">
                @foreach($rows as $v)
                <article class="bulletin" itemscope itemtype="" >
                    <header class="bulletin-header">
                        <h1 class="bulletin-title"><a class="post-title-link" itemprop="url" href="/article/{{ $v['id'] }}">{{ $v['title'] }}</a></h1>
                        <div class="bulletin-meta">
                            <span class="post-time">发表于<time itemscope="dateCreated" datetime="2015-05-15T22:48:56+08:00" content="2015-09-13">{{ $v['created_at'] }}</time></span>
                            <span class="post-category">分类于<span itemscope itemtype="" itemprop="about"><a href="" itemprop="url" rel="index"><span itemprop="name">读书笔记</span></a></span></span>
                            <span class="post-comments-count"><a href="" itemprop="discussionUrl"><span class="post-comments-count" itemprop="commentsCount">3条评论</span></a></span>
                        </div>
                    </header>
                    <div class="bulletin-body">
                        <p class="description" itemprop="description">
                            {{ $v['outline'] }}
                        </p>
                        <div class="bulletin-link-full">
                            <a class="" href="" rel="contents">阅读全文 »</a>
                        </div>
                    </div>
                </article>
                @endforeach
                <nav class="paging">
                    <a class="prev pull-left" rel="prev" href="#" ><span class="glyphicon glyphicon-chevron-left"></span></a>
                    <span class="page-number current">1</span>
                    <a class="page-number" href="#">2</a>
                    <span class="space">…</span>
                    <a class="page-number" href="#">7</a>
                    <a class="next pull-right" rel="next" href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
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