<?php

use App\Router;

Router::get('/', function () {
    return Router::isHtmxAjaxRequest() ?
        Router::view('partials.home-content')
        : Router::view('home');
});

Router::get('/about', function () {
    return Router::isHtmxAjaxRequest() ?
        Router::view('partials.about-content')
        : Router::view('about');
});

Router::get('/contact', function () {
    return Router::isHtmxAjaxRequest() ?
        Router::view('partials.contact-content')
        : Router::view('contact');
});

// Define more routes...