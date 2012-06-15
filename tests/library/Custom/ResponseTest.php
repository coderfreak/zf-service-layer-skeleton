<?php

/**
 * Response test
 *
 * @author  Eddie Jaoude
 * @package Custom
 */
require_once(APPLICATION_PATH . '/../library/Custom/Response.php');
class Custom_ResponseTest extends BaseTestCase
{

    protected $_response;

    public function setUp()
    {
        parent::setUp();
        $this->_response = Custom_Response::factory('Custom_Response_Standard');
    }

    /**
     * Test object creation
     *
     * @author Eddie Jaoude
     *
     * @param null
     *
     * @return null

     */
    public function testObjectInstance()
    {
        $this->assertEquals(true, is_object($this->_response));
    }

    public function testObjectDefault()
    {
        $response = Custom_Response::factory();
        $this->assertEquals(true, $response instanceOf Custom_Response_Interface);
        $this->assertEquals(true, $response instanceOf Custom_Response_Standard);
        $this->assertEquals(false, $response->isSuccess());
    }

    /**
     * Test object failure
     *
     * @author Eddie Jaoude
     *
     * @param null
     *
     * @return null

     */
    public function testObjectInstanceFailure()
    {
        try {
            Custom_Response::factory('response_object');
        } catch(Exception $e) {
            return true;
        }
        $this->fail('Exception not found');
    }

    /**
     * Test option success creation
     *
     * @author Eddie Jaoude
     *
     * @param null
     *
     * @return null

     */
    public function testOptionSuccess()
    {
        $options  = array(
            'success' => true
        );
        $response = Custom_Response::factory('Custom_Response_Standard', $options);
        $this->assertEquals(true, $response->isSuccess());
    }

    /**
     * Test option success & code creation
     *
     * @author Eddie Jaoude
     *
     * @param null
     *
     * @return null

     */
    public function testOptionsSuccessAndText()
    {
        $options  = array(
            'success' => true,
            'text'    => 'test-code'
        );
        $response = Custom_Response::factory('Custom_Response_Standard', $options);
        $this->assertEquals(true, $response->isSuccess());
        $this->assertEquals('test-code', $response->getText());
    }


}