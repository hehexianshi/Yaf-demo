<?php
/**
 * Db class file.
 * @author li dong <zhubaiying@gmail.com>
 * @version $Id Db.class.php 2012-5-10 $
 */

class ACDb
{
    
    protected $db;
    protected $name;
    protected $pass;
    protected $data;
    protected $connect;

    protected $where;
    protected $limit;
    protected $order;
    protected $field;

    //
    public function __construct($name = 'demo' ,$pass = ''){
        $this->name = $name;
        $this->pass = $pass; 
    }

    //
    public function __set($k, $v){
        
        $this->data[$k] = $v;
    
    }

    //
    public function __get($k){

        return isset($this->data[$k]) ? $this->data[$k] : false;
    
    }

    //
    public function find(){
    
    
    }

    //
    public function _after_find(){
    
    
    }

    //
    public function query(){

    }

    //
    public function field($arr){
        $this->field = $this->_check('arr', $arr);
        return $this;
    }

    //
    public function limit($limit, $start = 0){
        $this->limit[limit] = $this->_check('num', $limit); 
        $this->limit[start] = $this->_check('num', $start);
        return $this;
    }

    //
    public function where($arr){
        $this->arr = $this->_check('arr', $arr);
        return $this;
    }

    public function order(){
    
        return $this;
    }

    //
    protected function _check($type, $data){
        switch($type){
            case 'arr':
               return is_array($data) ? $data : false;
               break;
            case 'num':
               return is_numeric($data) ? $data : false;
               break;
            //case 
            default : 
                return false;
                break;
    }
    
}
