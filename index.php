<?php

$query = require_once 'core/bootstrap.php';




$todos = $query->selectAll('todos','Todos');

$uri = trim($_SERVER['REQUEST_URI'], '/');

$router = new Router();

require 'routes.php';

//Router::load('routes.php')->direct($uri);

//require  'routes.php';

require $router->direct(trim($_SERVER['REQUEST_URI'],'/'));
