<?php
/**
 * This class manages the loading and execution of controller actions.
 *
 * This is the main class of the application and its implements the MVC pattern.
 *
 * @version 1.0
 * @author  Antonio Campos (https://github.com/acamposserna)
 */
class FrontController {

    /**
     * This is the main method of the application.
     *
     * Manage all calls to the application.
     *
     * Validate if the controller and action exist and can be called. In this case
     * it loads the controller and executes the action, otherwise it generates a 404 error.
     *
     * @throws Exception
     */
     static function index() {
        error_reporting(E_ALL ^ E_WARNING);
        ini_set('display_errors', '1');

        require_once ('app/autoloader.php');

        $config = Config::getInstance();

        $controller = $config->get('DEFAULT_CONTROLLER');
        if (!empty($_GET['controller'])) $controller = $_GET['controller'];

        $action = $config->get('DEFAULT_ACTION');
        if (!empty($_GET['action'])) $action = $_GET['action'];

        $controller = $controller . '_controller';
        $controller_path = $config->get('CONTROLLER_PATH') . DIRECTORY_SEP . $controller . PHP_EXT;

        if (!is_file($controller_path)) {
            throw new Exception('404 Not Found - Controller \''. $controller . '\' not exists.');
        }

        if (!is_callable(array($controller, $action))) {
            throw new Exception('404 Not Found - \''. $controller . '->' . $action . '\' not exists.');
        }

        try {
            $controller = new $controller();
            $controller->$action();
        }
        catch (Exception $ex) {
            $view = new View();
            $view->show('404', array('error' => $ex->getMessage()));
        }
    }
}
