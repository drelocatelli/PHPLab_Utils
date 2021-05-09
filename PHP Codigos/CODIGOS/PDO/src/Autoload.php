<?php

spl_autoload_register(function($className) {

    require_once("Classes".DIRECTORY_SEPARATOR.$className.".php");
    
});