<?php
// Fábrica concreta para Alumnos de Programación Web
class AlumnoWebFactory implements FactoryAlumno {
    public function crearAlumno($nombre, $grado) {
        return new AlumnoWeb($nombre, $grado);
    }
}