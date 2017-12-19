<?php
class Bootstrap extends Yaf_Bootstrap_Abstract
{
    public function _initTest()
    {
        Yaf_Dispatcher::getInstance()->disableView();
    }

    public function _initEcho()
    {
        echo 'bootstrap 666<br />';
    }
}