/**
 * Created by Gavin on 16/2/14.
 */
seajs.config({
    base  : '/plug-in/',
    charset : 'utf-8',
    paths: {
        'editormd-plugins': 'editor.md-master/plugins'
    },
    alias : {
        jquery   : 'jquery-2.2.0/jquery-2.2.0',
        jqueryExt: '/script/extend/jquery-ext',
        editormd : 'editor.md-master/editormd',
        bootstrap: 'bootstrap-3.3.5/js/bootstrap-debug',
        particlesJS: 'particles.js-master/particles.min',
        velocity: 'velocity-master/velocity.min',
        jQuerySidebar: 'jQuery-Sidebar/dist/jQuery-Sidebar-debug',
        metisMenu: 'metisMenu-master/dist/metisMenu-debug',
        pjax: 'jquery-pjax-master/jquery.pjax-debug',
        summernote: 'summernote-0.7.0/summernote.min'
    }
});