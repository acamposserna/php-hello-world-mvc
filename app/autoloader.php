<?php
    function app_autoloader($class) {
        include_once 'core/' . $class . '.php' ;
        include_once 'models/' . $class . '.php' ;
        include_once 'views/' . $class . '.php' ;
        include_once 'controllers/' . $class . '.php' ;
    }

    spl_autoload_register('app_autoloader');
