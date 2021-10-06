<?php

Class Persona{
    public $nombre;
    public $peso;
    public $estatura;
    public $stringGenerico;

    public function calcularIMC($nombre, $peso, $estatura, $stringGenerico){
        if($estatura!=null&&$peso!=null){
            $IMC = $peso/($estatura**2);
            echo '<h1>CALCULADORA DE IMC</h1><br>';
            if($IMC < 18.5){
                echo '<h2>IMC: '.$IMC.'</h2><br>';
                echo 'Felicidades '.$nombre.$stringGenerico.'Delgadez o bajo peso.<br>';
            }
            elseif($IMC >= 18.5 && $IMC <= 24.9){
                echo '<h2>IMC: '.$IMC.'</h2><br>';
                echo 'Enhorabuena '.$nombre.$stringGenerico.'Normales o peso saludable.<br>';
            }
            else{
                echo '<h2>IMC: '.$IMC.'</h2><br>';
                echo 'Carnal bajale a las tortillas😱 '.$nombre.$stringGenerico.'Obesidad.<br>';
            }
            
        }
        else{
            echo 'Inserte algun valor.';
        }
    }
}

?>