<?php

$query = require_once 'core/bootstrap.php';


$todos = $query->selectAll('todos', 'Todos');


require Router::load('routes.php')->direct(Request::uri());
