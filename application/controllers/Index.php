<?php
class IndexController extends Yaf_Controller_Abstract {
    //
    public function indexAction() {
        $routes = Yaf_Dispatcher::getInstance()->getRouter()->getRoutes();

    }

    //
    public function demoAction() {
    
        echo 'demo';
    }
}
