/**
 * Created by Gavin on 2015/9/14.
 */
//(function($){
//    $.fn.sidebar = function(options){
//        var settings = $.extend({},options);
//    }
//}(jQuery));


//$('.sidebar-toggle').on('click',function(){
//    var status = $('#sidebar').attr("data-status");
//    if(status == 'closed'){
//        $('#sidebar').animate({right:'0'},500).attr('data-status','opened');
//    }else if(status == 'opened'){
//        $('#sidebar').animate({right:'-320px'},500).attr('data-status','closed');
//    }
//});

$('.sidebar-toggle').on('click',function(){
    var status = $('#sidebar').attr("data-status");
    if(status == 'closed'){
        $('#sidebar').velocity({right:0},500).attr('data-status','opened');
        $('#sidebar .motion-element').each(function(index){
            $(this).velocity({translateX:'100px'},0).velocity({translateX:0},300+index*100);
        });
        $('#content').velocity({paddingRight:'320px'},500);
    }else if(status == 'opened'){
        $('#sidebar').velocity({right:'-320px'},500).attr('data-status','closed');
        $('#content').velocity({paddingRight:0},500);
    }
});