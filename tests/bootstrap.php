<?php
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(dirname(__FILE__) . '/../library'),
    get_include_path(),
)));

defined('APPLICATION_ENV') || define('APPLICATION_ENV', 'testing');
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

require_once 'Zend/Loader/Autoloader.php';
$autoloader = Zend_Loader_Autoloader::getInstance();

/**
 * Base Controller Test Class
 *
 * All controller tests should extend this
 */
abstract class BaseTestCase extends Zend_Test_PHPUnit_ControllerTestCase {

    protected $_em;

    public function setUp() {
        parent::setUp();
    }

    public function tearDown() {

    }

}