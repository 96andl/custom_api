<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 6/14/18
 * Time: 12:27 PM
 */

//
//$router->define(
//    [
//        '' => '',
//        'about' => 'controllers/AboutController.php',
//        'about/culture' => '',
//        'contact' => '',
//    ]
//);

$router->get('','controllers/IndexController.php');
$router->get('about','controllers/AboutController.php');
$router->post('todos/create', 'controllers/TodosController.php');

echo (json_encode($router));