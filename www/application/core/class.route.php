<?php


/**
 *  Example routing
 *                                  nameController    action
 * Route::process($index, array(
    "#^api/related/(.*)$#Di"    => "ApiController/relatedDocuments/tags",
    "#^thread/(.*)$#Di"         => "ThreadController/route/uri",
    "#^ajax/tag/(.*)/(.*)$#Di"  => "TagController/add/id/tags",
    "#^ajax/reply/(.*)/post$#Di"=> "ThreadController/ajaxPost/id",
    "#^ajax/reply/(.*)$#Di"     => "ArticleController/newReply/id",
    "#^ajax/toggle/(.*)$#Di"    => "ApiController/toggle/toggle",
    "#^$#Di"                    => "HomeController",
));
 * **/

// ----------- Router.php


class Router {

  private static $routes = array();

  private function __constructor() {}
  
  public static function get($params) {
    self::set('GET', $params);
  }

  public static function post($params) {
    self::set('POST', $params);
  }

  private static function set($type, $params) {
     foreach ($params as $pattern => $value) 
     {
       self::$routes[$type][$pattern] = $value;
     }
  }


  public static function process($method, $uri) {
    if (in_array($method, array('GET', 'POST'))) {
      new Exception("Request method should be GET or POST"); 
    }

    // Выполнение роутинга
    // Используем роуты $routes['GET'] или $routes['POST']  в зависимости от метода HTTP.
    $active_routes = self::$routes[$method];

    foreach ($active_routes as $pattern => $callback) {
      $pattern = str_replace("/", "\/", $pattern );
	    // Если REQUEST_URI соответствует шаблону - вызываем функцию
      if (preg_match_all("/$pattern/", $uri, $matches) >= 1) 
      {
        $arg = array();
        //извлекаем класс контролерра из callback
        foreach($matches as $key => $val)
        {
            if ($key >= 1)
            {
                array_push ($arg, $val[0]);
            }
        }
	      $callback = explode('/', $callback);
	      $cont =$callback[0];
	      $met = $callback[1];
        $call = new $cont();
        call_user_func_array(array($call, $met), $arg); 
        break;
      }
	    #$met();//вызов метода
     
      
    }
    $matches = array();
  }
}

