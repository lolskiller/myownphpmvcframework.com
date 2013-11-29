<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 27/11/13
 * Time: 10:46
 */

namespace application\controllers;
use library as Library;

class ErrorController extends Library\Controller
{
    function indexAction()
    {
        $title = 'Error - 404';
        $description = 'Page not found';
        $layout = '../application/layouts/default.phtml';
        $content = '../application/views/scripts/error/index.phtml';
        $viewVariables = array();
        $viewHelpers = array();
        $this->_view = new Library\View($title, $description, $layout, $content, $viewVariables, $viewHelpers);
        return $this->_view->render();
    }
} 