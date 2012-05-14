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
    
    //curl demo
    public function curlAction() {
        $url = 'http://mytext/interface/index.class.php';
        $ch = new ACCurl($url);
        $params = array(
            'a' => base64_encode('abc'),
            'b' => base64_encode('fff')
        );
        $ch->params = $params;
        $ch->exec();
    }

    //
    public function dbAction() {
        $db = new ACDb();
        var_dump($db);
    
    }
    
}
