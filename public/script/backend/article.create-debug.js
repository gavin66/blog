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

    //'editor.md-master/lib/raphael.min',
    //'editor.md-master/lib/underscore.min',
    //'editor.md-master/lib/flowchart.min',
    //'editor.md-master/lib/jquery.flowchart.min',
    //'editor.md-master/lib/sequence-diagram.min',
    //
    //'editor.md-master/lib/codemirror/codemirror.min',
    //'editor.md-master/lib/codemirror/modes.min',
    //'editor.md-master/lib/codemirror/addons.min',
    //'editor.md-master/lib/marked.min',
    //'editor.md-master/lib/prettify.min',

    'seajs_css'
];

seajs.use(deps, function(editormd) {
    //seajs.use('/plug-in/editor.md-master/lib/codemirror/codemirror.min.css');
    //seajs.use('/plug-in/editor.md-master/lib/codemirror/addon/dialog/dialog.css');
    //seajs.use('/plug-in/editor.md-master/lib/codemirror/addon/search/matchesonscrollbar.css');
    //seajs.use('/plug-in/editor.md-master/lib/codemirror/addon/fold/foldgutter.css');
    seajs.use('/plug-in/editor.md-master/css/editormd.min.css');

    //seajs.use('editor.md-master/lib/raphael.min');
    //seajs.use('editor.md-master/lib/underscore.min');
    //seajs.use('editor.md-master/lib/flowchart.min');
    //seajs.use('editor.md-master/lib/jquery.flowchart.min');
    //seajs.use('editor.md-master/lib/sequence-diagram.min');
    //seajs.use('editor.md-master/lib/codemirror/codemirror.min');
    //seajs.use('editor.md-master/lib/codemirror/modes.min');
    //seajs.use('editor.md-master/lib/codemirror/addons.min');
    //seajs.use('editor.md-master/lib/marked.min');
    //seajs.use('editor.md-master/lib/prettify.min');


    var editor;

    $.get('/plug-in/editor.md-master/examples/test.md', function(md){
        editor = editormd('test-editormd', {
            width: '90%',
            height: 640,
            //autoLoadModules: false,
            path : '/plug-in/editor.md-master/lib/',
            markdown : md,
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
    });

});

