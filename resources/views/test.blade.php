<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--移动设备优先,为了确保适当的绘制和触屏缩放，需要在 <head> 之中添加 viewport 元数据标签。-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="csrf-token" content="{{ csrf_token()}}" />
    <!-- 在移动设备浏览器上，通过为视口（viewport）设置 meta 属性为 user-scalable=no 可以禁用其缩放（zooming）功能。
        这样禁用缩放功能后，用户只能滚动屏幕，就能让你的网站看上去更像原生应用的感觉。注意，这种方式不推荐所有网站使用，需看情况而定-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>商城配置</title>

    <!-- Bootstrap css-->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/blueimp-file-upload/9.5.7/css/jquery.fileupload.css" rel="stylesheet">
    <link href="//cdn.bootcss.com/blueimp-file-upload/9.5.7/css/jquery.fileupload-ui.css" rel="stylesheet">
    <link href="/jkb/style/external_conn/shop.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container app">
    <div class="row">
        <div class="col-xs-12">
            <div class="pull-right filter">
                <input type="search" class="form-control input-sm" placeholder="关键字">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#product-add">新增</button>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>编号</th>
            <th>类别</th>
            <th>商品名称</th>
            <th>商品描述</th>
            <th>商品积分</th>
            <th>图片</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>a</td>
            <td>b</td>
            <td>desc</td>
            <td>c</td>
            <td>d</td>
            <td>
                <button type="button" class="btn btn-info btn-sm">修改</button>
                <button type="button" class="btn btn-info btn-sm">删除</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>a</td>
            <td>b</td>
            <td>desc</td>
            <td>c</td>
            <td>d</td>
            <td>
                <button type="button" class="btn btn-info btn-sm">修改</button>
                <button type="button" class="btn btn-info btn-sm">删除</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>a</td>
            <td>b</td>
            <td>desc</td>
            <td>c</td>
            <td>d</td>
            <td>
                <button type="button" class="btn btn-info btn-sm">修改</button>
                <button type="button" class="btn btn-info btn-sm">删除</button>
            </td>
        </tr>
        </tbody>
        <!--            <tfoot>-->
        <!--                <tr>-->
        <!--                    <th>编号</th>-->
        <!--                    <th>类别</th>-->
        <!--                    <th>商品名称</th>-->
        <!--                    <th>商品积分</th>-->
        <!--                    <th>图片</th>-->
        <!--                    <th>操作</th>-->
        <!--                </tr>-->
        <!--            </tfoot>-->
    </table>
    <div class="row">
        <div class="col-xs-6">
            <div>显示 1 - 20,共 50 条数据</div>
        </div>
        <div class="col-xs-6">
            <nav class="pull-right">
                <ul class="pagination">
                    <li>
                        <a href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="modal fade" id="product-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">新增商品</h4>
                </div>
                <div class="modal-body">
                    <form id="productForm">
                        <div class="form-group">
                            <label for="name" class="control-label">商品名称</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="fields" class="control-label">商品类别</label>
                            <input type="text" class="form-control" name="fields">
                        </div>
                        <div class="form-group">
                            <div id="picUpload">
                                <div class="row fileupload-buttonbar">
                                    <div class="col-xs-7">
                                            <span class="btn btn-success fileinput-button btn-sm">
                                                <i class="glyphicon glyphicon-plus"></i>
                                                <span>添加图片</span>
                                                <input type="file" name="files[]" multiple>
                                            </span>
                                        <button type="submit" class="btn btn-primary start btn-sm">
                                            <i class="glyphicon glyphicon-upload"></i>
                                            <span>上传</span>
                                        </button>
                                        <button type="reset" class="btn btn-warning cancel btn-sm">
                                            <i class="glyphicon glyphicon-ban-circle"></i>
                                            <span>取消上传</span>
                                        </button>
                                        <button type="button" class="btn btn-danger delete btn-sm">
                                            <i class="glyphicon glyphicon-trash"></i>
                                            <span>删除</span>
                                        </button>
                                        <input type="checkbox" class="toggle">
                                        <span class="fileupload-process"></span>
                                    </div>
                                    <div class="col-xs-5 fileupload-progress fade">
                                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                        </div>
                                        <div class="progress-extended">&nbsp;</div>
                                    </div>
                                </div>
                                <table role="presentation" class="table table-striped"><tbody class="files" id="pictures"></tbody></table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="integral" class="control-label">商品兑换所需积分</label>
                            <input type="text" class="form-control" name="integral">
                        </div>
                        <div class="form-group">
                            <label for="description" class="control-label">商品描述</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary" id="productSave">保存</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/blueimp-file-upload/9.10.4/vendor/jquery.ui.widget.js"></script>
<script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="//cdn.bootcss.com/blueimp-file-upload/9.10.4/jquery.iframe-transport.js"></script>
<script src="//cdn.bootcss.com/blueimp-file-upload/9.10.4/jquery.fileupload.js"></script>
<script src="//cdn.bootcss.com/blueimp-file-upload/9.10.4/jquery.fileupload-process.js"></script>
<script src="//cdn.bootcss.com/blueimp-file-upload/9.10.4/jquery.fileupload-image.js"></script>
<script src="//cdn.bootcss.com/blueimp-file-upload/9.10.4/jquery.fileupload-audio.js"></script>
<script src="//cdn.bootcss.com/blueimp-file-upload/9.10.4/jquery.fileupload-video.js"></script>
<script src="//cdn.bootcss.com/blueimp-file-upload/9.10.4/jquery.fileupload-validate.js"></script>
<script src="//cdn.bootcss.com/blueimp-file-upload/9.10.4/jquery.fileupload-ui.js"></script>

<script type="text/javascript">
    $(function(){
        'use strict';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var picUploader = $('#picUpload');
        picUploader.fileupload({
            url:'/test/picture-save',
            dataType: 'json',
//        paramName:'files',
            acceptFileTypes:  /(\.|\/)(gif|jpe?g|png)$/i,
            autoUpload: false,
            maxNumberOfFiles : 5,
            maxFileSize: 5000000,
            previewMaxWidth:80,
            previewMaxHeight:80,
//        done:function(e,data){
//            console.log(data);
//        },
//        progressall:function (e, data) {
//            console.log('progressall:'+data);
//        },
            filesContainer: $('#pictures'),
            uploadTemplateId: null,
            downloadTemplateId: null,
            uploadTemplate: function (o) {
                var rows = $();
                $.each(o.files, function (index, file) {
                    var row = $('<tr class="template-upload fade">' +
                            '<td><span class="preview"></span></td>' +
                            '<td><p class="name"></p>' +
                            '<div class="error"></div>' +
                            '</td>' +
                            '<td><p class="size"></p>' +
                            '<div class="progress"></div>' +
                            '</td>' +
                            '<td>' +
                            (!index && !o.options.autoUpload ?
                                    '<button class="btn btn-primary btn-sm start" disabled><i class="glyphicon glyphicon-upload"></i><span>开始</span></button>&nbsp;' : '') +
                            (!index ? '<button class="btn btn-warning btn-sm cancel"><i class="glyphicon glyphicon-ban-circle"></i><span>取消</span></button>' : '') +
                            '</td>' +
                            '</tr>');
                    row.find('.name').text(file.name);
                    row.find('.size').text(o.formatFileSize(file.size));
                    if (file.error) {
                        row.find('.error').text(file.error);
                    }
                    rows = rows.add(row);
                });
                return rows;
            },
            downloadTemplate: function (o) {
                var rows = $();
                $.each(o.files, function (index, file) {
                    var row = $('<tr class="template-download fade">' +
                            '<td><span class="preview"></span></td>' +
                            '<td><p class="name"></p>' +
                            (file.error ? '<div class="error"></div>' : '') +
                            '</td>' +
                            '<td><span class="size"></span></td>' +
                            '<td><button class="btn btn-danger delete"><i class="glyphicon glyphicon-trash"></i><span>删除</span></button></td>' +
                            '</tr>');
                    row.find('.size').text(o.formatFileSize(file.size));
                    if (file.error) {
                        row.find('.name').text(file.name);
                        row.find('.error').text(file.error);
                    } else {
                        row.find('.name').append($('<a></a>').text(file.name));
                        if (file.thumbnailUrl) {
                            row.find('.preview').append(
                                    $('<a></a>').append(
                                            $('<img>').prop('src', file.thumbnailUrl)
                                    )
                            );
                        }
                        row.find('a')
                                .attr('data-gallery', '')
                                .prop('href', file.url);
                        row.find('button.delete')
                                .attr('data-type', file.delete_type)
                                .attr('data-url', file.delete_url);
                    }
                    rows = rows.add(row);
                });
                return rows;
            }
        });
    });
</script>
</body>
</html>