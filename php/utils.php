<?php
function hashPassword($password)
{
    // Tạo một salt ngẫu nhiên
    $options = ['cost' => 12]; // Có thể điều chỉnh cost tùy thuộc vào yêu cầu bảo mật
    $hash = password_hash($password, PASSWORD_BCRYPT, $options);
    return $hash;
}

function verifyPassword($password, $hashedPassword)
{
    return password_verify($password, $hashedPassword);
}

function debug_to_console($data)
{
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

function generateSlug($string)
{
    // Chuyển chuỗi thành chữ thường
    $string = strtolower($string);

    // Loại bỏ ký tự không phải chữ cái hoặc số, thay thế bằng dấu gạch ngang
    $string = preg_replace('/[^a-z0-9]+/', '-', $string);

    // Loại bỏ các dấu gạch ngang liên tiếp
    $string = trim($string, '-');

    return $string;
}

function searchAuthorByID($id, $connection)
{
    $table = "Users";
    $columns = "*";
    $condition = "UserID = ?";
    $params = [$id];

    $result = $connection->get($table, $columns, $condition, $params);

    // Kiểm tra xem có kết quả trả về hay không
    if (!empty($result)) {
        return $result[0]; // Trả về dữ liệu của người dùng, có thể là một mảng các cột khác nếu cần
    } else {
        return null;
    }
}
