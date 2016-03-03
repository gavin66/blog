<div class="row">
    <div class="col-sm-12">
        <h4 class="nav-title">撰写新文章</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-9">
        <div class="row">
            <div class="col-sm-12">
                <input type="text" class="form-control atc-tit-ipt" id="title-article" name="title"  placeholder="输入标题">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="editormd"></div>
            </div>
        </div>

    </div>
    <div class="col-md-3">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        发布
                        <span class="glyphicon glyphicon-triangle-bottom pull-right" role="button" data-toggle="collapse" href="#release"
                              aria-expanded="false" aria-controls="release">
                        </span>
                    </div>
                    <ul class="list-group collapse in" id="release">
                        <li class="list-group-item">保存草稿 预览</li>
                        <li class="list-group-item">状态:草稿 编辑</li>
                        <li class="list-group-item">公开度:公开 编辑</li>
                        <li class="list-group-item">发布时间: 编辑</li>
                        <li class="list-group-item">
                            <span class="shift-trash">移至回收站</span>
                            <button type="button" class="btn btn-primary btn-sm pull-right" id="save-article">保存</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        分类
                        <span class="glyphicon glyphicon-triangle-bottom pull-right" role="button" data-toggle="collapse" href="#sort"
                              aria-expanded="false" aria-controls="sort">
                        </span>
                    </div>
                    <ul class="list-group collapse in" id="sort">
                        <li class="list-group-item">所有分类目录,最常用</li>
                        <li class="list-group-item">添加新分类目录</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        标签
                        <span class="glyphicon glyphicon-triangle-bottom pull-right" role="button" data-toggle="collapse" href="#tag"
                              aria-expanded="false" aria-controls="tag">
                        </span>
                    </div>
                    <ul class="list-group collapse in" id="tag">
                        <li class="list-group-item">输入框,添加按钮</li>
                        <li class="list-group-item">从标签库中选择</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    <?php echo getFileAllContents(public_path().'/script/backend/article.create.js'); ?>
</script>