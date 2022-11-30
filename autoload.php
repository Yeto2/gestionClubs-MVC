<?php
session_start();
spl_autoload_register('autoload');

function autoload($class_name){
    $array_path = array(
        'database/',
        'app/classes',
        'models/',
        'controllers/'
    );

    $parts = explode('\\',$class_name);
    $name = array_pop($parts);
    foreach ($array_path as $path) {
        $files = sprintf($path.'%s.php',$name);
        if (is_file($file)) {
            include_once $file;
        }
    }
}
?>