<?php
/**
 * Jefe
 *
 * @category Interfaz
 * @package  Empleado
 * @author   jesus <shamandul@gmail.com>
 * @license  MIT https://www.example.com
 * @link     https://www.example.com
 */
namespace App\InyeccionDependencias;

/**
 * Clase Jefe
 *
 * @category Jefe
 * @package  Empleado
 * @author   jesus <shamandul@gmail.com>
 * @license  MIT https://www.example.com
 * @link     https://www.example.com
 */
class Jefe implements IEmpleado
{
    private string $_msg;
    /**
     * ObtenerHorario
     *
     * @return string
     */
    public function getHorario()
    {
        $this->_msg = "Horario del jefe";
        return $this->_msg;
    }
    /**
     * Obtener Nombre
     *
     * @return string
     */
    function getNombre()
    {
        $this->_msg = "Jefe uno";
        return $this->_msg;
    }
    /**
     * Obtener Correo
     *
     * @return string
     */
    function getCorreo()
    {
        $this->_msg = "jefe_uno@prueba.com";
        return $this->_msg;
    }
    /**
     * Obtener Salario
     *
     * @return string
     */
    function getSalario()
    {
        $this->_msg = "2500";
        return $this->_msg;
    }
}
