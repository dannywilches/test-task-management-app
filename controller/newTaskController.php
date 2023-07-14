<?php

require_once 'models/Task.php';
require_once 'models/User.php';
require_once 'models/Priority.php';


class NewTaskController {
    protected $data;
    protected $prioritys;
    protected $users;
    function __construct() {
        // session_start();
    }

    public function show(){
        $prioritys = Priority::get();
        $users = User::get();
        $this->prioritys = $prioritys;
        $this->users = $users;
        require 'views/new_task.php';
    }

    public function createTask() {
        if (isset($_POST["description_task"]) && isset($_POST["asignee"]) && isset($_POST["priority"])) {

            $task = new Task();
            
            $task->description_task = $_POST["description_task"];
            $task->asignee = $_POST["asignee"];
            $task->creator = base64_decode($_SESSION["user_id"]);
            $task->priority = $_POST["priority"];
            $task->status_task = 0;
            
            $task->save();
            
            header('Location: ' . constant('URL') . "/task");
            return $task;
        }
    }
    
}

?>