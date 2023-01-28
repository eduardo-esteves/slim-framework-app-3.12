<?php

require "../bootstrap.php";

use App\controllers\SiteController;

$app->group('/admin', function($app) {
    $app->get('/conf', function() {
        return phpinfo();
    });
});

$app->get('/', SiteController::class . ':index');

$app->run();
