<?php
echo '<link rel="stylesheet" href="style.css">';
if (isset($_GET['limite'])) {

    $limite=$_GET['limite'];
    echo "<table><thead>";
for ($k=0; $k <= $limite; $k++) { 
    echo "<th>".$k."</th>";
}
echo "</thead>";


for ($i=1; $i <=$limite; $i++) {
    echo "<tr><th>".$i."</th>";
    for ($j=1; $j <=$limite ; $j++) { 
        $result = ($i*$j);
        if ($result == ($j*$j)) {
            echo "<td class='raiz'>".$result."</td>";
        }
        else{
            echo "<td>".$result."</td>";}
        
    }
    echo "</tr>";
}
echo '</table>';
}