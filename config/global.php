<?php 

$dir_ = __DIR__."\\";
$dir_server = str_replace('\config', '', $dir_);

define ('SERVER_URL', $dir_server);
define ('URL', 'http://localhost/test-task-management-app');

date_default_timezone_set('America/Bogota');
