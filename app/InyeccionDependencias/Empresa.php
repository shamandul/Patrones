<?php
/**
 * Empresa
 *
 * @category Empresa
 * @package  Empresa
 * @author   jesus <shamandul@gmail.com>
 * @license  MIT https://www.example.com
 * @link     https://www.example.com
 */
namespace App\InyeccionDependencias;
use App\InyeccionDependencias\IEmpleado;

/**
 * Clase Empresa
 *
 * @category Empresa
 * @package  Empresa
 * @author   jesus <shamandul@gmail.com>
 * @license  MIT https://www.example.com
 * @link     https://www.example.com
 */
class Empresa
{
    private IEmpleado $_empleado;
    /**
     * Constructor
     *
     * @param \App\InyeccionDependencias\IEmpleado $empleado empleado
     */
    function __construct(IEmpleado $empleado)
    {
        $this->_empleado = $empleado;
    }

    /**
     * Obtener datos
     *
     * @return void
     */
    function getDatos()
    {
        echo $this->_empleado->getNombre();
        echo "</br>";
        echo $this->_empleado->getCorreo();
        echo "</br>";
        echo $this->_empleado->getHorario();
        echo "</br>";
        echo $this->_empleado->getSalario();
        echo "</br>";
    }
}
