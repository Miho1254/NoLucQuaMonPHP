<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/post.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/course.css">
    <title>
        Khóa học nha mấy cưng
    </title>
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
        <div class="course_content container">
            <div class="row">
                <div class="left-content col-md-9 mt-3">
                    <div class="course_title">
                        <h2><strong>CÁC KHÓA HỌC <span style="color: #F86502"> TẠI TRUNG TÂM</span></strong></h2>
                        <?php
                        echo '<p>' . $des . '</p';
                        ?>
                    </div>

                    <div class="course_abcxyz">
                        <?php
                        if (isset($courses)) {
                            // Vòng lặp theo số hàng
                            for ($row = 0; $row < $rows; $row++) {
                                echo '<div class="row mt-4">';

                                // Vòng lặp theo số cột
                                for ($col = 0; $col < $columnsPerRow; $col++) {
                                    $index = $row * $columnsPerRow + $col;

                                    // Kiểm tra xem đã hết dữ liệu hay chưa và kiểm tra xem phần tử có tồn tại hay không
                                    if ($index < $listLength && isset($courses[$index])) {
                                        echo '<div class="col-4 Nhac-cu-phuong-tay">
                    <a href="/course?id=' . $courses[$index]['ID'] . '" class="image-link">
                        <div class="text-overlay">' . $courses[$index]['Name'] . '</div>
                        <img src="' . $courses[$index]['ImagePath'] . '" class="img-fluid" alt="Responsive image">
                    </a>
                </div>';
                                    } else {
                                        // Xử lý trường hợp không có dữ liệu
                                        echo '<div class="col-4"></div>';
                                    }
                                }

                                echo '</div>';
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <?php
        include './includes/footer.php'
        ?>
    </div>
</body>

</html>