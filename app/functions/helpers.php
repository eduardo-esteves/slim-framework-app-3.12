<?php

function dd($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}

function path(): string {
    $vendorDir = dirname(__DIR__);
    return dirname($vendorDir);
}
