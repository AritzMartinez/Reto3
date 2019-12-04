<?php

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
$num1= 4;
$num2= 0;
echo $num1." ";
echo $num2." ";

validar($num1,$num2);

function validar ($num1,$num2){
    try{
        if ($num2 == 0 || $num1 == 0){
            throw new Exception("No se puede dividir entre 0");
        }else{
            echo $resul = $num1/$num2;
        }
    }catch (Exception $e){
        echo "Excepcion capturada: ".$e->getMessage();
    }finally{

    }
}
validar();


?>








</body>
</html>
