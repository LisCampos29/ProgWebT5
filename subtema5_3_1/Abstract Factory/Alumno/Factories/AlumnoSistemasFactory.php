<?php
// Fábrica concreta para Alumnos de Sistemas Operativos
class AlumnoSistemasFactory implements FactoryAlumno {
    public function crearAlumno($nombre, $grado) {
        return new AlumnoSistemas($nombre, $grado);
    }
}