/**
 * Created by Gavin on 16/2/19.
 */
var deps = [
    'editormd',
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
    'jqueryExt',
    'seajs_css'
];

seajs.use(deps, function(editormd) {
    seajs.use('/plug-in/editor.md-1.5.0/css/editormd.min.css');

    var editor = editormd('editormd', {
        width: '100%',
        height: 600,
        path : '/plug-in/editor.md-1.5.0/lib/',
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
        imageUploadURL : './php/upload.php'
    });

    $('#save-article').on('click',function(){
        var sent = {
            title:$('#title-article').val(),
            content_md:editor.getMarkdown(),
            content_html:editor.getHTML()
        };
        console.log(sent);

        $.ajax({
            url:'/backend/article',
            method:'post',
            data:sent,
            dataType:'json',
            success:function(data){

            }
        });
    });

});

