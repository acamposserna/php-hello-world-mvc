<?php
/**
 * This is the entry point for the application.
 *
 * To call any action you can use: index?controller=<controller_name>&action=<action_name>
 *
 * @version 1.0
 * @author  Antonio Campos (https://github.com/acamposserna)
 */
    require 'app/core/Config.php';
    require 'app/core/FrontController.php';

    require_once ('config.php');

    try {
        FrontController::index();
    }
    catch(Exception $ex) {
        echo $ex->getMessage();
    }
