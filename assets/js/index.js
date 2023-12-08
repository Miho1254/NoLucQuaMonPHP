function CalldeleteSession() {
    // Sử dụng fetch để gọi hàm xoá session_id ở phía server
    fetch('../../php/handle/deleteSession.php', {
        method: 'POST',
        credentials: 'same-origin', // Đảm bảo sử dụng cùng origin
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Đã xảy ra lỗi');
        }
        return response.json();
    })
    .then(data => {
        console.log('Session deleted:', data);
        // Tiến hành chuyển hướng đến trang /admin/login (nếu cần)
        window.location.href = "/";
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
    });
}