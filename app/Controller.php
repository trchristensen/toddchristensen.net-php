<?php

namespace App;

use App\Router;

class Controller
{
    protected function view($template, $data = [])
    {
        return Router::view($template, $data);
    }

    protected function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}
