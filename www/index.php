<?php
// ------ index.php-------------------------


include_once './application/core/class.route.php';
include_once './application/modules/Supplier/controller/controller.supplier.php';
include_once './autoinclude.php';
header('Content-type: text/html; charset = utf-8');
$loader = Loader::getInstance();
$loader->load_all_modules();

ThemeManager::setTheme(new ThemeKube());




///*Router::get(array('/tour_Create' => 'Supplier/tour_Create',//создание тура
//                  '/tour_Redaction'=>'Supplier/ChangeTour',
//                  '/viewTour/(\d+)'=>'Supplier/viewTour'));//редактировать тур
//Router::post(array('/supplier_home_page'=>'Supplier/showTour'));*/
Router::process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

$o= new textField("test","test",true,"test");
echo $o->render();

/*$form = new AuthorizationForm();
echo $form->process();


function test(){
    $t1 = new TextField("ТЕСТ!ТЕСТ!ТЕСТ!","test",true);
    echo $t1->render();
}*/
//$field = new SelectField();
//echo $field -> render();
