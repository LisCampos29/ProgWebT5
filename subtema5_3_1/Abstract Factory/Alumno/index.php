<?php
// Incluir las clases y archivos necesarios
require 'Alumno/Alumno.php';
require 'Alumno/AlumnoSistemas.php';
require 'Alumno/AlumnoWeb.php';
require 'Alumno/Factories/AlumnoFactory.php';
require 'Alumno/Factories/AlumnoSistemasFactory.php';
require 'Alumno/Factories/AlumnoWebFactory.php';
require 'Controlador/AlumnoControlador.php';

// Obtener el parámetro "action" de la solicitud
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Crear una instancia del controlador de Alumno
$alumnoController = new AlumnoControlador();

// En función del valor de "action", llamar al método correspondiente del controlador
switch ($action) {
    case 'formulario':
        $alumnoController->mostrarFormulario();
        break;
    case 'guardar':
        $alumnoController->guardarAlumno();
        break;
    default:
        // Página principal
        echo "Bienvenido a la página principal";
        break;
}
/* //Ejemplo de uso en el programa principal
$factorySistemas = new AlumnoSistemasFactory();
$alumnoSistemas = $factorySistemas->crearAlumno("Jessi", 6);
$alumnoSistemas->mostrarInformacion();

$factorySistemas = new AlumnoWebFactory();
$alumnoWeb = $factorySistemas->crearAlumno("Sandi", 6);
$alumnoWeb->mostrarInformacion();
*/