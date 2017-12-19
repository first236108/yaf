<?php
class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        var_dump($this->getRequest()->method);exit;
        $this->getView()->assign('content','YAF howowo……');
    }
}