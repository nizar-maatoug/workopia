<?php


require_once "../App/controllers/HomeController.php";
require_once "../App/controllers/AuthController.php";


class Router {


    protected $routes=[];

    /**
     * Add new route
     * @param string $method
     * @param string $uri
     * @param string $action //JobController@get_all
     * @param array $middlewares
     * 
     * @return void
     */
    private function registerRoute($method, $uri, $action, $middleware = []){

        list($controller, $controllerMethod) = explode('@', $action);

        //exemple key=POST:/job
        $key=strtoupper($method).':'.$uri;

      

        $this->routes[$key]=[            
                'method' => $method,
                'uri' => $uri,
                'controller' => $controller,
                'controllerMethod' => $controllerMethod,
                'middleware' => $middleware            
        ];
        
    }

    /**
     * Add a GET route
     * 
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * 
     * @return void
     */
    public function get($uri, $controller, $middleware = [])
    {
        $this->registerRoute('GET', $uri, $controller, $middleware);
    }

    /**
     * Add a POST route
     * 
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * 
     * @return void
     */
    public function post($uri, $controller, $middleware = [])
    {
        $this->registerRoute('POST', $uri, $controller, $middleware);
    }

    /**
     * Add a PUT route
     * 
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * 
     * @return void
     */
    public function put($uri, $controller, $middleware = [])
    {
        $this->registerRoute('PUT', $uri, $controller, $middleware);
    }

    /**
     * Add a DELETE route
     * 
     * @param string $uri
     * @param string $controller
     * @param array $middleware
     * 
     * @return void
     */
    public function delete($uri, $controller, $middleware = [])
    {
        $this->registerRoute('DELETE', $uri, $controller, $middleware);
    }

    /**
   * Route the request
   * 
   * @param string $uri
   * @param string $method
   * @return void
   */
  public function route($uri,$method)
  {
    $key=strtoupper($method).':'.$uri;

    $route=$this->routes[$key];

    $controller = $route['controller'];
    $controllerMethod = $route['controllerMethod'];

    // Instatiate the controller and call the method

    $controllerInstance = new $controller();
    
    $controllerInstance->$controllerMethod();

    return;   


  }



}