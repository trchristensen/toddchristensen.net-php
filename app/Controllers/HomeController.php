<?php

namespace App\Controllers;

use App\Router;
use App\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return Router::isHtmxAjaxRequest() ?
            $this->view('partials.home-content')
            : $this->view('home', ['title' => 'Home | Todd Christensen']);
    }

    public function about()
    {
        return Router::isHtmxAjaxRequest() ?
            $this->view('partials.about-content')
            : $this->view('about', ['title' => 'About | Todd Christensen']);
    }

    public function contact()
    {
        return Router::isHtmxAjaxRequest() ?
            $this->view('partials.contact-content')
            : $this->view('contact', ['title' => 'Contact | Todd Christensen']);
    }

    public function prius()
    {
        return Router::isHtmxAjaxRequest() ?
            $this->view('partials.prius-content')
            : $this->view('prius');
    }
}
