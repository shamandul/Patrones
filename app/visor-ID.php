<?php
/**
 * Visor Inyección de dependencia
 *
 * @category Visor
 * @package  Empleado
 * @author   jesus <shamandul@gmail.com>
 * @license  MIT https://www.example.com
 * @link     https://www.example.com
 */
namespace App;

require_once "./../vendor/autoload.php";
use App\InyeccionDependencias\Empleado;
use App\InyeccionDependencias\Jefe;
use App\InyeccionDependencias\Empresa;

$empleado = new Empleado;
$empresa = new Empresa($empleado);
$empresa->getDatos();

echo "<hr>";

$jefe = new Jefe;
$empresa = new Empresa($jefe);
$empresa->getDatos();
