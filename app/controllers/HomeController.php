<?php

namespace App\Controllers;

use App\Controller;


class HomeController extends Controller
{
    public function index()
    {
        return $this->view('home', ['title' => 'Home | Todd Christensen']);
    }

    public function about()
    {
        return $this->view('about', ['title' => 'About | Todd Christensen']);
    }

    public function contact()
    {
        return $this->view('contact', ['title' => 'Contact | Todd Christensen']);
    }
}
