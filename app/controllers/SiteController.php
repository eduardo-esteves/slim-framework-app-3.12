<?php

namespace App\controllers;

use App\models\Post;

class SiteController extends Controller {
    public function index() {
        $post   = new Post();
        $posts  = $post->all();

        $this->view('home', [
            'nome'  => 'Eduardo',
            'title' => 'Home',
            'posts' => $posts,
        ]);
    }

    public function contact() {
        return 'Pagina contact';
    }
}
