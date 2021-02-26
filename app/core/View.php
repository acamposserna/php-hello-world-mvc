<?php
/**
 * Manage the views of the application.
 *
 * @version 1.0
 * @author  Antonio Campos (https://github.com/acamposserna)
 */
class View {

    /**
     * Create the variables for the view from the array param and display the page.
     *
     * If the page does not exist it throws the exception '404 - Not found'.
     *
     * @param string $name Name of the view to be shown.
     * @param array $vars Array with the variables an his values for the view.
     * @throws Exception
     */
    public function show($name, $vars = array()) {

        $config = Config::getInstance();
        $view_path = $config->get('VIEW_PATH') . DIRECTORY_SEP . $name . PHP_EXT;

        if (!file_exists($view_path)) {
            throw new Exception('404 Not Found - Template \'' . $name . '\' not exists.');
        }

        if (is_array($vars)) {
            foreach ($vars as $key => $value) {
                $$key = $value;
            }
        }

        include($view_path);
    }
}