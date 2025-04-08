<?php

if (!function_exists('theme_asset')) {
    function theme_asset($path = null): string
    {
<<<<<<< HEAD
        $themeName = theme_root_path();
        if($themeName == 'default'){
            return dynamicAsset(path: $path);
        }else{
            if (DOMAIN_POINTED_DIRECTORY == 'public'){
                return dynamicAsset(path: 'public/themes/'.$themeName.'/public/'.$path);
            }else{
                return dynamicAsset(path: 'resources/themes/'.$themeName.'/public/'.$path);
            }
        }
=======
        $themeName = env('WEB_THEME') == null ? 'default' : env('WEB_THEME');
        return asset("resources/themes/$themeName/public/$path");
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
    }
}

if (!function_exists('theme_root_path')) {
    function theme_root_path(): string
    {
        return env('WEB_THEME') == null ? 'default' : env('WEB_THEME');
    }
}


