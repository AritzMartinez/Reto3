

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

include 'Objetos/models/objPublicado.php';
use Objetos\Models\Publicacion;
$publi = new Publicacion("a", "1990","a", "b","el texto ");

$publi->leer();
$publi->escribir("Esto es el string");

?>








</body>
</html>
