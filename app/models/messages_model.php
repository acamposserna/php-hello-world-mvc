<?php
/**
 * This class implements the model for generate messages.
 *
 * @version 1.0
 * @author  Antonio Campos (https://github.com/acamposserna)
 */
class messages_model {

    /**
     * Generates a welcome message with the name of the user that is passed as param.
     *
     * @param string $user User name to display in the message.
     * @return string Generated message.
     */
    public function hello($user) {
        $message = "Hello " . $user . "!";
        return $message;
    }
}