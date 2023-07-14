<?php 

require_once 'models/User.php';
class loginController {

    protected $view;

    function __construct() {
        // parent::__construct();
        // error_log('Login::construct-> Inicio de Login');
    }

    public function show(){
        require 'views/login.php';
    }

    public function loginSession(){
        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];

            $user = User::where('email', $email)->where('password', $password)->first();
            
            if (!$user) {
                header('Location: ' . constant('URL') . "/login?errors=1");
            }
            else {
                session_start();
                $_SESSION["user_id"] = base64_encode($user->id_user);
                header('Location: ' . constant('URL') . "/task");
            }
            
            return $user;
        }
        else {
            header('Location: ' . constant('URL') . "/login?errors=1");
        }
    }

    public function closeSession(){
        session_destroy();
        header('Location: ' . constant('URL') . "/login");
    }
}

?>