<?php
include './php/database.php';
require 'config.php';
require './php/utils.php';

// Kiểm tra thông tin đăng nhập và xử lý logic đăng nhập
$conn = new Database($database_host, $database_username, $database_password, $database_name, $database_port);
$conn->connect();

$coursesForView = getAllCourses($conn);

include './views/new-course.view.php';


//HANDLE
if (isset($_POST['coursesubmit'])) {

    $name = $_POST['coursename'];
    $des = $_POST['coursedescription'];
    $fatherCourse = $_POST['selectedCategory'];
    $imagePath = $_POST['imagePath'];
    $idBaiviet = $_POST['idBaiViet'];

    if ($fatherCourse == "Không có") {
        $fatherCourse = "";
    }

    $connection = new Database($database_host, $database_username, $database_password, $database_name, $database_port);

    $connection->connect();

    $result = addNewCourses($name, $des, $imagePath, $fatherCourse, $idBaiviet, $connection);
    if ($result) {
        //Ngon
    } else {
        //Bug
    }
}

function addNewCourses($name, $des, $imagePath, $fatherCourse, $idBaiviet, $connection)
{
    //Truy vấn để lấy Category ID
    $table = "Courses";
    $columns = "*";
    $condition = "Name = ?";
    $params = [$fatherCourse];

    $res = $connection->get($table, $columns, $condition, $params);

    $courseID = '';

    // Kiểm tra xem có kết quả trả về hay không
    if (!empty($res)) {
        $courseID = $res[0]['ID'];
    }

    // Kiểm tra và chuyển đổi biến thành NULL nếu nó rỗng
    $fatherCourse = empty($fatherCourse) ? 'NULL' : $fatherCourse;
    $idBaiviet = empty($idBaiviet) ? 'NULL' : $idBaiviet;

    // Query chèn dữ liệu
    $query = "INSERT INTO `miho_projectPHP`.`Courses` (`Name`, `Description`, `ImagePath`, `FatherCourse`, `PostID`) 
        VALUES ('$name', '$des', '$imagePath', $fatherCourse, $idBaiviet)";

    // Chuẩn bị và thực thi truy vấn
    $statement = $connection->connection->prepare($query);
 
    $statement->execute();
    $statement->close();

    // Ngắt kết nối sau khi hoàn thành
    $connection->disconnect();

    return true;
}

function getAllCourses($connection)
{
    // Sử dụng hàm get() để lấy toàn bộ dữ liệu từ bảng 'Category'
    $categoryData = $connection->get('Courses', 'Name');

    // Extract categoryName từ mảng kết quả
    return $courses = array_column($categoryData, 'Name');
}
