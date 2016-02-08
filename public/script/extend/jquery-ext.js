/**
 * Created by Gavin on 16/2/4.
 */
(function($){
    // 序列化一个表单,返回一个对象,类似json格式
    $.fn.serializeJson=function(){
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

})(jQuery);