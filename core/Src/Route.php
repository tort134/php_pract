<?php

namespace Src;

use Error;

class Route{
    private static array $routes = [];
    private static string $prefix = '';

    public static function setPrefix($value){
        self::$prefix = $value;
    }

    public static function add(string $route, array $action): void{
        if(!array_key_exists($route, self::$routes)){
            self::$routes[$route] = $action;
        }
    }

    public function start(): void{
        $path =
    }
}