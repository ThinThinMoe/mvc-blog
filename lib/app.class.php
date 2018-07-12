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
        $url = isset($_GET['url']) ? $_GET['url'] : '';
        $url = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));

        //check controller exit
        if ($url[0] !== '') {
            if (file_exists(ROOT . DS . 'app' . DS . 'controllers' . DS . $url[0] . 'Controller.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            } else {
                exit('<h1>Page Not Found !</h1>');
            }
        }

        require_once ROOT . DS . 'app' . DS . 'controllers' . DS . $this->controller . 'Controller.php';
        $this->controller = new $this->controller;

        //check method exit
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                exit('<h1>Page Not Found !</h1>');
            }
        }

        //check params exit
        if (isset($url[2])) {
            $this->params = isset($url) ? array_values($url) : [];
        }

        //call controller with params
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}
