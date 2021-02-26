<?php
/**
 * This class implements the home page actions.
 *
 * @version 1.0
 * @author  Antonio Campos (https://github.com/acamposserna)
 */
class home_controller {

    /**
     * This is the default action for the home page.
     *
     * @throws Exception
     */
    public function index()
    {

        $id = session_id();
        if (empty($id)) {
            session_start();
            $config = Config::getInstance();
            $_SESSION['user'] = $config->get('USER');
        }

        if (!isset($_SESSION['user'])) {
            throw new Exception('404 Not Found - No user logged.');
        }

        $model = new messages_model();
        $message = $model->hello($_SESSION['user']);

        $view = new View();
        $view->show('home', array('message' => $message));
    }
}