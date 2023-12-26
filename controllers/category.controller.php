<?php
include './php/database.php';
require 'config.php';
require './php/utils.php';

// Kiểm tra thông tin đăng nhập và xử lý logic đăng nhập
$conn = new Database($database_host, $database_username, $database_password, $database_name, $database_port);
$conn->connect();

include './views/category.view.php';


//HANDLE
if (isset($_POST['category_submit'])) {

    $name = $_POST['category_name'];
    $des = $_POST['category_description'];

    $connection = new Database($database_host, $database_username, $database_password, $database_name, $database_port);

    $connection->connect();

    $result = addNewCategory($name, $des, $connection);
    if ($result) {
        //Ngon
    } else {
        //Bug
    }
}

function addNewCategory($name, $des, $connection)
{

    // Tạo truy vấn INSERT
    $query = "INSERT INTO `miho_projectPHP`.`Category` (`CategoryName`, `CategorySlug`, `CategoryBannerPath`, `CategoryDescription`) 
    VALUES ('$name', '" . generateSlug($name) . "' , '', '$des');";

    // Chuẩn bị và thực thi truy vấn
    $statement = $connection->connection->prepare($query);

    $statement->execute();
    $statement->close();

    // Ngắt kết nối sau khi hoàn thành
    $connection->disconnect();

    return true;
}

function getAllCategory($connection)
{
    // Sử dụng hàm get() để lấy toàn bộ dữ liệu từ bảng 'Category'
    $categoryData = $connection->get('Category', 'categoryName');

    // Extract categoryName từ mảng kết quả
    return $categories = array_column($categoryData, 'categoryName');
}
