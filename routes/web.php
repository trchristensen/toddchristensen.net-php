<?php

use App\Controllers\HomeController;
use App\Controllers\GuestbookController;
use App\Router;

Router::get('/', [HomeController::class, 'index']);
Router::get('/prius', [HomeController::class, 'prius']);


// Router::get('/about', [HomeController::class, 'about']);
// Router::get('/contact', [HomeController::class, 'contact']);

// Router::get('/guestbook', [GuestbookController::class, 'index']);
// Router::post('/guestbook', [GuestbookController::class, 'store']);

// Add other routes as needed