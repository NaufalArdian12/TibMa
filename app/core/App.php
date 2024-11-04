<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    protected $routes = [];

    public function __construct()
    {
        // Muat rute dari config/routes.php
        $this->routes = require_once __DIR__ . '/../config/routes.php';

        // Ambil URL yang diminta
        $url = $this->parseURL();

        // Cek apakah URL sesuai dengan rute custom
        if ($url && array_key_exists($url[0], $this->routes)) {
          $route = $this->routes[$url[0]];
          $this->controller = $route['controller'];
          $this->method = $route['method'];
          unset($url[0]);
        } elseif ($url && file_exists(__DIR__ . '/../controllers/' . $url[0] . '.php')) {
          // Jika tidak ada rute custom, cek file controller
          $this->controller = $url[0];
          unset($url[0]);
        }

        // Include file controller
        require_once __DIR__ . '/../controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Cek metode di URL jika tidak menggunakan rute custom
        if (!$this->method && isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // Params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
