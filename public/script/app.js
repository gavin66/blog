/**
 * Created by Gavin on 16/2/15.
 */
var deps = [
    'jqueryExt',
    'bootstrap'
];
seajs.use(deps,function(){
    // 回到顶端
    $.backToTop();

    //导航栏搜索框
    $('#navbar-search').on({
        focus: function() {
            $('#navbar-search').addClass('navbar-search');
        },
        blur: function() {
            $('#navbar-search').removeClass('navbar-search');
        }
    });
    $('#navbar-searchicon').click(function(){
        $('#navbar-search').addClass( 'navbar-search' );
        $('#navbar-search').focus().select();
    });


});