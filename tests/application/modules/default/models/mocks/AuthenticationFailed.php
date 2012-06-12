<?php
/**
 * Authentication mock
 */
class Default_Model_Mock_AuthenticationFailed
{

    /**
     * @return array
     */
    public function authenticate()
    {
        $result = array(
            'access' => false,
            'status' => false,
        );
        return $result;
    }

}