<?php

require "../bootstrap.php";

$app->group('/admin', function($app) {
    $app->get('/conf', function() {
        return phpinfo();
    });
});

$app->get('/', function() {
    return 'Hello Slim Framework';
});

$app->run();
