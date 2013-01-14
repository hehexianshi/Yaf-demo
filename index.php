<?php
/**
 * index file.
 * @author lidong <zhubaiying@gmail.com>
 * @version $Id    index.php   2012-5-10 $
 * test demo
 */
define("APP_PATH", dirname(__FILE__));
$app = new Yaf_Application(APP_PATH."/conf/application.ini");
//var_Dump($app->environ());
$app->bootstrap()->run();
