<?php
include_once('Persona.php');
$Ramirez1 = new Persona();
$Ramirez1 -> nombre = 'Jorgito Firulais Ramirez Perez Martinez';
$Ramirez1 -> peso = 89;
$Ramirez1 -> estatura = 1.5;

$Ramirez1 -> calcularIMC('Jorgito Firulais Ramirez Perez Martinez',60,1.5,'. Su peso corresponde al conjunto: ');


?>