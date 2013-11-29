<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 20/11/13
 * Time: 17:04
 */

namespace application\controllers;

use application\models as Models;
use library as Library;

class CalculadoraController extends Library\Controller
{
    function __construct()
    {
        parent::__construct();
        $this->_model = new Models\CalculadoraModel();
    }

    function sumarFormAction()
    {
        $title = 'SumarForm';
        $description = 'Suma de números';
        $layout = '../application/layouts/default.phtml';
        $content = '../application/views/scripts/calculadora/sumarForm.phtml';
        $viewVariables = array();
        $viewHelpers = array('../application/views/helpers/ShowFormHelper.php');
        $this->_view = new Library\View($title, $description, $layout, $content, $viewVariables, $viewHelpers);
        return $this->_view->render();
    }

    function sumarAction()
    {
        $this->_model->sumar();
        $title = 'SumarForm';
        $description = 'Suma de números - Resultado';
        $layout = '../application/layouts/default.phtml';
        $content = '../application/views/scripts/calculadora/sumar.phtml';
        $viewVariables = array('resultado' => $this->_model->getResultado());
        $viewHelpers = array();
        $this->_view = new Library\View($title, $description, $layout, $content, $viewVariables, $viewHelpers);
        return $this->_view->render();
    }

    function restarAction()
    {

    }

    function multiplicarAction()
    {

    }

    function dividirAction()
    {

    }
} 