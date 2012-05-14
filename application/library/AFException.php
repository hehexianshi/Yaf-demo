<?php
/**
 * AException fun file.
 * @author li dong <zhubaiying@gmail.com>
 * @version $Id: AException.func.php 2012-5-10 $
 */
function AFException($error, $errstr, $errfile, $errline)
{
    /**
     * error 是否写入文件 
     */
      
    $inputFile = defined('ERROR_PUT_FILE') ? true : false;
    switch ($error) {
        case YAF_ERR_NOTFOUND_CONTROLLER;
        case YAF_ERR_NOTFOUND_MODULE;
        case YAF_ERR_NOTFOUND_ACTION;
            $err_str = 'not found';
            header($err_str);
        break
            $err_str = "Unkown error type:[$error] $errstr<br>\n";
            break;
    }
    if(!$inputFile){
        /*
         *  写入文件
         */
    }
    return true;
}
