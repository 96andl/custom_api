<?php


$todos = App::get('database')->selectAll('todos', 'Todos');


require 'views/index.php';