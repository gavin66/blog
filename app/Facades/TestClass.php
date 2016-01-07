<?php
/**
 * Created by PhpStorm.
 * User: Gavin
 * Date: 2016/1/7
 * Time: 16:39
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class TestClass extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'test';
    }
}