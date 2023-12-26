<?php
//Khởi tạo session khi người dùng truy cập vào web
session_start();

// Lấy đường dẫn và tham số từ URL
$url_components = parse_url($_SERVER['REQUEST_URI']);
$request_uri = $url_components['path'];

// Lấy các tham số từ query string nếu tồn tại
if (isset($url_components['query'])) {
    parse_str($url_components['query'], $params);

    // $params bây giờ là một mảng chứa các tham số từ query string
    // Ví dụ: $params['name'] và $params['id'] là giá trị của tham số trong URL
    // Nếu URL là /your-route?name=miho&id=1, thì $params['name'] sẽ là 'miho' và $params['id'] sẽ là 1
}

//routes
$routes = [
    '/' => 'controllers/index.controller.php',
    '/about' => 'controllers/about.controller.php',
    '/contact' => 'controllers/contact.controller.php',

    //Admin zone
    '/admin/login' => 'controllers/admin-login.controller.php',
    '/admin/dashboard' => 'controllers/admin-dashboard.controller.php',
    '/admin/category' => 'controllers/category.controller.php',
    '/admin/new-post' => 'controllers/new-post.controller.php',
    '/admin/article-management' => 'controllers/article-management.controller.php',
    '/admin/category-management' => 'controllers/category-management.controller.php',
    '/admin/new-course' => 'controllers/new-course.cotroller.php',
    '/admin/course-management' => 'controllers/course-management-controller.php',
    
    //Bài viết
    '/post' => 'controllers/post.controller.php',
    '/schedule' => 'controllers/schedule.controller.php',
    '/course' => 'controllers/course.controller.php'
];

function abort($code = 404)
{
    http_response_code($code);

    include "views/{$code}.view.php";
    die();
}

function RoutesToController($uri, $routes)
{
    //Khai báo global params để các controller có thể sử dụng
    global $params;

    if (array_key_exists($uri, $routes)) {
        include $routes[$uri];
    } else {
        abort();
    }
}

RoutesToController($request_uri, $routes);

