<?php
/**
 * Response object
 *
 * @package Custom
 * @author Eddie Jaoude
 */
class Custom_Response {

    /**
     * @var Custom_Response_Interface
     */
    protected static $_responseObject;

    /**
     * @var array
     */
    protected static $_responseObjectsAvailable = array('Custom_Response_Standard');

    /**
     * @static
     * @param string $name
     * @param array $options
     * @return Custom_Response_Interface
     * @throws Custom_Response_Exception
     */
    public static function factory($name = 'Custom_Response_Standard', array $options = array())
    {
        if (!in_array($name, self::$_responseObjectsAvailable)) {
            self::throwException('Response object ' . $name . ' not found');
        }

        self::$_responseObject = new $name;
        self::_setOptions($options);

        return self::$_responseObject;
    }

    /**
     * @static
     * @param array $options
     * @throws Custom_Response_Exception
     */
    protected static function _setOptions(array $options)
    {
        foreach ($options as $k=>$v) {
            $method = 'set' . ucfirst($k);
            if (method_exists(self::$_responseObject, $method) && !empty($v)) {
                self::$_responseObject->{$method}($v);
            } else {
                self::throwException('Method ' . $method . ' not found');
            }
        }
    }

    /**
     * Throw exception
     *
     * @static
     * @param $msg
     * @param Exception|null $e
     * @throws Custom_Response_Exception
     */
    public static function throwException($msg, Exception $e = null)
    {
        throw new Custom_Response_Exception($msg, 0, $e);
    }



}