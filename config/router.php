<?php
// Enrutador básico

use App\Controller\UserController;

class Router {
    private $routes = [];

    // Método para añadir rutas
    public function addRoute($route, $handler) {
        $this->routes[$route] = $handler;
    }

    // Método para manejar la solicitud y llamar al controlador correspondiente
    public function handleRequest($uri) {
        // Comprobar si la URI comienza con '/pruebas'
    if (strpos($uri, '/pruebas') === 0) {
        // Eliminar '/pruebas' de la URI para obtener la ruta relativa
        $relativeUri = substr($uri, strlen('/pruebas'));

        // Verificar si la ruta relativa está definida en las rutas
        if (array_key_exists($relativeUri, $this->routes)) {
            $handler = $this->routes[$relativeUri];
            $handler();
        } else {
            // Manejar error 404
            http_response_code(404);
            echo "Página no encontrada";
        }
    } else {
        // Si la URI no comienza con '/pruebas', manejar error 404
        http_response_code(404);
        echo "Página no encontrada";
    }
    }
}

// Instanciar el enrutador
$router = new Router();

// Definir las rutas y los controladores correspondientes
$router->addRoute('/users', function() {
    // Lógica para cargar la acción 'index' del controlador 'UserController'
    include('controllers/UserController.php');
    $controller = new UserController();
    $controller->index();
});

$router->addRoute('/users/create', function() {
    // Lógica para cargar la acción 'create' del controlador 'UserController'
    include('controllers/UserController.php');
   // $controller = new UserController();
   // $controller->create();
});

// Obtener la URI actual
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Manejar la solicitud
$router->handleRequest($uri);
