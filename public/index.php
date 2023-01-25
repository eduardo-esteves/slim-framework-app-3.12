<?php

require "../bootstrap.php";

use app\controllers\HomeController;

$app->group('/admin', function($app) {
    $app->get('/conf', function() {
        return phpinfo();
    });
});

$app->get('/', HomeController::class . ':index');

$app->run();
