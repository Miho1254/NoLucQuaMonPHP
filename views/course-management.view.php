<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/article-management.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/new-post.css">
    <link rel="stylesheet" href="../assets/css/admin-dashboard.css">

    <link rel="stylesheet" href="../assets/css/category-management.css">
    <script src="../vendor/jquery-3.6.0.min.js"></script>
    <script src="../vendor/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&amp;display=swap" rel="stylesheet">
</head>

<body>
    <div class="article-management">
        <div class="top-bar d-flex align-items-center container justify-content-center mt-3">
            <p class="ml-auto">Trung tâm Văn hóa Nghệ thuật Tp. Hồ Chí Minh</p>
            <p class="ml-3 d-none d-md-block" style="color: #e15f1d;"><i class="fa-regular fa-envelope"></i>
                webdesign@gmail.com</p>
            <p class="ml-3 d-none d-md-block" style="color: #e15f1d;"><i class="fa-regular fa-clock"></i> 8:00 -
                21:30</p>
            <p class="ml-3 d-none d-md-block" style="color: #e15f1d;"><i class="fa-solid fa-phone"></i> 0909009009
            </p>
            <p class="ml-3 d-none d-md-block"><a style="color: #e15f1d;" href="/admin/login">LOGIN</a></p>
        </div>
        <div class="navbar d-flex align-content-center  ">
            <nav class=" navbar-expand-lg navbar-light container ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="logo">
                    <a href="/"><img src="../assets/images/logo10.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/">TRANG CHỦ <span class="sr-only">(current)</span></a>
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
        <div class="management_content row d-flex flex-row">
            <?php
            include './includes/ad-dashboard.php'

            ?>
            <div class="management col-md-9 container">
                <div class="management_title pt-5 text-center d-flex flex-row">
                    <h2 class="pr-3 pt-1">Khoá học</h2>

                    <div class="category-management_btn ">
                        <button type="button" class="btn btn-outline-secondary btn-block">New category</button>
                    </div>                </div>
                <div class="choose pt-3 d-flex flex-row">
                    <a href="">
                        <div class="all pt-2 pr-3">Tất cả ( ? )</div>
                    </a>
                    <a href="">
                        <div class="active pt-2 pl-3 pr-3">Đã xuất bản ( ? )</div>
                    </a>
                    <a href="">
                        <div class="trash pt-2 pl-3 pr-3">Thùng rác ( ? )</div>
                    </a>
                    <div class="search ml-auto">
                        <form action="" class="d-flex flex-row align-items-center">
                            <div class="search_txt pr-2">
                                <input type="text" class="form-control" id="search_txt" placeholder="" name="search_txt">
                            </div>
                            <div class="search_btn">
                                <button type="button" class="btn btn-outline-primary">Tìm kiếm</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="management_all d-flex flex-column align-items-center">
                    <div class="items p-2 my-3">
                        <div class="row">
                            <div class="i_title col-4">
                                <label for="">Tên khoá học</label>
                                <h5>Piano</h5>
                            </div>

                            <div class="au col-8">
                                <label for="">Mô tả</label>
                                <h5>các phím đàn trắng đen gợi lên sự phân biệt màu da</h5>
                            </div>
                        </div>
                        <div class="item-category_post">
                            <p>Có: ? bài viết</p>
                        </div>

                        <div class="i_choose d-flex flex-row justify-content-end">
                            <div class="see pl-3 pr-3"><button type="button" class="btn btn-primary"><i class="fa-solid fa-eye"></i></button></div>
                            <div class="fix pr-3"><button type="button" class="btn btn-success"><i class="fa-solid fa-pencil"></i></button></div>
                            <div class="delete"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></div>
                        </div>
                    </div>
                    <div class="items p-2 my-3">
                        <div class="row">
                            <div class="i_title col-4">
                                <label for="">Tên khoá học</label>
                                <h5>Organ</h5>
                            </div>

                            <div class="au col-8">
                                <label for="">Mô tả</label>
                                <h5>học để thành người, lưu ý nằm ngang là ko khá khẩm nổi</h5>
                            </div>
                        </div>
                        <div class="item-category_post">
                            <p>Có: ? bài viết</p>
                        </div>

                        <div class="i_choose d-flex flex-row justify-content-end">
                            <div class="see pl-3 pr-3"><button type="button" class="btn btn-primary"><i class="fa-solid fa-eye"></i></button></div>
                            <div class="fix pr-3"><button type="button" class="btn btn-success"><i class="fa-solid fa-pencil"></i></button></div>
                            <div class="delete"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>



</body>

</html>