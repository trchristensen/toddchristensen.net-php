<?php

use App\DB;
use App\Guestbook;
use App\Router;

Router::post('/send-magic-link', function () {
    $email = $_POST['email'] ?? '';

    $dbConnection = new DB();
    $guestbook = new Guestbook($dbConnection);

    $response = $guestbook->sendMagicLink($email);
    // Return a response (e.g., confirmation message)
    return $response;
});

Router::get('/authenticate', function () {
    // Get token from query parameter
    // Verify token with Stytch API
    // Handle authenticated user
});

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

Router::get('/prius', function () {

    return Router::isHtmxAjaxRequest() ?
        Router::view('partials.prius-content')
        : Router::view('prius');

});

Router::get('/guestbook', function () {
    $dbConnection = new DB();
    $guestbook = new Guestbook($dbConnection);
    $entries = $guestbook->getAllEntries();

    // Now, return the entries in your desired format (e.g., JSON, HTML)
    return Router::isHtmxAjaxRequest() ?
        Router::view('partials.guestbook-content', ['entries' => $entries])
        : Router::view('guestbook', ['entries' => $entries]);

});

Router::post('/guestbook', function () {
    $dbConnection = new DB();
    $guestbook = new Guestbook($dbConnection);

    // Retrieve and sanitize input data
    // $name = $_POST['name'] ?? '';
    $name = "Todd";
    $message = $_POST['message'] ?? '';

    // Add entry to the guestbook
    $guestbook->addEntry($name, $message);

    // For HTMX request, return only the updated part
    if (Router::isHtmxAjaxRequest()) {
        $entries = $guestbook->getAllEntries();
        return Router::view('partials.guestbook-entries', ['entries' => $entries]);
    } else {
        // Handle a regular request (e.g., redirect)
    }
});