<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php
$titulo= "hola mundo";
$nombres= array("aaronplay", "dmoria","LilMeeh",
);

$mostrar= count($nombres);

if (isset($_GET["mostrar"])) {
    $mostrar= $_GET["mostrar"];
}


echo"<ul>";
for ($i=0; $i < min($mostrar, count($nombres)) ; $i++) { 
    echo "<li>".$nombres[$i]."</li>";
}
echo"</ul>";

echo "<a href='?mostrar=2'>ver 2bots </a>\t";

echo "<a href='?mostrar=1'>ver al mas bot </a>";

echo "<a href='?mostrar=3'>ver a bots y al re capo del meeh </a>";

?>
</form>
</body>
</html>

