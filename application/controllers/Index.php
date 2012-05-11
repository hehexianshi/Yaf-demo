<?php
class IndexController extends Yaf_Controller_Abstract {
    
    // 自动调用
    public function init() {
        if ($this->getRequest()->isXmlHttpRequest()){
            Yaf_DisPatcher::getInstance()->disableView();
        }
        $db = new ACDb;
    }
    //
    public function indexAction() {
        $routes = Yaf_Dispatcher::getInstance()->getRouter()->getRoutes();
        // get param a
        var_dump($this->getRequest()->getParam('a'));
    }


    //Ajax demo
    public function demoAction() {
    
        echo 'this action = demo and request = ajax';
    }
    
    
}
