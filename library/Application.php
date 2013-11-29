<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 24/11/13
 * Time: 16:36
 */

namespace library;

class Application
{
    private $_frontController;

    function __construct()
    {
        spl_autoload_register(array($this, 'loader'));
        $this->_frontController = new FrontController();
    }

    public function bootstrap()
    {
        //load configuration
    }

    public function run()
    {
        return $this->_frontController;
    }

    private function loader($className)
    {
        require_once APPLICATION_PATH . '/' . str_replace("\\", "/", $className) . '.php';
    }
}