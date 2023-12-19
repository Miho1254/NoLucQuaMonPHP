<link rel="stylesheet" href="../assets/css/new-post.css">
<?php
include './php/database.php';
require 'config.php';
require './php/utils.php';
?>

<?php
//Lấy dữ liệu từ Category
$categoryForView = [];

$connection = new Database($database_host, $database_username, $database_password, $database_name, $database_port);
$connection->connect();

$categoryForView = getAllCategory($connection);

include './views/new-post.view.php';

//HANDLE
if (isset($_POST['new-post-form'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['selectedCategory'];

    $connection = new Database($database_host, $database_username, $database_password, $database_name, $database_port);

    $connection->connect();

    $result = addNewPost($title, $content, $category, $connection);
    if ($result) {
        //Ngon
    } else {
        //Bug
    }
}

function addNewPost($title, $content, $category, $connection)
{
    //Truy vấn để lấy Category ID
    $table = "Category";
    $columns = "CategoryID, CategoryName";
    $condition = "CategoryName = ?";
    $params = [$category];

    $res = $connection->get($table, $columns, $condition, $params);

    $categoryID = 2;

    // Kiểm tra xem có kết quả trả về hay không
    if (!empty($res)) {
        $categoryID = $res[0]['CategoryID'];
    }

    // Tạo truy vấn INSERT
    $query = "INSERT INTO `miho_projectPHP`.`Posts` (`PostTitle`, `PostSlug`, `Post_Content`, `Post_Category`, `Post_BannerPath`, `Author`, `Createt_At`) 
    VALUES ('$title', '" . generateSlug($title) . "' , '$content', '$categoryID', NULL, {$_SESSION["UserID"]}, NOW());";

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
?>