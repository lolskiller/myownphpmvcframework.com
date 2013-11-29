<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 20/11/13
 * Time: 17:04
 */

namespace application\controllers;

use library as Library;

class IndexController extends Library\Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function indexAction()
    {
        $title = 'MyOwnPhpMVCFramework';
        $description = 'Create your own Php MVC Framework from scratch';
        $layout = '../application/layouts/default.phtml';
        $content = '../application/views/scripts/index/index.phtml';
        $viewVariables = array();
        $viewHelpers = array();
        $this->_view = new Library\View($title, $description, $layout, $content, $viewVariables, $viewHelpers);
        return $this->_view->render();
    }
} 