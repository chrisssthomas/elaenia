<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);

$dotenv->safeLoad();

$database = require 'core/bootstrap.php';

// $tasks = $app['database']->selectAll('todo');

// $router = new Router;

// require 'routes.php';

// var_dump($app);

require Router::load('routes.php')
        ->direct(Request::uri());

