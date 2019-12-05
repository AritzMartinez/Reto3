<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Medidas del poligono</h1>
<?php
require "vendor/autoload.php";
use SebastianBergmann\Timer\Timer;



for ($i = 1; $i <= 10; $i++) {
    Timer::start();
    echo rand(0,9)." ";


}
$time = Timer::stop();
print Timer::secondsToTimeString($time);


?>

</body>
</html>