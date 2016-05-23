/**
 * Created by Gavin on 16/2/19.
 */
var deps = [
    'jqueryExt',
    'editormd',
    'toastr',
    'editormd-plugins/link-dialog/link-dialog',
    'editormd-plugins/reference-link-dialog/reference-link-dialog',
    'editormd-plugins/image-dialog/image-dialog',
    'editormd-plugins/code-block-dialog/code-block-dialog',
    'editormd-plugins/table-dialog/table-dialog',
    'editormd-plugins/emoji-dialog/emoji-dialog',
    'editormd-plugins/goto-line-dialog/goto-line-dialog',
    'editormd-plugins/help-dialog/help-dialog',
    'editormd-plugins/html-entities-dialog/html-entities-dialog',
    'editormd-plugins/preformatted-text-dialog/preformatted-text-dialog',
    'seajs_css'
];

seajs.use(deps, function($,editormd,toastr) {
    seajs.use('/vendor/editor.md-1.5.0/css/editormd.min.css');
    seajs.use('/vendor/toastr-2.1.2/build/toastr.min.css');

    var clickable = true; // 更新按钮 的可点击性

    var editor = editormd('editormd', {
        width: '100%',
        height: 600,
        path : '/vendor/editor.md-1.5.0/lib/',
        //toolbar  : false,             // 关闭工具栏
        codeFold : true,
        searchReplace : true,
        saveHTMLToTextarea : true,      // 保存 HTML 到 Textarea
        htmlDecode : 'style,script,iframe|on*',            // 开启 HTML 标签解析，为了安全性，默认不开启
        emoji : true,
        taskList : true,
        tocm : true,          // Using [TOCM]
        tex : true,                      // 开启科学公式 TeX 语言支持，默认关闭
        flowChart : true,                // 疑似 Sea.js与 Raphael.js 有冲突，必须先加载 Raphael.js ，Editor.md 才能在 Sea.js 下正常进行；
        sequenceDiagram : true,          // 同上
        imageUpload : true,
        imageFormats : ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'webp'],
        imageUploadURL : './php/upload.php',
        onload: function(){
            this.setMarkdown($('#edit-md-text').val());
        }
    });

    $('#save-article').on('click',function(){
        var send = {
            title:$('#title-article').val(),
            outline:$('#outline-article').val(),
            content_md:editor.getMarkdown(),
            content_html:editor.getHTML()
        };
        $.helpers.store({
            url: '/backend/article',
            data: send,
            success: function(data){
                $('#backend_article_list').trigger('click');
            }
        });

    });

    $('#update-article').on('click',function(){
        if(clickable){
            clickable = false;
            var send = {
                title:$('#title-article').val(),
                outline:$('#outline-article').val(),
                content_md:editor.getMarkdown(),
                content_html:editor.getHTML()
            };
            $.helpers.update({
                url:'/backend/article/'+$('#title-article').attr('data-article-id'),
                data:send,
                success:function(data){
                    window.setTimeout(function(){
                        clickable = true;
                    },3000);
                }
            });
        }else{
            toastr.warning('请休息3秒再提交更新');
        }
    });

});

