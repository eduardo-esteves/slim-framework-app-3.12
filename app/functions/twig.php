<?php

$file_exists = new Twig\TwigFunction('file_exists', function (string $file): bool {
    return \file_exists($file);
});

return [
    $file_exists
];
