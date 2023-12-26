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
                        <p>Trung tâm có rất nhiều khóa học khai giảng thường xuyên vào ngày 10 và 15 hàng tháng. Phụ
                            huynh
                            vui lòng đăng ký sớm trước ngày 5 hàng tháng để tiện cho việc sắp xếp lớp học phù hợp với sở
                            thích và trình độ của các con!</p>
                    </div>

                    <div class="course_abcxyz">
                        <div class="row mt-4">
                            <div class="col-4 Nhac-cu-phuong-tay">
                                <a href="" class="image-link">
                                    <div class="text-overlay">Nhạc cụ phương Tây</div>
                                    <img src="../assets/images/bg4.jpg" class="img-fluid" alt="Responsive image">
                                </a>
                            </div>
                            <div class="col-4 Khoa-hoc-dan-piano-co-ban">
                                <a href="" class="image-link">
                                <div class="text-overlay">Khóa học đàn Piano cơ bản</div>
                                    <img src="../assets/images/ba-me-kien-tri-sua-tinh-nghich-ngom-cho-con-bang-am-nhac-2697.jpg"
                                        class="img-fluid" alt="Responsive image">
                                </a>
                            </div>
                            <div class="col-4 Hoc-choi-dan-Organ-keyboard">
                                <a href="" class="image-link">
                                <div class="text-overlay">Học chơi đàn Organ Keyboard tại Artiest thành công</div>
                                    <img src="../assets/images/day-dan-organ-can-tho.jpg" class="img-fluid"
                                        alt="Responsive image">
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 Hoc-dan-guitar">
                                <a href="" class="image-link">
                                <div class="text-overlay">Học đàn Guitar tại Artiest</div>
                                    <img src="../assets/images/maxresdefault.jpg" class="img-fluid"
                                        alt="Responsive image">
                                </a>
                            </div>
                            <div class="col-4 Hoc-dan-violon">
                                <a href="" class="image-link">
                                <div class="text-overlay">Học đàn Violon tại Artiest</div>
                                    <img src="../assets/images/violon.jpg" class="img-fluid" alt="Responsive image">
                                </a>
                            </div>
                            <div class="col-4 Hoc-danh-trong-carjon">
                                <a href="" class="image-link">
                                <div class="text-overlay">Học đánh trống Cajon tại Artiest</div>
                                    <img src="../assets/images/dan-guita-5-273.jpg" class="img-fluid" alt="Responsive image">
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 Hoc-dan-ukulele">
                                <a href="" class="image-link">
                                <div class="text-overlay">Học đàn Ukulele tại Artiest Education</div>
                                    <img src="../assets/images/DSC06604_grande.jpg" class="img-fluid" alt="Responsive image">
                                </a>
                            </div>
                            <div class="col-4 Nhac-cu-dan-toc">
                                <a href="" class="image-link">
                                <div class="text-overlay">Nhạc cụ dân tộc</div>
                                    <img src="../assets/images/tải-xuống-1.jpg" class="img-fluid" alt="Responsive image">
                                </a>
                            </div>
                            <div class="col-4 hoc-thoi-sao">
                                <a href="" class="image-link">
                                <div class="text-overlay">Học thổi sáo</div>
                                    <img src="../assets/images/images.jpg" class="img-fluid" alt="Responsive image">
                                </a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-4 Hoc-dan-bau">
                                <a href="" class="image-link">
                                <div class="text-overlay">Học đàn bầu</div>
                                    <img src="../assets/images/tải-xuống-2.jpg" class="img-fluid" alt="Responsive image">
                                </a>
                            </div>
                            <div class="col-4 Hoc-dan-tranh">
                                <a href="" class="image-link">
                                <div class="text-overlay">Học đàn tranh</div>
                                    <img src="../assets/images/tải-xuống-3.jpg" class="img-fluid" alt="Responsive image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                include './includes/sidebar-post.php';
                ?>
            </div>

        </div>
        <?php
        include './includes/footer.php'
        ?>
    </div>
</body>

</html>