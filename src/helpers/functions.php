<?php 

$config = require __DIR__.'/../config/config.php';
define('BASE_PATH', $config['base_url']);
define('ASSETS_PATH', $config['assets_url']);
define('SRC_PATH', $config['src_url']);

function getNoticias() {
    return [
        [
            'titulo' => 'parte médico: evolución favorable',
            'descripcion' => 'El delantero entrenó parcialmente con el grupo.',
            'imagen' => 'lesion.jpg',
            'duracion' => '3 min',
            'fecha' => 'Hace 2 horas',
            'noticia' => ''
        ],
        [
            'titulo' => 'En la mesa: victoria fuera de la cancha',
            'descripcion' => 'Cruz azul gana un partido por alineación indebida',
            'imagen' => 'alineacionIndebida.jpeg',
            'duracion' => '4 min',
            'fecha' => 'Hace 5 horas',
            'noticia' => ''
        ],
        [
            'titulo' => 'Posible baja: la pérdida de una pieza clave',
            'descripcion' => 'El defensor Gonzalo Piovi a punto de salir de Cruz Azul.',
            'imagen' => 'piovi.jpeg',
            'duracion' => '3 min',
            'fecha' => 'Hace 1 hora',
            'noticia' => ''
        ],
        [
            'titulo' => 'Victora aplastante: los felinos lloran',
            'descripcion' => 'Victoria de cruz azul ante pumas en amistoso.',
            'imagen' => 'victoria.jpg',
            'duracion' => '5 min',
            'fecha' => 'Hace 2 hora',
            'noticia' => ''
        ],
        [
            'titulo' => 'Fuertes rumores: un ganador de champions a cruz azul',
            'descripcion' => 'Rumores de Robert Lewandowski lo acercan a la noria',
            'imagen' => 'lewan.jpeg',
            'duracion' => '5 min',
            'fecha' => 'Hace 6 horas',
            'notic'
        ],
        [
            'titulo' => 'Seleccionados nacionales: elegidos para representar a sus selecciones',
            'descripcion' => 'Sale la lista de los seleccionados para esta fecha fifa',
            'imagen' => 'seleccion.jpg',
            'duracion' => '2 min',
            'fecha' => 'Hace 10 horas',
            'noticia' => ''
        ]
    ];
}

?>