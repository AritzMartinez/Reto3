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


validar(1,5);
validar(1,3);
validar(1,0);


function validar ($num1,$num2){
    try{
        if ($num2 == 0 || $num1 == 0){
            throw new Exception("No se puede dividir entre 0");
        }else{
            echo $resul = $num1/$num2;
            echo "\n";
        }
    }catch (Exception $e){
        echo "Excepcion capturada: ".$e->getMessage();

    }finally{

    }
}


?>








</body>
</html>
