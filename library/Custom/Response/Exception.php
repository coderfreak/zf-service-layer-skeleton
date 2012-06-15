<?php

/**
 * Exception for Custom_Response_Exception
 *
 * @author  Eddie Jaoude
 * @package Custom
 */

class Custom_Response_Exception extends Exception
{

    /**
     * Constructor
     *
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Display string version of object
     *
     * @param void
     * @return string
     */
    public function __toString() {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }


}