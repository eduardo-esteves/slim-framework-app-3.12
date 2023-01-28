<?php

namespace App\traits;

use App\src\Load;

trait View {
    protected \Twig\Environment $twig;

     protected function twig() {
         $loader = new \Twig\Loader\FilesystemLoader('../app/views');
         $this->twig = new \Twig\Environment($loader, [
             'cache' => '',
             'debug' => true
         ]);
     }

     protected function functions() {
        $functions = Load::file('/app/functions/twig.php');

        foreach($functions as $function) {
            $this->twig->addFunction($function);
        }
     }

     protected function load() {
         $this->twig();
         $this->functions();
    }

    protected function view(string $view, array $data) {
        $this->load();
        $template = $this->twig->loadTemplate(str_replace('.', '/', $view).'.html');

        return $template->display($data);
    }
}
