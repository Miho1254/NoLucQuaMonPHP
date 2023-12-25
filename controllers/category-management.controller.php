<?php
include './php/database.php';
require 'config.php';
require './php/utils.php';

// Kiểm tra thông tin đăng nhập và xử lý logic đăng nhập
$conn = new Database($database_host, $database_username, $database_password, $database_name, $database_port);
$conn->connect();

$list = getAllCategory($conn);

include './views/category-management.view.php';

?>

<?php
function getAllCategory($conn)
{
    // Thực hiện truy vấn để lấy toàn bộ danh mục từ bảng 'Posts'
    $table = "Category";
    $columns = "*";

    $result = $conn->get($table, $columns);

    if (!empty($result)) {
        // Trả về mảng chứa danh sách các danh mục
        return $result;
    } else {
        // Nếu không có danh mục nào, trả về null
        return null;
    }
}
?>
