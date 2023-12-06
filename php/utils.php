<?php 
function hashPassword($password) {
    // Tạo một salt ngẫu nhiên
    $options = ['cost' => 12]; // Có thể điều chỉnh cost tùy thuộc vào yêu cầu bảo mật
    $hash = password_hash($password, PASSWORD_BCRYPT, $options);
    return $hash;
}

function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}
