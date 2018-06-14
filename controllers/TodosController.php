<?php

$data = $_POST;


App::get('database')->insert('todos',[
    'description' => $data['description'],
    'name' => $data['name']
]);

header('Location: /');