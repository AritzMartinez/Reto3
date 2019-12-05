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

$paci = new Paciente("juan","pedro",1);




if (isset($_GET['accion'])){
    $acc = $_GET['accion'];
    switch ($acc){
        case 'enfermar':
            $paci->enfermar();
            break;
        case 'curar':
            $paci->curar();
            break;
    }
}



?>
<form action="ejer2.php" method="get">
    <input type="submit" name="accion" value="enfermar">
    <input type="submit"  name="accion" value="curar">

</form>







</body>
</html>
