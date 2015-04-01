<?php



   // $r->get('/:suppHome',$ar1,$codes_params);//домашняя страница персонажа
Router::get(array('/tour_Create' => 'supplier/newTour',//создание тура
    '/tour_Redaction'=>'Supplier/ChangeTour' ));//редактировать тур
Router::post(array('/supplier_home_page'=>'Supplier/viewSupplier',
    '/my_Tours'=>'Supplier/showTour'));//домашняя страница персонажа
// /user/12  /user/:id  id => /d+
// $r->post('/:suppHome',$ar3,$codes_params);//домашняя страница персонажа

