<?php 

require_once 'models/User.php';
class registerController {

    protected $view;

    function __construct() {
        // parent::__construct();
        // error_log('Login::construct-> Inicio de Login');
    }

    public function show(){
        require 'views/register.php';
    }

    public function registerUser(){
        if (isset($_POST["first_names"]) && isset($_POST["last_names"]) && isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"])) {

            $user = new User();
            
            $user->first_names = $_POST["first_names"];
            $user->last_names = $_POST["last_names"];
            $user->username = $_POST["username"];
            $user->email = $_POST["email"];
            $user->password = $_POST["password"];
            
            $user->save();
            
            header('Location: ' . constant('URL') . "/login");
            return $user;
        }
        
        
    }
}

?>