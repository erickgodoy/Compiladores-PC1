<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 1</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="d1">
        <form action="prueba.php" method="post">
            <input name="palabra" type="text" placeholder="Ingresar Palabra">
            <input class="b1" type="submit" name="desencriptar" value="Desencriptar">
            <input class="b2" type="submit" name="encriptar" value="Encriptar">
            <input type="text" name="resultado" value="  <?php
                if(isset($resultado)){
                    echo $resultado;   
                }
            ?>">

        </form>
    </div>

</body>
</html>