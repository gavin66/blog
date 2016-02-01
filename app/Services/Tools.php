<?php
/**
 * Created by PhpStorm.
 * User: Gavin
 * Date: 16/1/31
 * Time: 21:36
 */

if(!function_exists('test_file_connect')){
    /**
     * 测试网络连接
     *
     * @param $url
     * @return bool
     */
    function test_file_connect($url){
        $file = @fopen($url,"r");
        if($file){
            $is = true;
            fclose($file);
        }else{
            $is = false;
        }
        return $is;
    }
}

if(!function_exists('style_link')){
    /**
     * 返回可用连接,$prefix 前缀 例如: 'http:','https:' $cdnLink cdn连接,$fileLink 本地文件系统连接
     *
     * @param string $prefix
     * @param string $cdnLink
     * @param string $fileLink
     * @return string
     */
    function style_link($prefix,$cdnLink,$fileLink){
        if(test_file_connect($prefix.$cdnLink)){
            return $cdnLink;
        }
        return $fileLink;
    }
}