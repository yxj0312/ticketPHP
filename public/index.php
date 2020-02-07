<?php declare(strict_types = 1);

//require __DIR__.'/../src/Bootstrap.php';

//echo 'Hello World!';

require __DIR__.'/../src/Scratch.php';

use ticketPHP\Models\User;

$appconfig = require __DIR__ .'/../config/application.config.php';
$user = new User($appconfig);
$user->getUser('ssrocyxj@gmail.com', '123456');


