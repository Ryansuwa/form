<?php
if(!function_exists('redirect_to')){
    function redirect_to($path =null){
        $path=str_replace('.php','',$path);
        $path.='.php';
        header('Location:'.$path);
        exit();
    }
}