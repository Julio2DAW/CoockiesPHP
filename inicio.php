<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Coockies</title>
    </head>
    <body>
        <h1>Coockies</h1>
    </body>
</html>
<?php
    setcookie("usuario",180,time()+60);
    echo $_COOKIE['usuario'];
?>