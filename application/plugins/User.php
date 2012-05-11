<?php
class UserPlugin extends Yaf_plugin_Abstract {
    // demo
    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
        //echo 'routerStartup'; 
    }
    
    // router
    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
       // echo "生效地址:". Yaf_Dispatcher::getInstance()->getRouter()->getCurrentRoute();
    
    }

}
