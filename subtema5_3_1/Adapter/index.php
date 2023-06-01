<?php
require_once 'modelo.php';
require_once 'vista.php';
require_once 'adaptador.php';
require_once 'controlador.php';

$modelo = new ModeloConcreto();
$adaptador = new AdaptadorModeloVista($modelo);
$vista = new VistaConcreta();
$controlador = new Controlador($adaptador);
$controlador->ejecutar();