<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Destalle de bodegas</h1>
{{--<form action="/edit/{{$vinos->id}}" method="get">
    <input type="submit" name="editar" value="Editar">
</form>--}}

<input type="button" value="Editar" name="Editar" OnClick="location.href='/edit/{{$vinos->id}}?modo=Editar'">
<form action="/update/{{$vinos->id}}" method="get">
    <div id="datos">
        <?php
        if (!isset($_GET['modo'])) {
            echo "
        <style>
        #datos{
        pointer-events: none;
        }
        </style>";
        }
        ?>

        <p>
            <label>Nombre</label>
            <input type="text" value=" {{$vinos->nombre}}" id="nombre" name="nombre">
        </p>
        <p>
            <label>Descripcion</label>
            <input type="text" value=" {{$vinos->descripcion}}" id="descripcion" name="descripcion">
        </p>
        <p>
            <label>Año</label>
            <input type="text" value=" {{$vinos->ano}}" id="ano" name="ano">
        </p>
        <p>
            <label>Alcohol</label>
            <input type="text" value=" {{$vinos->alcohol}}" id="alcohol" name="alcohol">
        </p>
        <p>
            <label>Tipo</label>
            <input type="text" value=" {{$vinos->tipo}}" id="tipo" name="tipo">
        </p>
        <input type="submit" name="guardar" value="Guardar">
    </div>
</form>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: msimm
 * Date: 24/12/2019
 * Time: 13:37
 */
?>