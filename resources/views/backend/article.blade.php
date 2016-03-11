<div id="toolbar">
    <div class="form-inline" role="form">
        <div class="form-group">
            <span>Offset: </span>
            <input name="offset" class="form-control w70" type="number" value="0">
        </div>
        <div class="form-group">
            <span>Limit: </span>
            <input name="limit" class="form-control w70" type="number" value="5">
        </div>
        <div class="form-group">
            <input name="search" class="form-control" type="text" placeholder="Search">
        </div>
        <button id="ok" type="submit" class="btn btn-default">OK</button>
    </div>
</div>
<table id="bs-table"></table>

<script>
    <?php echo getFileAllContents(public_path().'/script/backend/article.js'); ?>
</script>