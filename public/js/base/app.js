/**
 * Created by Gavin on 2015/9/9.
 */

gApp.backToTop();

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

//var isSidebar = false;
//$('.sidebarToggle').click(function(){
//    isSidebar?$('#sidebar').removeClass('sidebar-toggle')&&$('#containerContent').removeClass('container-content')
//        :$('#sidebar').addClass('sidebar-toggle')&&$('#containerContent').addClass('container-content');
//
//    isSidebar = !isSidebar;
//});
