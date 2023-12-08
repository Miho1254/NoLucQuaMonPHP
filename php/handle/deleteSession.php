<?php
// Bắt đầu session
session_start();

// Xoá session_id
session_destroy();

echo json_encode(['status' => 'success', 'message' => 'Session deleted successfully']);
?>
