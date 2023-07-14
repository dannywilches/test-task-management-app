<?php 

    use Illuminate\Database\Capsule\Manager as Database;
    
    $database = new Database;

    $database->addConnection([
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'test_works',
        'username' => 'root',
        'password' => '',
        'charser' => 'utf8',
        'collation' => 'utf8_unicode_ci'
    ]);

    $database->setAsGlobal();

    $database->bootEloquent()

?>