<?php
    const DIR_CONFIG = '/../config';

    spl_autoload_register(function ($className){
        $paths = include __DIR__ . DIR_CONFIG . '/path.php';
        $className = str_replace('\\', '/', $className);

        foreach ($paths['classes'] as $path){
            $fillName = $_SERVER['DOCUMENT_ROOT'] . "/$paths[root]/$path/$className.php";

            if(file_exists($fillName)){
                require_once $fillName;
            }
        }
    });

    function getConfigs(string $path = DIR_CONFIG): array{
        $settings = [];
        foreach (scandir(__DIR__ . $path) as $file) {
            $name = explode('.', $file)[0];
            if (!empty($name)) {
                $settings[$name] = include __DIR__ . "$path/$file";
            }
        }

        return $settings;
    }

    return new Src\Application(new Src\Settings(getConfigs()));