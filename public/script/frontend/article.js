/**
 * Created by Gavin on 16/2/19.
 */


// 多说公共JS代码 start (一个网页只需插入一次)
var duoshuoQuery = {short_name:"local20160327"};
(function() {
    var ds = document.createElement('script');
    ds.type = 'text/javascript'; ds.async = true;
    ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
    ds.charset = 'UTF-8';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
})();

var deps = [
    'editormd',
    'jqueryExt',
    'bootstrap',
    'scrollspy',
    'editor.md-1.5.0/lib/marked.min',
    'editor.md-1.5.0/lib/prettify.min',
    'editor.md-1.5.0/lib/sequence-diagram.min',
    'editor.md-1.5.0/lib/flowchart.min',
    'editor.md-1.5.0/lib/jquery.flowchart',
    'seajs_css'
];

seajs.use(deps, function(editormd) {
    // 异步加载css
    seajs.use('/plug-in/editor.md-1.5.0/css/editormd.min.css');
    //seajs.use('/style/app.css');
    seajs.use('/style/frontend/duoshuo.css');

    $(function(){

        // 初始化markdown
        var editormdView = editormd.markdownToHTML("markdown-view", {
            markdown        : $('#markdown-text').text(),//+ "\r\n" + $("#append-test").text(),
            //htmlDecode      : true,       // 开启 HTML 标签解析，为了安全性，默认不开启
            htmlDecode      : "style,script,iframe",  // you can filter tags decode
            //toc             : false,
            tocm            : true,    // Using [TOCM]
            tocContainer    : "#markdown-toc", // 自定义 ToC 容器层
            //gfm             : false,
            //tocDropdown     : true,
            // markdownSourceCode : true, // 是否保留 Markdown 源码，即是否删除保存源码的 Textarea 标签
            emoji           : true,
            taskList        : true,
            tex             : true,  // 默认不解析
            flowChart       : true,  // 默认不解析
            sequenceDiagram : true  // 默认不解析
        });

        // 监听页面滚动 为导航中的 'li标签' 添加 '激活 active' 样式
        $('body').scrollspy({ target: '#markdown-toc',match:'name'});

        // 侧边toc层的滚动样式切换 这里代码不好,性能消耗多了,待优化
        var rounder = setInterval(function(){
            if($('.ds-share-custom').outerHeight(true) > 40
                && $('.ds-thread').outerHeight(true) > 0
                && $('footer.container').outerHeight(true) > 30
                && $('.ds-replybox').css('z-index') == 3){
                $('#markdown-toc').affix({
                    offset: {
                        top: $('#markdown-toc').offset().top,
                        bottom: $('.ds-share-custom').outerHeight(true) + $('.ds-thread').outerHeight(true)
                                + $('footer.container').outerHeight(true) + 30
                    }
                });
                clearInterval(rounder);
            }
        },300);

    });


});



