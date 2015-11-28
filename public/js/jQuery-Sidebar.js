/**
 * Created by Gavin on 2015/11/27.
 */
;(function($){
    $.jqSidebar = function(options){
        var setting = $.extend({
            leftActive:false,
            rightActive:false
        },options);

        //初始化的窗口大小
        var windowWidth = $(window).width();

        //获取左右两侧的侧边栏
        if($('.jqsb-left').length){
            var $left = $('.jqsb-left');
        }
        if($('.jqsb-right').length){
            var $right = $('.jqsb-right');
        }
        if($('.jqsb-container').length){
            var $container = $('.jqsb-container');
        }

        //初始化插件
        function initialize(){
            if($left && $container) $container.css('margin-left',$left.css('width'));
            css();
        }

        initialize();

        //样式变化
        function css(){
            $left
        }

        //窗口大小改变时
        $(window).on('resize',function(){
            var resizedWindowWidth = $(window).width();

        });

        //动画
        function animate(){

        }

        //
        $('.jqsb-toggle-left').on('click',function(){

        });
    };

    $.jqSidebar();
})(jQuery);