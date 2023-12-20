<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/about.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/course.css">
    <title>Trang khóa học nè thằng hiển ngu</title>
    <script src="../vendor/jquery-3.6.0.min.js"></script>
    <script src="../vendor/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <?php
            include './includes/topbar.php';
            include './includes/navbar.php';
            ?>
        </div>
        <div class="content">
            <div class="left-content">
                <h2><strong>CÁC KHÓA HỌC <span style = "color: #F86502"> TẠI TRUNG TÂM</span></strong></h2>
                <p>Trung tâm có rất nhiều khóa học khai giảng thường xuyên vào ngày 10 và 15 hàng tháng. Phụ huynh vui lòng đăng ký sớm trước ngày 5 hàng tháng để tiện cho việc sắp xếp lớp học phù hợp với sở thích và trình độ của các con!</p>
            </div>
        </div>
        <?php
            include './includes/sidebar-post.php';
        ?>
    </div>
</body>
</html>