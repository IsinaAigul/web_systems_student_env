<?php
// ------ index.php-------------------------
include_once './application/core/class.route.php';
include_once './application/modules/Supplier/controller/controller.supplier.php';
Router::get(array('/tour_Create' => 'Supplier/tour_Create',//создание тура
                  '/tour_Redaction'=>'Supplier/ChangeTour' ));//редактировать тур
#Router::post(array('/supplier_home_page'=>'Supplier/showTour'));
Router::process ('GET', '/tour_Create');
