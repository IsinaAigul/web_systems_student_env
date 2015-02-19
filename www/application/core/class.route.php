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

  public static function post($pattern, $callback) {
    self::set('POST', $pattern, $callback);
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

    // Для всех роутов 
    foreach ($active_routes as $pattern => $callback) {
      $pattern = str_replace("/", "\/", $pattern );
	   // Если REQUEST_URI соответствует шаблону - вызываем функцию
     if (preg_match_all("/$pattern/", $uri, $matches) !== false) {
	     //извлекаем класс контролерра из callback
	     $callback = explode('/', $callback);
	     $cont =$callback[0];
	     $met = $callback[1];
	     $method_name = "$met";
       $call = new $cont();
       $call->$method_name();
       
       $foo = new foo();
       call_user_func_array(array($foo, "bar"), array("three", "four"));       
       // class foo {
       //   public function bar($arg1, $arg2) {
       //       ................
       //     }
       //}
       }
	     #$met();//вызов метода
        // выходим из цикла
        break;
      }
      $matches = array();
    }
  }


    /**
     * @param $pattern
     * @param $pattern_params
     * @param $matches
     * @return mixed
     */
    private function constructPattern($pattern, $pattern_params)
    {
        $pattern = str_replace('/', '\/', $pattern);
        //документация!!!!

        preg_match_all("/(?<=:)[a-zA-Z0-9]++/", $pattern, $matches);
        foreach ($matches[0] as $value) {
            if(array_key_exists($value, $pattern_params)) {
                $arg_rex_exp = $pattern_params[$value];
                $pattern = str_replace(":$value", "($arg_rex_exp)", $pattern);
            }
        }
        $pattern = "^$pattern";//ВЕРНУТЬ ЗНАК $ ПОСЛЕ PULLREQUEST!!!!(возможно)
        return $pattern;
    }
}
