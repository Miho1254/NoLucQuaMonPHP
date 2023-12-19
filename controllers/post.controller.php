<link rel="stylesheet" href="../assets/css/index.css">
<?php
include './php/database.php';
require 'config.php';
require './php/utils.php';
?>

<?php
// Ensure that $params is set
if (isset($params)) {
    if (isset($params['id'])) {
        //Kết nối tới cơ sở dữ liệu
        $connection = new Database($database_host, $database_username, $database_password, $database_name, $database_port);
        $connection->connect();
        $authorName = '';

        //Lấy bài viết
        $post = getPost($params['id'], $connection);

        if (empty($post)) {
            //Nếu không tìm thấy id thì ném về 404 luôn
            include './views/404.view.php';
            die();
        }

        //Truy vấn tên của tác giả do trong DB lưu tác giả = ID
        $author = searchAuthorByID($post['Author'], $connection);

        if (!empty($author)) {
            $authorName = $author['Displayname'];
        } else {
            $authorName = "ADMIN";
        }

        //Trả dữ liệu về view
        include './views/post.view.php';
    }
} else {
    //Không cung cấp ID thì trả về 404
    include './views/404.view.php';
}

function getPost($id, $connection)
{
    // Thực hiện truy vấn để kiểm tra đăng nhập
    $table = "Posts";
    $columns = "*";
    $condition = "PostID = ?";
    $params = [$id];

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