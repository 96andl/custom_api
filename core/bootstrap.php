<?php


$config = require 'config.php';

require 'Router.php';
require_once 'Todos.php';
require_once 'database/Connection.php';
require_once 'database/QueryBuilder.php';


return new QueryBuilder(Connection::make($config['database']));