<?php

namespace HbgStyleGuide\Helper;

class Enviroment
{
    public static function componentLibraryIsInstalled()
    {
        if (file_exists(BASEPATH . "source/library/src/Init.php")) {
            return true; 
        }
        return false;
    }

    public static function loadInstalledComponentLibrary()
    {
        if (file_exists(BASEPATH . "source/library/src/Init.php")) {
            require_once BASEPATH . "source/library/src/Init.php";
            return true; 
        }
        return false;
    }

    public static function isLocalDomain()
    {
        return substr($_SERVER['HTTP_HOST'], -strlen(LOCAL_DOMAIN)) === LOCAL_DOMAIN;
    }
}
