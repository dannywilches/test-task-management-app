<?php 

class App {

    function __construct(){

        require_once 'vendor/autoload.php';
        require_once 'config/database.php';
        
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = @trim($url, '/');
        $url = explode('/', $url);
        
        if (empty($url[0])) {
            error_log('APP::construct-> no hay controlador especificado');
            $fileController = 'controller/LoginController.php';
            require_once $fileController;
            $controller = new LoginController();
            $controller->show();
            return false;
        }
        
        $fileController = 'controller/' . $url[0] . 'Controller.php';
        if (file_exists($fileController)) {
            require_once $fileController;
            $nameController = $url[0]."Controller";
            $controller = new $nameController;

            if (!isset($url[1])) {
                $controller->show($url[0]);
            }
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {        
                    $controller->{$url[1]}();
                }
                else {
                    // No existe el metodo 
                }
            }
            else {
                // No hay metodo para cargar, se carga el metodo por default
                // $controller->render();
            }
        }
        else {
            // No existe el controlador
        }

    }

}

?>