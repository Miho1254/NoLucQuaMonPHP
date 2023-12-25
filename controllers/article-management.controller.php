<?php
include './php/database.php';
require 'config.php';
require './php/utils.php';

// Kiểm tra thông tin đăng nhập và xử lý logic đăng nhập
$conn = new Database($database_host, $database_username, $database_password, $database_name, $database_port);
$conn->connect();

$list = getAllArticles($conn);

include './views/article-management.view.php';

?>

<?php
function getAllArticles($conn)
{
    // Thực hiện truy vấn để lấy toàn bộ bài viết từ bảng 'Posts'
    $table = "Posts";
    $columns = "*";

    $result = $conn->get($table, $columns);

    if (!empty($result)) {
        // Trả về mảng chứa danh sách các bài viết
        return $result;
    } else {
        // Nếu không có bài viết nào, trả về null
        return null;
    }
}
?>
