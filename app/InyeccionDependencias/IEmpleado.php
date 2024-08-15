<?php
/**
 * IEmpleados
 *
 * @category Interfaz
 * @package  Empleado
 * @author   jesus <shamandul@gmail.com>
 * @license  MIT https://www.example.com
 * @link     https://www.example.com
 */
namespace App\InyeccionDependencias;

/**
 * Interfaz de empleado
 *
 * @category Interfaz
 * @package  Empleado
 * @author   jesus <shamandul@gmail.com>
 * @license  MIT https://www.example.com
 * @link     https://www.example.com
 */
interface IEmpleado
{
    /**
     * Obtener horario
     *
     * @return string
     */
    public function getHorario();
    /**
     * Obtener nombre
     *
     * @return string
     */
    public function getNombre();
    /**
     * Obtener Correo
     *
     * @return string
     */
    public function getCorreo();
    /**
     * Obtener salario
     *
     * @return string
     */
    public function getSalario();
}
