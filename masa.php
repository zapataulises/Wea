<?php
if(isset($_GET['altura']) && isset($_GET['peso'])){
    $altura=$_GET['altura'];
    $peso=$_GET['peso'];
    $imc=$peso/($altura*$altura);
    switch ($imc) {
        case ($imc<18.50):
            echo $imc. ' = Peso Bajo';
            break;
        case ($imc>=18.50 && $imc<=24.99):
            echo $imc. ' = Peso Normal';
            break;
        case ($imc>=25 && $imc<30):
            echo $imc. ' = Sobrepeso';
            break;
        case ($imc>=30):
            echo $imc. ' = Obesidad';
            break;
        default:
            break;
    }


}