<link rel="stylesheet" href="../assets/css/admin-login.css">
<?php
include './php/database.php';
include './views/admin-login.view.php';
require 'config.php';
require './php/utils.php';
?>

<?php

if (isset($_POST['AdminLoginSubmitBtn'])) {
    // Xử lý khi nút submit được nhấn
    // Điều kiện này sẽ được thực hiện khi form được submit bằng cách nhấn nút có name là "AdminLoginSubmitBtn"
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập và xử lý logic đăng nhập
    $connection = new Database($database_host, $database_username, $database_password, $database_name, $database_port);

    $connection->connect();

    //Kiểm tra đăng nhập
    $data = checkLogin($username, $password, $connection);
    if ($data) {
        //Lưu dữ liệu vào session
        $_SESSION['UserID'] = $data['UserID'];
        $_SESSION['Username'] = $data['Username'];
        $_SESSION['Displayname'] = $data['Displayname'];

        // Chuyển hướng đến trang dashboard
        header("Location: /admin/dashboard");

        exit(); // Đảm bảo kết thúc script sau khi chuyển hướng
    } else {
    }
}

function checkLogin($username, $password, $connection)
{
    // Thực hiện truy vấn để kiểm tra đăng nhập
    $table = "Users";
    $columns = "UserID, Username, Password"; // Thay thế bằng tên thực của các cột trong bảng Users
    $condition = "Username = ? AND Password = ?";
    $params = [$username, $password];

    $result = $connection->get($table, $columns, $condition, $params);

    // Kiểm tra xem có kết quả trả về hay không
    if (!empty($result)) {
        // Đăng nhập thành công, $result chứa thông tin người dùng
        return $result[0]; // Trả về dữ liệu của người dùng, có thể là một mảng các cột khác nếu cần
    } else {
        // Đăng nhập thất bại
        return null;
    }
}

?>