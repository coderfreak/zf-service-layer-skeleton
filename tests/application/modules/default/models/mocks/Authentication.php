<?php
/**
 * Authentication mock
 */
class Default_Model_Mock_Authentication
{

    /**
     * @return array
     */
    public function authenticate()
    {
        $result = array(
            'access' => true,
            'status' => true,
        );
        return $result;
    }

}