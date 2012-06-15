<?php
/**
 * Response core class
 *
 * @author Eddie Jaoude
 * @package Custom
 */
require_once(APPLICATION_PATH . '/../library/Custom/Response/Interface.php');
class Custom_Response_Core implements Custom_Response_Interface
{

    /**
     * Datasource used eg. Custom_SoapDatasource or Test_Model_Mock_Example
     *
     * @var Custom_Datasource_Interface
     */
    protected $_datasource;

    /**
     * If successful or not
     *
     * @var bool
     */
    protected $_success = false;

    /**
     * Text back from datasource
     *
     * @var string
     */
    protected $_text;

    /**
     * Code from the datasource
     *
     * @var string
     */
    protected $_code;

    /**
     * Data from the datasource
     *
     * @var mixed
     */
    protected $_data;

    /**
     * Get datasource
     *
     * @return Custom_Datasource_Interface
     */
    public function getDatasource()
    {
        return $this->_datasource;
    }

    /**
     * Set datasource
     *
     * @param Custom_Datasource_Interface $datasource
     * @return Custom_Response_Core|Custom_Response_Interface
     */
    public function setDatasource(Custom_Datasource_Interface $datasource)
    {
        if ('production' != APPLICATION_ENV) {
            $this->_datasource = $datasource;
        }
        return $this;
    }

    /**
     * Is success
     *
     * @return boolean
     */
    public function isSuccess()
    {
        return $this->_success;
    }

    /**
     * Set success
     *
     * @param boolean $success
     * @return Custom_Datasource_Interface|Custom_Response_Core
     */
    public function setSuccess($success)
    {
        $this->_success = (bool) $success;
        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Custom_Datasource_Interface|Custom_Response_Core
     */
    public function setText($text)
    {
        $this->_text = (string) $text;
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->_code;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Custom_Datasource_Interface|Custom_Response_Core
     */
    public function setCode($code)
    {
        $this->_code = (string) $code;
        return $this;
    }

    /**
     * Get data
     *
     * @return mixed
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * Set data
     *
     * @param mixed $data
     * @return Custom_Datasource_Interface|Custom_Response_Core
     */
    public function setData($data)
    {
        $this->_data = $data;
        return $this;
    }
}