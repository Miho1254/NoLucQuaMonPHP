<?php
//Khởi tạo session khi người dùng truy cập vào web
session_start();

// Lấy đường dẫn và tham số từ URL
$request_uri = parse_url($_SERVER['REQUEST_URI'])['path'];

//routes
$routes = [
    '/' => 'controllers/index.controller.php',
    '/about' => 'controllers/about.controller.php',
    '/contact' => 'controllers/contact.controller.php',

    //Admin zone
    '/admin/login' => 'controllers/admin-login.controller.php',
    '/admin/dashboard' => 'controllers/admin-dashboard.controller.php',
    '/admin/new-post' => 'controllers/new-post.controller.php',
    '/admin/admin-dashboard' => 'controllers/article-management.controller.php',
    
    //Bài viết
    '/post/post' => 'controllers/post.controller.php'
];

function abort($code = 404)
{
    http_response_code($code);

    include "views/{$code}.view.php";
    die();
}

function RoutesToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        include $routes[$uri];
    } else {
        abort();
    }
}


RoutesToController($request_uri, $routes);
