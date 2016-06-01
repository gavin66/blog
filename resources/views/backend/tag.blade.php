<div class="row">
    <div class="col-sm-12">
        <h4 class="nav-title">标签</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <!-- 标签名 -->
        <input type="text" id="tag-name" class="form-control atc-tit-ipt"  name="name"
               placeholder="标签名" value="{{ $name or '' }}" data-tag-id="{{ $id or '' }}">
        <!-- 标签的描述 -->
        <textarea id="tag-desc" class="form-control atc-tit-ipt" placeholder="标签说明"  rows="3">{{ $desc or '' }}</textarea>
        <button type="button" id="tag-save" class="btn btn-primary">添加新标签</button>
    </div>
    <div class="col-md-8">
        <div id="bst-toolbar">
            <form class="form-inline" role="form">
                <div class="form-group">
                    <label>Offset: </label>
                    <input name="offset" class="form-control w70" type="number" value="0">
                </div>
                <div class="form-group">
                    <label>Limit: </label>
                    <input name="limit" class="form-control w70" type="number" value="5">
                </div>
                <div class="form-group">
                    <input name="search" class="form-control" type="text" placeholder="Search">
                </div>
                <button id="bst-search" type="submit" class="btn btn-default">OK</button>
            </form>
        </div>
        <table id="bst-table"></table>
    </div>
</div>

<script>
    <?php echo getFileAllContents(public_path().'/script/backend/tag.js'); ?>
</script>