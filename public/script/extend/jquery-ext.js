/**
 * jquery的扩展与配置,适应laravel框架的设置.
 * Created by Gavin on 16/2/4.
 */
;
+function (factory) {
    "use strict";

    // CommonJS/Node.js
    if (typeof require === "function" && typeof exports === "object" && typeof module === "object")
    {
        module.exports = factory;
    }
    else if (typeof define === "function")  // AMD/CMD/Sea.js
    {
        if (define.amd) // for Require.js
        {
            /* Require.js define replace */
        }
        else
        {
            define('jqueryExt',["jquery"], factory);  // for Sea.js
        }
    }
    else
    {
        factory();
    }
}(function () {

    // 设置帮助类命名空间
    $.helpers = {};

    /**
     * 设置ajax默认参数
     * X-CSRF-TOKEN    Laravel CSRF(跨网站请求伪造)保护
     */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /**
     * 类似于php中的in_array,一个字符串或数字是否在数组中出现
     *
     * @param search
     * @param array
     * @returns {boolean}
     */
    $.helpers.in_array = function(search,array){
        for(var i in array){
            if(array[i]==search){
                return true;
            }
        }
        return false;
    };

    /**
     * 获取表单的输入框值
     *
     * @param ele  表单element
     * @returns 一个对象{k:v,k:v}
     */
    $.helpers.getFormParams = function(ele){
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
    };

    /**
     * 序列化一个表单,返回一个对象,类似json格式
     * @returns {{}}
     */
    $.fn.serializeJson = function(){
        var serializeObj = {};
        var array = this.serializeArray();
        $(array).each(function(){
            if(serializeObj[this.name]){
                if($.isArray(serializeObj[this.name])){
                    serializeObj[this.name].push(this.value);
                }else{
                    serializeObj[this.name]=[serializeObj[this.name],this.value];
                }
            }else{
                serializeObj[this.name]=this.value;
            }
        });
        return serializeObj;
    };

    /**
     * 使选定元素具有返回页面顶端的能力
     * @param options
     */
    $.backToTop = function(options){
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
    };

});