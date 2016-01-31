/**
 * Created by Gavin on 2015/8/24.
 */

/**
 * 设置ajax默认参数
 * X-CSRF-TOKEN    Laravel CSRF(跨网站请求伪造)保护
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
