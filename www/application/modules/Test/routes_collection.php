<?php

Router::get(array('/owner_home_page'=> 'Owner_controller/viewOwner'));


Router::post(array('/owner_home_page'=>'Owner_controller/viewOwner') );


Router::get(array('/login' => 'AuthorizationForm/process'));
Router::post(array('' => 'AuthorizationForm/process'));




/**
 * Created by PhpStorm.
 * User: Айгуль
 * Date: 21.03.2015
 * Time: 12:44
 */