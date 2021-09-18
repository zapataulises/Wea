<?php
if((isset($_GET['nombre'])) && (isset($_GET['apellido'])) && (isset($_GET['edad']))){
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $edad=$_GET['edad'];
    echo "<p>Nombre:" . $nombre . " " . $apellido ."</p>";
    echo "<p>Edad:" . $edad . "</p>";

}