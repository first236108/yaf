<?php
class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        $this->getView()->assign(['content'=>'YAF howowo……','vs'=>'test']);
    }
}