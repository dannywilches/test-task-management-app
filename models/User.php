<?php

use Illuminate\Database\Eloquent\Model;

class User extends Model {
    
    protected $table = 'users';

    protected $fillable = [
        'first_names',
        'last_names',
        'username',
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    protected $append = ['fullname'];

    public function getFullNameAttribute(){
        return ucfirst($this->first_names) . ' ' . ucfirst($this->last_names);
    }
}

?>