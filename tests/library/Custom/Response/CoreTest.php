<?php

/**
 * Response Base test
 *
 * @author  Eddie Jaoude
 * @package Custom
 */
require_once(APPLICATION_PATH . '/../library/Custom/Response/Core.php');
require_once(APPLICATION_PATH . '/../library/Custom/Datasource/Mock.php');
class Custom_Response_CoreTest extends BaseTestCase
{

    protected $_response;

    public function setUp()
    {
        parent::setUp();
        $this->_response = new Custom_Response_Core;
    }

    /**
     * Test object creation
     *
     * @param null
     *
     * @return null

     */
    public function testObjectInstance()
    {
        $this->assertEquals(true, is_object($this->_response));
    }

    /**
     * Test setters
     *
     * @param void
     * @return void
     */
    public function testSetters()
    {
        $datasource = new Custom_Datasource_Mock;

        $this->_response->setDatasource($datasource);
        $this->assertEquals($datasource, $this->_response->getDatasource());

        $this->_response->setSuccess(true);
        $this->assertEquals(true, $this->_response->isSuccess());

        $this->_response->setText('test message');
        $this->assertEquals('test message', $this->_response->getText());

        $this->_response->setCode('test code');
        $this->assertEquals('test code', $this->_response->getCode());

        $this->_response->setData(array(1,2,3));
        $this->assertEquals(array(1,2,3), $this->_response->getData());
    }


}