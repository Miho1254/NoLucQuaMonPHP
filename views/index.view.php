<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <title><?php echo $data['title']; ?></title>
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
            <div class="top-bar d-flex align-items-center container justify-content-center mt-3">
                <p class="ml-auto text-center">Trung tâm Văn hóa Nghệ thuật Tp. Hồ Chí Minh</p>
                <p class="ml-3 d-none d-md-block" style="color: #e15f1d;"><i class="fa-regular fa-envelope"></i> webdesign@gmail.com</p>
                <p class="ml-3 d-none d-md-block" style="color: #e15f1d;"><i class="fa-regular fa-clock"></i> 8:00 - 21:30</p>
                <p class="ml-3 d-none d-md-block" style="color: #e15f1d;"><i class="fa-solid fa-phone"></i> 0909009009</p>
            </div>

            <div class="navbar d-flex align-content-center  ">
                <nav class=" navbar-expand-lg navbar-light container ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="logo">
                        <img src="../assets/images/logo10.png" alt="">
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">TRANG CHỦ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">GIỚI THIỆU</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    KHOÁ HỌC
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">LỊCH HỌC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">ĐĂNG KÝ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">TIN TỨC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">LIÊN HỆ</a>
                            </li>
                            <li class="nav-item">
                                <i class="icon-search fa-solid fa-magnifying-glass fa-lg mt-md-3 text-white"></i>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/images/slider33.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/images/slider34.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/images/sliderr888.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>


        <div class="Artiest-Education container">
            <div class="row">
                <div class="col-md-7">
                    <div class="Artiest-Education_content mt-md-10">
                        <h2>
                            <span>
                                <strong>
                                    <span style="color: #000000;">Artiest</span>
                                    <span style="color: #ff6600;">Education</span>
                                </strong>
                            </span>
                        </h2>
                        <p class="mt-3">“Mỗi đứa trẻ là một tài năng thiên bẩm” (Albert Einstein). Do đó, Artiest Education không chỉ giúp khơi dậy niềm đam mê nghệ thuật mà còn mang đến một môi trường học tập, vui chơi bổ ích, đóng góp cho sự phát triển toàn diện của các bé.
                            <br><br>
                            Với sự đầu tư nghiêm túc về chất lượng chuyên môn & cơ sở vật chất chuẩn quốc tế, Artiest Education mong muốn tạo ra một nền tảng giáo dục tốt nhất cho thế hệ trẻ về cả tài năng, tâm hồn & nhân cách.
                        </p>
                        <a href="#" target="_self" class="btn btn-ae align-content-center text-white mt-3">
                            <i class="icon-search fa-solid fa-magnifying-glass fa-lg  mr-2 "></i>
                            <span>Xem thêm</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-5 mt-4 mt-md-0">
                    <div class="Artiest-Education_img">
                        <img src="../assets/images/children_PNG18038-copy.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


        <div class="Watch-Now container-fluid mt-10 pb-2">
            <div class="Watch-Now_content container">
                <div class="row">
                    <div class="col-9">
                        <h2 class="text-white mt-3">
                            Bạn muốn tìm một trung tâm nghệ thuật phù hợp với con bạn?
                        </h2>
                        <p class="text-white">Hãy cho chúng tôi một cơ hội cùng bạn phát huy tài năng bẩm sinh của bé yêu!</p>
                    </div>
                    <div class="col-3 mt-3">
                        <a href="#" target="_self" class="btn btn-wn align-content-center mt-3">
                            <span>Xem ngay</span>
                            <i class="icon-plus fa-solid fa-plus ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div class="About-Us container mt-3">
            <h3 class="text-center ">
                <span style="color: #000000;">Artiest Education</span>
                <span style="color: #ff6600;">mang đến cho bạn giá trị gì?</span>
            </h3>
            <p class="my-4 text-center">Mời các bậc phụ huynh cùng tìm hiểu các giá trị đích thực mà tập thể đội ngũ Giáo viên và Cán bộ của Trung tâm muốn mang đến cho các con.</p>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="About-Us_img d-flex justify-content-center">
                        <img src="../assets/images/icon-1.jpg" alt="">
                    </div>
                    <div class="About-Us_content mt-3">
                        <h5 class="text-center "><span>ĐỘI NGŨ GIÁO VIÊN</span></h5>
                        <p class="text-center ">Các giáo viên có trình độ chuyên môn cao, chuyên nghiệp, nhiệt huyết và yêu trẻ.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="About-Us_img d-flex justify-content-center">
                        <img src="../assets/images/ICON-2.jpg" alt="">
                    </div>
                    <div class="About-Us_content mt-3">
                        <h5 class="text-center "><span>GIÁO TRÌNH GIẢNG DẠY</span></h5>
                        <p class="text-center ">Giáo trình hiện đại, đa dạng từ các nước tiên tiến. PP giảng dạy khoa học & tâm lý.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="About-Us_img d-flex justify-content-center">
                        <img src="../assets/images/ICON-4.jpg" alt="">
                    </div>
                    <div class="About-Us_content mt-3">
                        <h5 class="text-center "><span>CƠ SỞ VẬT CHẤT</span></h5>
                        <p class="text-center ">Trang thiết bị hiện đại và tiện nghi, môi trường học tập chuyên nghiệp – an toàn.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="About-Us_img d-flex justify-content-center">
                        <img src="../assets/images/ICON-6.jpg" alt="">
                    </div>
                    <div class="About-Us_content mt-3">
                        <h5 class="text-center "><span>LIÊN LẠC VỚI GIA ĐÌNH</span></h5>
                        <p class="text-center ">Mọi sự tiến bộ của con bạn đều được ghi nhận và được báo cáo sau mỗi buổi học.</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="Education container-fluid mt-3">
            <div class="Education_title container">
                <h2 class="pt-5 text-center"><span>Chương trình đào tạo năng khiếu tại Artiest Education</span></h2>
                <p class="text-center"><span>Âm nhạc và Nghệ thuật là một phần không thể thiếu trong quá trình phát triển nhân cách của trẻ nhỏ. Các em cần một sân chơi lành mạnh để thêm yêu thương, gắn kết, sẻ chia cũng như phát triển mọi kỹ năng sống của mình.</span></p>
            </div>
            <div class="Education_card container">
                <div class="row">
                    <div class="col-3 mb-4">
                        <div class="card ec">
                            <img src="../assets/images/111.png" alt="">
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card ec">
                            <img src="../assets/images/nhac-cu-dan-toc.png" alt="">
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card ec">
                            <img src="../assets/images/dance.yoga_.png" alt="">
                        </div>
                    </div>
                    <div class="col-3 mb-4">
                        <div class="card ec">
                            <img src="../assets/images/hoi-hoa-nghe-thuat.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid " style="background-color: #2E8914;">
            <div class="subject-education container text-center ">
                <div class="row">
                    <div class="col-2  mt-4  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei">
                                <img src="../assets/images/học-đàn-piano.png" alt="">
                            </div>
                            <div class="sec text-white">
                                <strong>
                                    <p>Học đàn piano</p>
                                </strong>
                            </div>
                        </a>

                    </div>
                    <div class="col-2  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei"><img src="../assets/images/học-đàn-organ.png" alt=""></div>
                            <div class="sec text-white">
                                <strong>
                                    <p>Học đàn organ</p>
                                </strong>
                            </div>
                        </a>

                    </div>
                    <div class="col-2  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei"><img src="../assets/images/học-đàn-guitar.png" alt=""></div>
                            <div class="sec text-white">
                                <strong>
                                    <p>Học đàn guitar</p>
                                </strong>
                            </div>
                        </a>

                    </div>
                    <div class="col-2  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei">
                                <img src="../assets/images/học-đàn-violon.png" alt="">
                            </div>
                            <div class="sec text-white">
                                <strong>
                                    <p>Học đàn violon</p>
                                </strong>
                            </div>
                        </a>

                    </div>
                    <div class="col-2  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei">
                                <img src="../assets/images/học-trống-cajon.png" alt="">
                            </div>
                            <div class="sec text-white">
                                <strong>
                                    <p>Học trống carjon</p>
                                </strong>
                            </div>
                        </a>

                    </div>
                    <div class="col-2  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei">
                                <img src="../assets/images/my-thuat-ung-dung.png" alt="">
                            </div>
                            <div class="sec text-white">
                                <strong>
                                    <p>Học mỹ thuật ứng dụng</p>
                                </strong>
                            </div>
                        </a>

                    </div>

                </div>
                <div class="row mt-3">
                    <div class="col-2  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei">
                                <img src="../assets/images/học-thiết-kế-thời-trang.png" alt="">
                            </div>
                            <div class="sec text-white">
                                <strong>
                                    <p>Học thiết kế thời trang</p>
                                </strong>
                            </div>
                        </a>

                    </div>
                    <div class="col-2  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei">
                                <img src="../assets/images/Cờ-vua-cờ-tướng.png" alt="">
                            </div>
                            <div class="sec text-white">
                                <strong>
                                    <p>Học cờ vua - cờ tướng</p>
                                </strong>
                            </div>
                        </a>

                    </div>
                    <div class="col-2  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei">
                                <img src="../assets/images/học-thanh-nhạc.png" alt="">
                            </div>
                            <div class="sec text-white">
                                <strong>
                                    <p>Học thanh nhạc</p>
                                </strong>
                            </div>
                        </a>

                    </div>
                    <div class="col-2  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei">
                                <img src="../assets/images/mc-nhí.png" alt="">
                            </div>
                            <div class="sec text-white">
                                <strong>
                                    <p>Học làm mc nhí</p>
                                </strong>
                            </div>
                        </a>

                    </div>
                    <div class="col-2  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei">
                                <img src="../assets/images/học-mua-ballet.png" alt="">
                            </div>
                            <div class="sec text-white">
                                <strong>
                                    <p>Học múa ballet</p>
                                </strong>
                            </div>
                        </a>

                    </div>
                    <div class="col-2  mt-4">
                        <a href="" class="text-decoration-none">
                            <div class="sei">
                                <img src="../assets/images/học-đàn-ukyulele.png" alt="">
                            </div>
                            <div class="sec text-white">
                                <strong>
                                    <p class="text-decoration-none">Học đàn ukulele</p>
                                </strong>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="Parents-feeling container-fluid">
            <div class="Parents-feeling_content pt-md-6 container">
                <div class="col-6 ml-md-auto">
                    <div class="pf-title">
                        <h3 class="text-center">
                            <span style="color: #000000;">Cảm nhận </span>
                            <span style="color: #ff6600;">của Phụ huynh</span>
                        </h3>
                        <div id="carousel-pf" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="justify-content-center d-flex">
                                        <img class="d-block mt-md-4" style="height: 100px; width: 100px;" src="../assets/images/1_HIAN.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-content text-center">
                                        <h4 class="mt-md-3">
                                            <span style="color: #0A0A0A;">HIAN</span>
                                        </h4>
                                        <p class="mt-md-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos perspiciatis provident quibusdam distinctio odio molestias totam,....</p>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="justify-content-center d-flex">
                                        <img class="d-block mt-md-4" style="height: 100px; width: 100px;" src="../assets/images/2_Let-Ri.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-content text-center">
                                        <h4 class="mt-md-3">
                                            <span style="color: #0A0A0A;">LetRi</span>
                                        </h4>
                                        <p class="mt-md-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos perspiciatis provident quibusdam distinctio odio molestias totam,....</p>
                                    </div>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carousel-pf" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-pf" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="News container-fluid">
            <div class="news-title">
                <h3 class="text-center pt-md-5">
                    <span style="color: #000000;">Tin tức -</span>
                    <span style="color: #ff6600;">Kiến thức</span>
                </h3>
            </div>
            <div class="news-container container">
                <div class="row">
                    <div class="post col-md-6">
                        <div class="news-item">
                            <div class="news-img">
                                Đây là ảnh
                            </div>
                            <div class="news-content">
                                Đây là content
                            </div>
                        </div>
                    </div>
                    <div class="post col-md-6">
                        <div class="news-item">
                            <div class="news-img">
                                Đây là ảnh
                            </div>
                            <div class="news-content">
                                Đây là content
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="post col-md-6">
                        <div class="news-item">
                            <div class="news-img">
                                Đây là ảnh
                            </div>
                            <div class="news-content">
                                Đây là content
                            </div>
                        </div>
                    </div>
                    <div class="post col-md-6">
                        <div class="news-item">
                            <div class="news-img">
                                Đây là ảnh
                            </div>
                            <div class="news-content">
                                Đây là content
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <footer class="bg-body-tertiary text-center">
            <div class="f" style="background: #F99506">
                <div class="footer-container container text-white d-flex flex-row">
                    <div class="footer-logo text-left align-items-center pt-md-3 pb-md-3">
                        <img src="../assets/images/logo10.png" alt="">
                    </div>
                    <div class="footer-content align-items-center">
                        <h4 class="pt-md-3 ml-md-3 text-left"><span>HỌC VIỆN NGHỆ THUẬT ELITE- QUẬN 2, TP.HCM</span></h4>
                        <p class=" ml-md-3 text-left"><span>Elite Arts Academy không chỉ giúp khơi dậy niềm đam mê nghệ thuật mà còn mang đến một môi trường học tập, vui chơi bổ ích, đóng góp cho sự phát triển toàn diện của các bé.</span></p>
                    </div>
                </div>
                <!-- Copyright -->
                <div class="footer-content text-center pt-md-3" style="background: linear-gradient(to bottom, #fc9c03, #dc5323);">
                    Copyright © 2020 :
                </div>
            </div>
        </footer>

    </div>

</body>

</html>