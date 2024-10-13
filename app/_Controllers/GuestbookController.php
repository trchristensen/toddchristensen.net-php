<?php

namespace App\Controllers;

use App\Models\Guestbook;

class GuestbookController extends Controller
{
    private $guestbook;

    public function __construct()
    {
        $this->guestbook = new Guestbook();
    }

    public function index()
    {
        $entries = $this->guestbook->getAllEntries();
        return $this->view('guestbook.index', ['entries' => $entries]);
    }

    public function store()
    {
        $name = $_POST['name'] ?? '';
        $message = $_POST['message'] ?? '';
        $this->guestbook->addEntry($name, $message);
        return $this->redirect('/guestbook');
    }

    // Add other methods as needed (show, edit, update, destroy)
}
