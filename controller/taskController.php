<?php

// require_once 'vendor/autoload.php';
// require_once 'config/database.php';
require_once 'models/Task.php';
require_once 'models/User.php';
require_once 'models/Priority.php';

// $tasks = Task::get();

// $new_task = new Task;
// $new_task->description_task = 'Daniel';
// $new_task->responsible = 2;
// $new_task->save();

class TaskController {
    protected $data;
    protected $prioritys;
    protected $users;
    function __construct() {
        // parent::__construct();
        // error_log('Login::construct-> Inicio de Login');
        // require_once 'config/database.php';
        // require_once 'models/Task.php';
    }

    public function show(){
        $tasks = Task::with(['getPriority'])->get();
        $this->data = $tasks;
        require 'views/task.php';
    }
    
}

?>