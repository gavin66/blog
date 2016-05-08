<?php
/**
 * Created by PhpStorm.
 * User: Gavin
 * Date: 16/1/31
 * Time: 21:36
 */

if(!function_exists('file_test_connect')){
    /**
     * 测试网络连接
     *
     * @param $url
     * @return bool
     */
    function file_test_connect($url){
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

if(!function_exists('cdn_file_test')){
    /**
     * 返回可用连接,$prefix 前缀 例如: 'http:','https:' $cdnLink cdn连接,$fileLink 本地文件系统连接
     *
     * @param string $prefix
     * @param string $cdnLink
     * @param string $fileLink
     * @return string
     */
    function cdn_file_test($prefix,$cdnLink,$fileLink){
        if(file_test_connect($prefix.$cdnLink)){
            return $cdnLink;
        }
        return $fileLink;
    }
}

if(!function_exists('getFileAllContents')){
    /**
     * 获取一个文件内容 $filename 文件的路径
     * @param string $filename
     * @return string
     */
    function getFileAllContents($filename){
        $handle = fopen($filename,'r');
        $contents = fread($handle,filesize($filename));
        fclose($handle);

        return $contents;
    }
}

if(!function_exists('getVersion')){
    /**
     * 获取当前博客的版本号
     * @return mixed
     */
    function getVersion(){
        return config('watermelon.version');
    }
}

if(!function_exists('returnData')){
    /**
     * 返回数据
     *
     * @param string $key
     * @param $data
     * @return array|string
     */
    function returnData($key = '0',$data = []){
        if(is_bool($key)){
            if($key) $key = '0';
            else $key = '-1';
        }

        return [
            'code'=>$key,
            'desc'=>config('watermelon.'.$key),
            'data'=>$data,
            'timestamp'=>time(),
            'version'=>getVersion()
        ];

    }
}