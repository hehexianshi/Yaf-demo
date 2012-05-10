<?php
class Bootstrap extends Yaf_Bootstrap_Abstract {
    // get config
    public function _initConfig() {
        $config = Yaf_Application::app()->getConfig();
    } 
    
    //register plugin
    public function _initPlugin(Yaf_Dispatcher $dispatcher) {
        $user = new UserPlugin();
        $dispatcher->registerPlugin($user);
    }

    // route
    public function _initRoute(Yaf_Dispatcher $dispatcher) {
        $router = Yaf_Dispatcher::getInstance()->getRouter();
        //var_dump(Yaf_Registry::get("config")->routes);
        //$router->addConfig(Yaf_Registry::get("config")->routes);
        // add route
        $route = new yaf_Route_Rewrite(
                "/product/list/:id",
                array(
                        "controller" => "product",
                        "action"     => "info"
                    )
        );
        $router->addRoute('dummy', $route); 
    }
}

