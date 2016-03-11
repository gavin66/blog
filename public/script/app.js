/**
 * Created by Gavin on 16/2/15.
 */
var deps = [
    'jqueryExt',
    'bootstrap',
    'jQuerySidebar'
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

    var jqSidebar = new $.jqSidebar({
        rightMode: 'sidebar-offset',
        autoClose: true
    });

    //$('.sidebar-toggle').on('click',function(){
    //    var status = $('#sidebar').attr("data-status");
    //    if(status == 'closed'){
    //        $('#sidebar').velocity({right:0},500).attr('data-status','opened');
    //        $('#sidebar .motion-element').each(function(index){
    //            $(this).velocity({translateX:'100px'},0).velocity({translateX:0},300+index*100);
    //        });
    //        $('#content').velocity({paddingRight:'320px'},500);
    //    }else if(status == 'opened'){
    //        $('#sidebar').velocity({right:'-320px'},500).attr('data-status','closed');
    //        $('#content').velocity({paddingRight:0},500);
    //    }
    //});
});