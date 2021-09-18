<?php
if (isset($_GET['importe'])) {
    $importe= $_GET['importe'];
    echo'<h1>Interes Mensual de 4%</h1>
    <h2>importe inicial de = $'.$importe.'</h2>;
    <table>';
    for ($i=1; $i <= 12 ; $i++) { 
       $importe=$importe*1.04;
       echo '<tr><td>Mes = ' .$i.'</td><td>'.$importe.'</td></tr>';

    }
    
    echo'</table>';

}