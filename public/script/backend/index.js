/**
 * Created by Gavin on 16/1/30.
 */
var deps = [
    "editormd",'jquery','jqueryExt','bootstrap','velocity','pjax','metisMenu','jQuerySidebar',

    //"editor.md-master/plugins/link-dialog/link-dialog",
    //"editor.md-master/plugins/reference-link-dialog/reference-link-dialog",
    //"editor.md-master/plugins/image-dialog/image-dialog",
    //"editor.md-master/plugins/code-block-dialog/code-block-dialog",
    //"editor.md-master/plugins/table-dialog/table-dialog",
    //"editor.md-master/plugins/emoji-dialog/emoji-dialog",
    //"editor.md-master/plugins/goto-line-dialog/goto-line-dialog",
    //"editor.md-master/plugins/help-dialog/help-dialog",
    //"editor.md-master/plugins/html-entities-dialog/html-entities-dialog",
    //"editor.md-master/plugins/preformatted-text-dialog/preformatted-text-dialog"
];

require(deps, function() {
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();

    new $.jqSidebar({
        leftMode: 'sidebar-turn',
        autoClose: false
    });

    $('#metisMenu').metisMenu();

    $(document).pjax('a[data-pjax=true]', '#pjax-container',
        {
            timeout:650,
            maxCacheLength:20
        }
    );



    testEditor = editormd("test-editormd", {
        width: "90%",
        height: 640,
        path : '/plug-in/editor.md-master/lib/',
        markdown : '',
        codeFold : true,
        searchReplace : true,
        saveHTMLToTextarea : true,                // 保存HTML到Textarea
        htmlDecode : "style,script,iframe|on*",       // 开启HTML标签解析，为了安全性，默认不开启
        emoji : true,
        taskList : true,
        tex : true,
        tocm            : true,         // Using [TOCM]
        autoLoadModules : false,
        previewCodeHighlight : true,
        flowChart : true,
        sequenceDiagram : true,
        //dialogLockScreen : false,   // 设置弹出层对话框不锁屏，全局通用，默认为true
        //dialogShowMask : false,     // 设置弹出层对话框显示透明遮罩层，全局通用，默认为true
        //dialogDraggable : false,    // 设置弹出层对话框不可拖动，全局通用，默认为true
        //dialogMaskOpacity : 0.4,    // 设置透明遮罩层的透明度，全局通用，默认值为0.1
        //dialogMaskBgColor : "#000", // 设置透明遮罩层的背景颜色，全局通用，默认为#fff
        imageUpload : true,
        imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
        imageUploadURL : "./php/upload.php",
        onload : function() {
            //console.log('onload', this);
            //this.fullscreen();
            //this.unwatch();
            //this.watch().fullscreen();
            //this.setMarkdown("#PHP");
            //this.width("100%");
            //this.height(480);
            //this.resize("100%", 640);
        }
    });


});
