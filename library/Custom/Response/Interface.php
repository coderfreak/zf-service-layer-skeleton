<?php
/**
 * Response interface
 *
 * @author Eddie Jaoude
 * @package Custom
 */
interface Custom_Response_Interface
{

    /**
     * Get datasource
     *
     * @abstract
     * @return Custom_Datasource_Interface
     */
    public function getDatasource();

    /**
     * Set datasource
     *
     * @abstract
     * @param Custom_Datasource_Interface $source
     * @return Custom_Response_Interface
     */
    public function setDatasource(Custom_Datasource_Interface $source);

    /**
     * Get success
     *
     * @abstract
     * @return bool
     */
    public function isSuccess();

    /**
     * Set success
     *
     * @abstract
     * @param bool $success
     * @return Custom_Datasource_Interface
     */
    public function setSuccess($success);

    /**
     * Get text
     *
     * @abstract
     * @return string
     */
    public function getText();

    /**
     * Set text
     *
     * @abstract
     * @param string $text
     * @return Custom_Datasource_Interface
     */
    public function setText($text);

    /**
     * Get code
     *
     * @abstract
     * @return string
     */
    public function getCode();

    /**
     * Set code
     *
     * @abstract
     * @param string $code
     * @return Custom_Datasource_Interface
     */
    public function setCode($code);

    /**
     * Get data
     *
     * @abstract
     * @return mixed
     */
    public function getData();

    /**
     * Set data
     *
     * @abstract
     * @param $data
     * @return Custom_Datasource_Interface
     */
    public function setData($data);

}