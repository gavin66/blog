/**
 * Created by Gavin on 16/2/19.
 */
var deps = [
    'editormd',
    'editormd-plugins/link-dialog/link-dialog',
    'editor.md-1.5.0/lib/marked.min',
    'jqueryExt',
    'seajs_css'
];

seajs.use(deps, function(editormd) {
    seajs.use('/plug-in/editor.md-1.5.0/css/editormd.min.css');

    testEditormdView = editormd.markdownToHTML("md-text", {
        markdown        : $('#md-text').text() ,//+ "\r\n" + $("#append-test").text(),
        //htmlDecode      : true,       // 开启 HTML 标签解析，为了安全性，默认不开启
        htmlDecode      : "style,script,iframe",  // you can filter tags decode
        //toc             : false,
        tocm            : true,    // Using [TOCM]
        tocContainer    : "#custom-toc-container", // 自定义 ToC 容器层
        //gfm             : false,
        //tocDropdown     : true,
        // markdownSourceCode : true, // 是否保留 Markdown 源码，即是否删除保存源码的 Textarea 标签
        emoji           : true,
        taskList        : true,
        tex             : true,  // 默认不解析
        flowChart       : true,  // 默认不解析
        sequenceDiagram : true,  // 默认不解析
    });


});

