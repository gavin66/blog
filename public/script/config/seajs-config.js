/**
 * Created by Gavin on 16/2/14.
 */
seajs.config({
    base  : '/plug-in/',
    charset : 'utf-8',
    paths: {
        'editormd-plugins': 'editor.md-1.5.0/plugins'
    },
    alias : {
        seajs_css : 'seajs-3.0.0/plugins/seajs-css-master/dist/seajs-css',
        jquery   : 'jquery-2.2.0/jquery-2.2.0',
        jqueryExt: '/script/extend/jquery-ext',
        editormd : 'editor.md-1.5.0/editormd-debug.js',
        bootstrap: 'bootstrap-3.3.5/dist/js/bootstrap-debug',
        particlesJS: 'particles.js-2.0.0/particles.min',
        velocity: 'velocity-1.2.3/velocity.min',
        jQuerySidebar: 'jQuery-Sidebar/dist/jQuery-Sidebar-debug',
        metisMenu: 'metisMenu-2.4.0/dist/metisMenu-debug',
        pjax: 'jquery-pjax-1.9.6/jquery.pjax-debug',
        summernote: 'summernote-0.7.0/summernote.min'
    }
});