/*! blog - v1.0.0 - 2015-12-22
* https://github.com/gavin66/blog
* Copyright (c) 2015 ; Licensed MIT */
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

/**
 * 设置ajax默认参数
 * X-CSRF-TOKEN    Laravel CSRF(跨网站请求伪造)保护
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

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
//;(function($){
//    var methods = {
//        getFormParams: function(){
//            var names=this.find("input");
//            var params={};
//            for(var i=0;i<names.length;i++){
//                if($.inArray($(names[i]).attr("type").toLowerCase(),["password"])){
//                    alert($(names[i]).attr("type").toLowerCase());
//                    if(names[i].id){
//                        params[names[i].id]=names[i].value;
//                    }
//                    else{
//                        params[names[i].name]=names[i].value;
//                    }
//                }else if($.inArray($(names[i]).attr("type").toLowerCase(),["checkbox"])){
//
//                }
//            }
//            return params;
//        }
//    };
//    $.fn.gTools = function(method){
//        if(methods[method]){
//            return methods[method].apply(this,Array.prototype.slice.call(arguments,1));
//        }else if(typeof method === 'object' || !method){
//            return methods.getFormParams.apply(this, arguments);
//        }else{
//            $.error('Method' + method + 'does not exist on jQuery.Gform');
//        }
//    }
//})(jQuery)

var gApp = {
    /**
     * 获取表单的输入框值
     *
     * @param ele  表单element
     * @returns 一个对象{k:v,k:v}
     */
    getFormParams : function(ele){
        var names=$(ele).find("input");
        var params={},type="";
        for(var i=0;i<names.length;i++){
            type = names[i].type.toLowerCase();
            if(this.in_array(type,["password","email","text"])){
                params[names[i].name] = names[i].value;
            }else if(this.in_array(type,["checkbox"])){
                params[names[i].name] = $(names[i]).is('input:checkbox:checked')?'1':'0';
            }
        }
        return params;
    },

    /**
     * 类似于php中的in_array,一个字符串或数字是否在数组中出现
     *
     * @param search
     * @param array
     * @returns {boolean}
     */
    in_array : function(search,array){
        for(var i in array){
            if(array[i]==search){
                return true;
            }
        }
        return false;
    },

    /**
     * 让绑定的元素具有点击返回页面顶端的能力
     *
     * @param options = {}
     */
    backToTop : function(options){
        var defaults = {
            clickEle:'.back-to-top',
            scrollEle:'html,body',
            min_height:600,
            scrollSpeed:600
        };

        $.extend(true,defaults,options);

        $(window).scroll(function(){
            if( $(window).scrollTop() > defaults.min_height){
                $(defaults.clickEle).fadeIn(500);
            }else{
                $(defaults.clickEle).fadeOut(500);
            }
        });

        $(defaults.clickEle).click(
            function(){$(defaults.scrollEle).animate({scrollTop:0},defaults.scrollSpeed);
            });
    }

};
