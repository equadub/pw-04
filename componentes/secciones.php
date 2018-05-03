<?php

$secciones = [
    'p1' => $inicio = [
        'titulo' => 'Inicio',
        'contenido' => 'Bienvenido a nuestra homepage',
        'imagen' => 'http://lorempixel.com/400/200/sports/1/',
    ],
    'p2' => $tienda = [
        'titulo' => 'Tienda',
        'contenido' => 'Bienvenido a nuestra tienda',
        'imagen' => 'http://lorempixel.com/400/200/sports/2/',
    ],
    'p3' => $contacto = [
        'titulo' => 'Contacto',
        'contenido' => 'Escríbenos',
        'imagen' => 'http://lorempixel.com/400/200/sports/3/',
    ],
    'p4' => $about = [
        'titulo' => 'Sobre nosotros',
        'contenido' => 'Somos una empresa ficticia, existente únicamente en el marco de este ejercicio de programación',
        'imagen' => 'http://lorempixel.com/400/200/',
    ],
];

if (isset($_GET['seccion'])){
    $seccion = $_GET['seccion'];
}if (!isset($_GET['seccion'])){
    $seccion = 'p1';
}

$titulo = $secciones[$seccion]['titulo'];
$contenido = $secciones[$seccion]['contenido'];
$imagen = $secciones[$seccion]['imagen'];

?>