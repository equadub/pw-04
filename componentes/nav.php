<nav>
    <ul>

<?php
foreach ($secciones as $llave => $valor){
    if (!isset($_GET['seccion']) and $llave === 'p1'){
        $activo = '"activo"';
    }
    if (isset($_GET['seccion']) and $_GET['seccion'] == $llave){
        $activo = '"activo"';
    }
    if ($llave === 'p1'){
        $destino = './';
    }
    echo "<li><a class=$activo href=\"$destino\"> $valor[titulo] </a></li>";
}
?>

    </ul>
</nav>