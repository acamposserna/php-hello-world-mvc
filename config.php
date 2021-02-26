<?php
/**
 * This file defines the application constants and configuration variables.
 *
 * @version 1.0
 * @see     Config()
 * @author  Antonio Campos (https://github.com/acamposserna)
 */
    $config = Config::getInstance();

    // Constants
    define('DIRECTORY_SEP', '/');
    define('PHP_EXT', '.php');
    define('AMPERSAND', '&');
    define('QUESTION', '?');

    // Application configuration
    $config->set('CONTROLLER_PATH', 'app/controllers');
    $config->set('VIEW_PATH', 'app/views');
    $config->set('MODEL_PATH', 'app/models');
    $config->set('DEFAULT_CONTROLLER', 'home');
    $config->set('DEFAULT_ACTION', 'index');
    $config->set('USER', 'world');