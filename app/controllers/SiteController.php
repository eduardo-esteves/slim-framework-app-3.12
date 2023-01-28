<?php

namespace App\controllers;

class SiteController extends Controller {
    public function index() {
        $this->view('home', [
            'nome'  => 'Eduardo',
            'title' => 'Home',
        ]);
    }

    public function contact() {
        return 'Pagina contact';
    }
}
