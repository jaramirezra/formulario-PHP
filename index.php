<?php
// Front Controller

$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'form/index';
$urlParts = explode('/', $url);

$controllerName = ucfirst($urlParts[0]) . 'Controller';
$method = $urlParts[1] ?? 'index';

// Ruta del archivo del controlador
$controllerPath = 'controller/' . $controllerName . '.php';

if (file_exists($controllerPath)) {
    require_once $controllerPath;
    $controller = new $controllerName();

    if (method_exists($controller, $method)) {
        $controller->$method();
    } else {
        echo "Método no encontrado: $method";
    }
} else {
    echo "Controlador no encontrado: $controllerName";
}
