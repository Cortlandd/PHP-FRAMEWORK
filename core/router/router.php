<?php

/*
Router class holds an array of routes which the site can respond 
to properly, and also holds a 404 callback, in case we do not have
 route registred for a proper response. To add a new available
  route, we have to use add method, passing in url, and a closure
   as a callback. Route callback get's executed whenever route url
    get's matched to current request URL. Finally we have out dispatch
     method, which takes current request url, and attempts to find
      a match in routes array, if found, calls it's callback, if any
       of routes does not have required URL, notFound callback is 
       executed. 404 callback can be modified by calling setNotFound 
        method and passing a respective callback to it.
*/

namespace phpframework\core\router;

class Router{

    private $routes = [];
    private $notFound;

    public function __construct() {
        $this->notFound = function($url){
            echo "404 - $url was not found!";
        };
    }

    public function add($url, $action) {
        $this->routes[$url] = $action;
    }

    public function setNotFound($action) {
        $this->notFound = $action;
    }

    public function dispatch() {
        foreach ($this->routes as $url => $action) {
            if( $url == $_SERVER['REQUEST_URI'] ){
                if(is_callable($action)) return $action();

                $actionArr = explode('#', $action);
                $controller = 'app\\controllers\\'.$actionArr[0];
                $method = $actionArr[1];

                return (new $controller)->$method();
            }
        }
        call_user_func_array($this->notFound,[$_SERVER['REQUEST_URI']]);
    }
}
?>