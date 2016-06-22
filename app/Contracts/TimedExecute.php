<?php
/**
 * Created by PhpStorm.
 * User: Gavin
 * Date: 16/6/22
 * Time: 14:06
 */

namespace App\Contracts;


interface TimedExecute {

    /**
     * 同步标签数
     * @return mixed
     */
    public function synchronizeTag();

    /**
     * 同步分类数
     * @return mixed
     */
    public function synchronizeCategory();


}