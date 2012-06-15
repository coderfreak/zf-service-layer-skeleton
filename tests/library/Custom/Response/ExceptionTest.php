<?php

/**
 * Response test
 *
 * @author  Eddie Jaoude
 * @package Custom
 */
require_once(APPLICATION_PATH . '/../library/Custom/Response/Exception.php');
class Custom_Response_FactoryExceptionTest extends BaseTestCase
{

    protected $_exception;

    public function setUp() {
        parent::setUp();
        $this->_exception = new Custom_Response_Exception('test message', 123);
    }

    /**
     * Test object creation
     *
     * @author Eddie Jaoude
     * @param null
     * @return null
     *
     */
    public function testObjectInstance() {
        $this->assertEquals(true, is_object($this->_exception));
        $this->assertEquals(true, $this->_exception instanceof Exception);
    }


}