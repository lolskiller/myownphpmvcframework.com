<?php
/**
 * Created by PhpStorm.
 * User: ismael
 * Date: 20/11/13
 * Time: 18:13
 */

namespace application\models;

class CalculadoraModel
{
    private $_op1;
    private $_op2;
    private $_resultado;

    function __construct()
    {
        $this->_resultado = null;
    }

    function sumar()
    {
        if ($_POST) {
            $this->_op1 = $_POST['op1'];
            $this->_op2 = $_POST['op2'];
            $this->_resultado = $this->_op1 + $this->_op2;
        } else {
            $this->_resultado = null;
        }
    }

    /**
     * @return null
     */
    public function getResultado()
    {
        return $this->_resultado;
    }

    /**
     * @return mixed
     */
    public function getOp1()
    {
        return $this->_op1;
    }

    /**
     * @return mixed
     */
    public function getOp2()
    {
        return $this->_op2;
    }

}