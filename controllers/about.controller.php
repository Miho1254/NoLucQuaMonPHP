<?php
require './php/database.php';
require 'config.php';

$data = [
    'title' => 'About',
    'content' => 'Nội dung about',
];


$connection = new Database($database_host, $database_username, $database_password, $database_name, $database_port);

$connection->connect();

include './views/about.view.php';
