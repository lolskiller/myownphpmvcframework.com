<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 28/11/13
 * Time: 22:10
 */

namespace library;


class Controller 
{
    protected $_model;
    protected $_view;
    protected $_params;

    function __construct()
    {
    }

    public function setParams($_params)
    {
        $this->_params = $_params;
    }
} 