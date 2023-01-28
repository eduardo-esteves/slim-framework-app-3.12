<?php

namespace App\src;

class Load {
    public static function file(string $file): array {
        $file = path() . $file;

        if(!\file_exists($file)) {
            throw new \Exception("Arquivo não Existe: {$file}");
        }

        return require($file);
    }
}
