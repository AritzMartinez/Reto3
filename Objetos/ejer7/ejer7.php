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

validar(2,5);
validar(2,3);
validar(1,0);
validar(-1,0);

function validar ($num1,$num2){
    try{
        if ($num1 < 0 || $num2 < 0 ){
            throw new Exception("No se peude calular con numeros negativos");
        }else{
            echo $resul = $num1 * $num2." ";
        }
    }catch (Exception $e){
        echo "Excepcion capturada: ".$e->getMessage();
    }finally{

    }
}


?>








</body>
</html>