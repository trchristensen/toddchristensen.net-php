<?php

use App\Router;

Router::get('/', function () {
    return Router::isHtmxAjaxRequest() ?
        Router::view('partials.home-content')
        : Router::view('home', ['title' => 'Home | Todd Christensen']);
});

Router::get('/about', function () {
    return Router::isHtmxAjaxRequest() ?
        Router::view('partials.about-content')
        : Router::view('about', ['title' => 'About | Todd Christensen']);
});

Router::get('/contact', function () {
    return Router::isHtmxAjaxRequest() ?
        Router::view('partials.contact-content')
        : Router::view('contact', ['title' => 'Contact | Todd Christensen']);
});

Router::get('/projects', function () {
    return Router::isHtmxAjaxRequest() ?
        Router::view('partials.projects-content')
        : Router::view('projects', ['title' => 'Projects | Todd Christensen']);
});

// Define more routes...