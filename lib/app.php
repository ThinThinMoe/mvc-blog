<?php

class App
{
    private $controller = 'home';
    private $method     = 'index';
    private $params     = [];

    public function __construct()
    {
        $this->parseUrl();
    }

    public function parseUrl()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "";
        $url = explode('/', rtrim($url, '/'));

        //check controller exit
        if (file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $url[0] . 'Controller.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once ROOT . DS . 'app' . DS . 'controllers' . DS . $this->controller . 'Controller.php';
        $this->controller = new $this->controller;

        //check method exit
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        //check params exit
        $this->params = isset($url) ? array_values($url) : [];

        //call controller with params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
