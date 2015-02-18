<?php

    $ar1 = array("Staff","newTour");
    $ar2 = array("Staff","ticketChoose");
    $ar3 = array("Staff","ChangeTour");

    $r = Router::getInstance();


   // $r->get('/:suppHome',$ar1,$codes_params);//домашняя страница персонажа
    $r->post('/tour_Create',$ar1);//создание тура
    $r->post('/tour_Redaction',$ar3);//редактировать тур
    $r->get('/supplier_home_page',$ar2);//домашняя страница персонажа
	// /user/12  /user/:id  id => /d+
   // $r->post('/:suppHome',$ar3,$codes_params);//домашняя страница персонажа

