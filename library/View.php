<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 21/11/13
 * Time: 17:13
 */

namespace library;

class View
{
    private $_title;
    private $_description;
    private $_layout;
    private $_viewScript;
    private $_viewVariables;
    private $_viewHelpers;

    function __construct($_title,
                         $_description,
                         $_layout,
                         $_viewScript,
                         $_viewVariables = array(),
                         $_viewHelpers = array())
    {
        $this->_title = $_title;
        $this->_description = $_description;
        $this->_layout = $_layout;
        $this->_viewScript = $_viewScript;
        $this->_viewHelpers = $_viewHelpers;
        $this->_viewVariables = $_viewVariables;
    }

    //En cualquier método hay acceso a las propiedades
    //esto sucede también dentro del fichero requerido
    public function render()
    {
        foreach ($this->_viewHelpers as $helper) {
            require_once $helper;
        }
        require_once $this->_layout;
    }

    public function content()
    {
        require_once $this->_viewScript;
    }

    public function title()
    {
        return $this->_title;
    }

    public function description()
    {
        return $this->_description;
    }

}