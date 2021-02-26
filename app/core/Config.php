<?php
/**
 * Manage the config variables of the application.
 *
 * This class implements the singleton pattern that restricts the instantiation of a class
 * to one "single" instance. This is useful when you need only one object across all the
 * execution of the application.
 *
 * @version 1.0
 * @author  Antonio Campos (https://github.com/acamposserna)
 */
class Config {
    private $vars;
    private static $instance;

    /**
     * Config class constructor.
     */
    private function __construct() {
        $this->vars = array();
    }

    /**
     * Set value of a config variable.
     *
     * @param string $name Variable name.
     * @param string $value Variable value.
     */
    public function set($name, $value) {
        if (!isset($this->vars[$name])) {
            $this->vars[$name] = $value;
        }
    }

    /**
     * Get value of a config variable.
     *
     * @param string $name Variable name.
     * @return string Variable value.
     */
    public function get($name) {
        if (isset($this->vars[$name])) {
            return $this->vars[$name];
        }
    }

    /**
     * Returns the only instance of the class.
     *
     * If the instance is not created, then create it.
     *
     * @return class Config class instance.
     */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class();
        }
        return self::$instance;
    }
}