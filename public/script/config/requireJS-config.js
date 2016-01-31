/**
 * Created by Gavin on 16/1/30.
 */
var require = {
    // 加载时限7秒
    waitSeconds: 7,

    // 测试用配置,给每个需要加载的文件加上时间戳
    urlArgs: "bust=" + (new Date()).getTime(),

    // 基础地址
    baseUrl: '/plug-in/',

    // 设置模块
    paths:{
        jquery:['/script/config/jquery-config'],

        // 正式环境使用
        //jqueryBase:['//cdn.bootcss.com/jquery/2.1.4/jquery.min','jquery-2.2.0/jquery-2.2.0.min'],
        //bootstrap:['//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min','bootstrap-3.3.5/js/bootstrap.min'],
        //particlesJS:['//cdn.bootcss.com/particles.js/2.0.0/particles.min','particles.js-master/particles.min'],


        // 本地测试用
        jqueryBase:['jquery-2.2.0/jquery-2.2.0.min'],
        bootstrap:['bootstrap-3.3.5/js/bootstrap.min'],
        particlesJS:['particles.js-master/particles.min'],

        // 动画切换的jquery插件
        velocity:['//cdn.bootcss.com/velocity/1.2.2/velocity.min.js','velocity-master/velocity.min']

    },

    //map: {
    //    '*': {
    //        'css': 'RequireJS/require-css-master/css.min'
    //    }
    //},

    // 模块间的相互依赖
    shim: {
        'jquery':['jqueryBase'],
        'bootstrap':['jquery'],
        'particlesJS':['jquery'],
        'velocity':['jquery']
    }

};