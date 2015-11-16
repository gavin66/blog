/**
 * Created by Gavin on 2015/8/24.
 */
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
            };
        });

        $(defaults.clickEle).click(
            function(){$(defaults.scrollEle).animate({scrollTop:0},defaults.scrollSpeed);
            });
    }

};
