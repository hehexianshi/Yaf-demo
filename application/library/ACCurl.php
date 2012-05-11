<?php
/**
 * Curl class file.
 * @author li dong <zhubaiying@gmail.com>
 * @version $Id Db.class.php 2012-5-11 $
 */
class ACCurl
{
    protected $isPost = true;
    protected $res;
    protected $url;
    protected $params;

    /**
     *  构造方法
     *  @access   public
     *  @param    string  $url
     *  @param    bool    $isPost
     *  @return   bool
     */
    public function __construct($url, $isPost = true)
    {
        $this->url = $url;
        $this->isPost = $isPost;
        if($this->res = curl_init()){
            return true;
        }
        return false;
        
    }
    
    /**
     *  魔术方法
     *  @access   public 
     *  @param    string  $k
     *  @param    fixed   $v
     *  @return   bool
     */
    public function __set($k, $v)
    {
        if($k == 'params'){
            $this->params = $v;
            return true;
        }
        return false;
    }
    
    /**
     *  执行方法
     *  @access   public 
     *  @return   bool
     */
    public function exec()
    {
        curl_setopt($this->res, CURLOPT_URL, $this->url);
        if(!empty($this->params) && $this->isPost){
            curl_setopt($this->res, CURLOPT_POST, 1);
            curl_setopt($this->res, CURLOPT_POSTFIELDS, $this->params);
        }
        if(curl_exec($this->res)){
            return true;
        }
        return false;
    }
    
    /**
     *  析构方法
     *  @access public
     */
    public function __destruct()
    {
    
        $this->close(); 
    }
    
    /**
     *  删除资源
     *  @access public
     */
    public function close()
    {
        curl_close($this->res);
    }
}
