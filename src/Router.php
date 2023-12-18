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

    public static function run()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset(self::$routes[$method][$uri])) {
            $response = call_user_func(self::$routes[$method][$uri]);

            if (is_string($response)) {
                echo $response;
            } else {
                // Handle other types of responses if needed
            }
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
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
