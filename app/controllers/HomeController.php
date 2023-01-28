<?php

namespace App\controllers;

class HomeController extends Controller {
    public function index() {
        $this->view('home', [
            'nome'  => 'Eduardo',
            'title' => 'Home',
        ]);
    }
}
