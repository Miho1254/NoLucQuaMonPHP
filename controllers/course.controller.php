<?php
include './php/database.php';
require 'config.php';
require './php/utils.php';

//Kết nối tới cơ sở dữ liệu
$connection = new Database($database_host, $database_username, $database_password, $database_name, $database_port);
$connection->connect();

// Ensure that $params is set
if (isset($params)) {
    if (isset($params['id'])) {
        //Kết nối tới cơ sở dữ liệu
        $connection = new Database($database_host, $database_username, $database_password, $database_name, $database_port);
        $connection->connect();

        //Lấy bài viết
        $courses = getCourse($params['id'], $connection);

        if (empty($courses)) {
            //Nếu không tìm thấy id thì ném về 404 luôn
            include './views/404.view.php';
            die();
        }

        //Nếu khoá học đó có bài viết đích thì href đến đó luôn.
        if (!empty($course["PostID"])) {
            header("Location:/post?id=" + $course["PostID"]);
            die();
        }

        $des = $courses['Description'];

        // Số cột mỗi hàng
        $columnsPerRow = 3;

        // Độ dài của danh sách
        $listLength = count($courses);

        // Tính số hàng cần tạo
        $rows = ceil($listLength / $columnsPerRow);

        $courses = getChildCourses($courses['ID'], $connection);

        //Trả dữ liệu về view
        include './views/course.view.php';
    }
} else {

    $courses = getAllCourse($connection);
    // Số cột mỗi hàng
    $columnsPerRow = 3;

    // Độ dài của danh sách
    $listLength = count($courses);
    $des = 'Trung tâm có rất nhiều khóa học khai giảng thường xuyên vào ngày 10 và 15 hàng tháng. Phụ
                            huynh
                            vui lòng đăng ký sớm trước ngày 5 hàng tháng để tiện cho việc sắp xếp lớp học phù hợp với sở
                            thích và trình độ của các con!';
    // Tính số hàng cần tạo
    $rows = ceil($listLength / $columnsPerRow);

    //Không cung cấp ID thì trả về tất cả khoá học
    include './views/course.view.php';
}

function getCourse($id, $connection)
{
    // Thực hiện truy vấn để kiểm tra đăng nhập
    $table = "Courses";
    $columns = "*";
    $condition = "ID = ?";
    $params = [$id];

    $result = $connection->get($table, $columns, $condition, $params);

    // Kiểm tra xem có kết quả trả về hay không
    if (!empty($result)) {
        return $result[0];
    } else {
        return null;
    }
}

function getAllCourse($connection)
{
    // Thực hiện truy vấn để kiểm tra đăng nhập
    $table = "Courses";
    $columns = "*";

    $result = $connection->get($table, $columns);

    // Kiểm tra xem có kết quả trả về hay không
    if (!empty($result)) {
        return $result;
    } else {
        return null;
    }
}

function getChildCourses($courseID, $connection)
{
    // Thực hiện truy vấn để kiểm tra đăng nhập
    $table = "Courses";
    $columns = "*";
    $condition = "FatherCourse = ?";
    $params = [$courseID];

    $result = $connection->get($table, $columns, $condition, $params);

    // Kiểm tra xem có kết quả trả về hay không
    if (!empty($result)) {
        return $result;
    } else {
        return null;
    }
}
