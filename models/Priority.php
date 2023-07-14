<?php

use Illuminate\Database\Eloquent\Model;

class Priority extends Model{
    
    protected $table = 'prioritys';

    protected $fillable = [
        'name',
    ];

}

?>