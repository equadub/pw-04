<!DOCTYPE html>
<?php include 'componentes/secciones.php'; ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="./css/estilos.css">
        <title>PW-04</title>
    </head>
    <body>

        <div class="container">
            <?php
            include 'componentes/header.php';
            include 'componentes/nav.php';
            ?>
            <section>
                <?php
                echo "<h2>$titulo</h2>";
                echo "<img src=\"$imagen\" alt=\"$titulo\">";
                echo "<p>$contenido</p>";
                ?>
            </section>
            <?php
            include 'componentes/footer.php';
            ?>
        </div>
        
    </body>
</html>