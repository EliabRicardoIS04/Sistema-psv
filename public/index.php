<?php
require_once '../app/init.php';

$app = new App();


// index.php
// Función para cargar automáticamente las clases
spl_autoload_register(function ($nombre_clase) {
    include 'controladores/' . $nombre_clase . '.php';
});

// Obtener la URL solicitada
$url = isset($_GET['url']) ? $_GET['url'] : 'inicio';

// Dividir la URL en partes
$url_partes = explode('/', $url);

// Obtener el controlador y el método de la URL
$controlador = $url_partes[0] . 'Controller';
$metodo = isset($url_partes[1]) ? $url_partes[1] : 'index';

// Verificar si el controlador y el método existen
if (file_exists('controladores/' . $controlador . '.php')) {
    // Incluir el controlador
    include 'controladores/' . $controlador . '.php';

    // Crear una instancia del controlador
    $controlador_obj = new $controlador();

    // Verificar si el método existe en el controlador
    if (method_exists($controlador_obj, $metodo)) {
        // Llamar al método del controlador
        $controlador_obj->$metodo();
    } else {
        // Método no encontrado, manejar el error
        echo "Método no encontrado";
    }
} else {
    // Controlador no encontrado, manejar el error
    echo "Controlador no encontrado";
}