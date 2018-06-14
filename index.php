<?php

$query = require_once 'core/bootstrap.php';




$todos = $query->selectAll('todos','Todos');

$uri = trim($_SERVER['REQUEST_URI'], '/');

Router::load('routes.php')->direct($uri);

require  'routes.php';

