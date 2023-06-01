<?php
class AlumnoControlador {
    public function mostrarFormulario() {
        // Cargar la vista del formulario
        include 'Alumno/Vista/Formulario.php';
    }

    public function guardarAlumno() {
        // Obtener los datos enviados por el formulario
        $nombre = $_POST['nombre'];
        $grado = $_POST['grado'];

        // Crear un objeto de Alumno utilizando la fábrica concreta
        $alumnoFactory = new AlumnoSistemasFactory(); // O AlumnoPreparatoriaFactory según corresponda
        $alumno = $alumnoFactory->crearAlumno($nombre, $grado);

        // Mostrar la vista de detalles con la información del alumno
        include 'Alumno/Vista/Detalles.php';
    }
}