<?php

Class Owner_controller
{

    public function viewOwner()
    {
        $form = new AuthorizationForm();
        echo $form->process();

    }
}



/*
 * Created by PhpStorm.
 * User: Айгуль
 * Date: 21.03.2015
 * Time: 12:18
 */