<?php

namespace App;

class Router
{
    private static $routes = [];
    private static $blade = null;

    public static function init($views, $cache)
    {
        self::$blade = new \Jenssegers\Blade\Blade($views, $cache);
    }

    public static function get($uri, $callback)
    {
        self::$routes['GET'][$uri] = $callback;
    }

    public static function post($uri, $callback)
    {
        self::$routes['POST'][$uri] = $callback;
    }

    public static function resource($name, $controller)
    {
        self::get("/$name", [$controller, 'index']);
        self::post("/$name", [$controller, 'store']);
        // Add other resource routes as needed
    }

    public static function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes[$method] as $route => $controller) {
            $pattern = '#^' . preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_]+)', $route) . '$#';
            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches);
                $controllerClass = $controller[0];
                $method = $controller[1];

                // Check if the controller class exists
                if (!class_exists($controllerClass)) {
                    throw new \Exception("Controller class '$controllerClass' not found");
                }

                $controllerInstance = new $controllerClass();
                $response = call_user_func_array([$controllerInstance, $method], $matches);

                if (is_string($response)) {
                    echo $response;
                }
                return;
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }

    public static function view($template, $data = [])
    {
        return self::$blade->render($template, $data);
    }

    public static function isHtmxAjaxRequest()
    {
        return isset($_SERVER['HTTP_HX_REQUEST']) && $_SERVER['HTTP_HX_REQUEST'] === 'true';
    }
}
