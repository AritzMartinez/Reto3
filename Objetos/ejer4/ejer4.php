<?php
include "models/Poligono.php";

include "models/Cuadrado.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Medidas del poligono</h1>
<?php
echo "hola ";

$obj = new Cuadrado("azul","13","12");
echo " ".$obj->area();

?>








</body>
</html>
