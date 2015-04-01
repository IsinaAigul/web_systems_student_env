<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 26.11.2014
 * Time: 13:25
 */
Class Supplier{

    private $current_data_worker = null;
    private $current_data_storage = null;
    private $current_id = null;

    private function loginTest(){//проверка на залогинивание персонажа
        foreach($_COOKIE as $value){
            if(!is_null($value)){//если в куках есть идентификатор сессии
                return true;//вернуть tr
                }
        }
        return false;//иначе false
    }


    public function __construct(){
        if($this->loginTest()){
            session_start();
            $this->current_id = $_SESSION['id'];
        }
        else{
            return;
        }

    }

	public function newTour($value){//изменение тура
        print "My Tours";
    }
    
    public function viewSupplier($value) {
    //   var_dump($value);
      print "View Tour id ";  
    }
    
    public function changeTour ($value)
    {

        
    }
    
    
}