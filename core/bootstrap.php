<?php

$app = [];


$app['config'] = require 'config.php';
$config = require 'config.php';

require 'Router.php';
require_once 'Todos.php';
require_once 'database/Connection.php';
require_once 'database/QueryBuilder.php';
require_once 'Request.php';

return
    $app['database'] = new QueryBuilder(Connection::make($app['config']['database']));