<?php

function handleRoute($route, $params)
{
    switch ($route) {
        case '/':
            // Xử lý cho trang chủ
            require 'controllers/index.controller.php';
            break;

        case '/about':
            // Xử lý cho trang giới thiệu
            require 'controllers/about.controller.php';
            break;

        case '/contact':
            // Xử lý cho trang liên hệ
            require 'controllers/contact.controller.php';
            break;

        case '/user':
            // Xử lý cho trang thông tin người dùng
            $userId = isset($params['id']) ? $params['id'] : 'Unknown';
            echo 'User Profile Page for User ID: ' . $userId;
            break;

        default:
            // Xử lý cho trang không tồn tại
            require './views/404.view.php';
            break;
    }
}

// Lấy đường dẫn và tham số từ URL
$request_uri = $_SERVER['REQUEST_URI'];
$route = parse_url($request_uri, PHP_URL_PATH);
$params = $_GET;

// Xử lý route và tham số
handleRoute($route, $params);
