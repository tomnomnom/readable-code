<?php

function render($template, $params = []){

    $path = "{$template}.php";
    if (!is_readable($path)){
        return false;
    }

    $path = realpath($path);
    if (substr($path, 0, strlen(WEBROOT)) != WEBROOT){
        return false;
    }

    if (!is_array($params)){
        return false;
    }

    extract($params, EXTR_SKIP);
    include $path;

    return true;
}
