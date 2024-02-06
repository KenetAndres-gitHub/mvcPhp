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
        // Obtener solo la ruta relativa eliminando la parte inicial "/pruebas"
        $path = parse_url($uri, PHP_URL_PATH);
        $path = str_replace('/pruebas', '', $path);

         // Extraer los parámetros de la URI
         $parts = explode('/', $path);  $route = '/';
         $parametro = end($parts);
         if((count($parts))-1 >= 2){
            foreach($parts as $item){
                //Guarda en la ruta todo aquello distinto de espacios vacíos y el parámetro
                if($item != "" && $item != $parametro){ $route .= $item."/"; }
            }
         }else{
            foreach($parts as $item){
                if($item != "" ){ $route .= $item . ($item == $parametro ? '' : '/');}
            }
         }
        // Verificar si la ruta está definida en las rutas estáticas
        if (isset($this->routes[$route])) {
            $handler = $this->routes[$route];
            $handler($parametro);
            return;
        }
        // Si no se encontró ninguna coincidencia, manejar error 404
        http_response_code(404);
        echo "Página no encontrada";
    }
}

// Instanciar el enrutador pasando la conexión PDO
$router = new Router();

// Definir las rutas y los controladores correspondientes
$router->addRoute('/users', function() {
    // Lógica para cargar la acción 'index' del controlador 'UserController'
    $controller = new UserController();
    $controller->index();
});

// Definir las rutas y los controladores correspondientes
$router->addRoute('/users/edit/', function($id) {
    // Lógica para cargar la acción 'index' del controlador 'UserController'
    $controller = new UserController();
    $controller->edit($id);
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
