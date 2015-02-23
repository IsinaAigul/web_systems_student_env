<?php
// ------ index.php-------------------------
include_once './application/core/class.route.php';
include_once './application/modules/Supplier/controller/controller.supplier.php';
include_once './autoinclude.php';
header('Content-type: text/html; charset = utf-8');
$loader = Loader::getInstance();

$loader->load_all_modules();

Router::get(array('/tour_Create' => 'Supplier/tour_Create',//создание тура
                  '/tour_Redaction'=>'Supplier/ChangeTour', 
                  '/viewTour/(\d+)'=>'Supplier/viewTour'));//редактировать тур
Router::post(array('/supplier_home_page'=>'Supplier/showTour'));
//Router::process ('GET', '/viewTour/31');

$form = new AuthorizationForm();
echo $form->process();

//$field = new SelectField();
//echo $field -> render();
