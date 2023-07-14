<?php

use Illuminate\Database\Eloquent\Model;
require_once 'models/Priority.php';
require_once 'models/User.php';

class Task extends Model{
    
    protected $table = 'tasks';

    protected $fillable = [
        'description_task',
        'creator',
        'asignee',
        'priority',
        'status_task'
    ];

    public function getPriority(){
        return $this->hasOne(Priority::class, 'id_priority', 'priority');
    }

    public function getCreator(){
        return $this->hasOne(User::class, 'id_user', 'creator');
    }

    public function getAsignee(){
        return $this->hasOne(User::class, 'id_user', 'asignee');
    }

}

?>