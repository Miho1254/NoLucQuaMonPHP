<?php
require './php/database.php';
require 'config.php';

$data = [
    'title' => 'About',
    'content' => 'Nội dung about',
];

include './views/about.view.php';
