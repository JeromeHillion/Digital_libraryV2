<?php
spl_autoload_register(function ($className) {
    $directories=[
        "",
        "\\dao",
        "\\model",
        "\\service",
    ];
    foreach ($directories as $directory)
    {
        $file = __DIR__ .$directory. '\\' . $className . '.php';
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);

        if (file_exists($file)) {
            require_once $file;

            return true;
        }
    }
    return false;
});