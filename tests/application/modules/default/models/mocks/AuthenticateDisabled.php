<?php
/**
 * Authentication mock
 */
class Default_Model_Mock_AuthenticationDisabled
{

    /**
     * @return array
     */
    public function authenticate()
    {
        $result = array(
            'access' => true,
            'status' => false,
        );
        return $result;
    }

}