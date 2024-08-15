<?php
/**
 * Empleados
 *
 * @category Interfaz
 * @package  Empleado
 * @author   jesus <shamandul@gmail.com>
 * @license  MIT https://www.example.com
 * @link     https://www.example.com
 */
namespace App\InyeccionDependencias;

/**
 * Clase Empleado
 *
 * @category Empleado
 * @package  Empleado
 * @author   jesus <shamandul@gmail.com>
 * @license  MIT https://www.example.com
 * @link     https://www.example.com
 */
class Empleado implements IEmpleado
{
    private string $_msg;
    /**
     * ObtenerHorario
     *
     * @return string
     */
    public function getHorario()
    {
        $this->_msg = "Horario del empleado";
        return $this->_msg;
    }
    /**
     * Obtener Nombre
     *
     * @return string
     */
    function getNombre()
    {
        $this->_msg = "Empleado uno";
        return $this->_msg;
    }
    /**
     * Obtener Correo
     *
     * @return string
     */
    function getCorreo()
    {
        $this->_msg = "empleado_uno@prueba.com";
        return $this->_msg;
    }
    /**
     * Obtener Salario
     *
     * @return string
     */
    function getSalario()
    {
        $this->_msg = "1500";
        return $this->_msg;
    }
}
