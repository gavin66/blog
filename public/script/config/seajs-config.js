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
        editormd : 'editor.md-1.5.0/editormd-debug',
        bootstrap: 'bootstrap-3.3.5/dist/js/bootstrap-debug',
        particlesJS: 'particles.js-2.0.0/particles.min',
        velocity: 'velocity-1.2.3/velocity.min',
        jquery_sidebar: 'jquery-sidebar/dist/jquery-sidebar.min',
        metisMenu: 'metisMenu-2.4.0/dist/metisMenu-debug',
        pjax: 'jquery-pjax-1.9.6/jquery.pjax-debug',
        summernote: 'summernote-0.7.0/summernote.min',
        bootstrap_table:'bootstrap-table-1.10.1/dist/bootstrap-table-debug',
        bootstrap_table_locale:'bootstrap-table-1.10.1/dist/locale/bootstrap-table-zh-CN-debug',

        //scrollspy:'scrollspy-ex-1.0.0/dist/scrollspy-ex.min',
        scrollspy:'scrollspy-ex-1.0.0/dev/scrollspy-ex',

        //Raphael: 'editor.md-1.5.0/lib/raphael.min',
        underscore:'underscore-1.8.3/underscore-min',
        lodash:'lodash-4.6.1/dist/lodash.min'
    }
});