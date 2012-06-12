<?php
/**
 * Authentication mock
 */
class Default_Model_Mock_AuthenticationException
{

    /**
     * @throws Exception
     */
    public function authenticate()
    {
        throw new Exception('Something bad happened');
    }

}