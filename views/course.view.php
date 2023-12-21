<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/about.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/post.css">
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
                    <h2><strong>CÁC KHÓA HỌC <span style="color: #F86502"> TẠI TRUNG TÂM</span></strong></h2>
                    <p>Trung tâm có rất nhiều khóa học khai giảng thường xuyên vào ngày 10 và 15 hàng tháng. Phụ huynh
                        vui lòng đăng ký sớm trước ngày 5 hàng tháng để tiện cho việc sắp xếp lớp học phù hợp với sở
                        thích và trình độ của các con!</p>

                    <div class="course_abcxyz">
                        <div class="row">
                            <div class="col-4 Nhac-cu-phuong-tay"><a href=""><img src="../assets/images/bg4.jpg"alt=""></a>
                            </div>
                            <div class="col-4 Khoa-hoc-dan-piano-co-ban"></div>
                            <div class="col-4 Hoc-choi-dan-Organ-keyboard"></div>
                        </div>
                        <div class="row">
                            <div class="col-4 Hoc-dan-guitar"></div>
                            <div class="col-4 Hoc-dan-violon"></div>
                            <div class="col-4 Hoc-danh-trong-carjon"></div>
                        </div>
                        <div class="row">
                            <div class="col-4 Hoc-dan-ukulele"></div>
                            <div class="col-4 Nhac-cu-dan-toc"></div>
                            <div class="col-4 hoc-thoi-sao"></div>
                        </div>
                        <div class="row">
                            <div class="col-4 Hoc-dan-bau"></div>
                            <div class="col-4 Hoc-dan-tranh"></div>
                        </div>
                    </div>
                </div>
                <?php
                include './includes/sidebar-post.php';
                ?>
            </div>

        </div>

    </div>
</body>

</html>