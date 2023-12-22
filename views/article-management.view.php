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
    <div class="article-management">
        <?php
        include './includes/topbar.php';
        ?>

        <?php
        include './includes/navbar.php';
        ?>

        <div class="management_content row d-flex flex-row">
            <?php
            include './includes/ad-dashboard.php';
            ?>
            <div class="management col-9 container">
                <div class="management_title pt-5 text-center d-flex flex-row">
                    <h2 class="pr-3 pt-1">Bài viết</h2>
                    <div class="management_btn ">
                        <button type="button" class="btn btn-outline-secondary">New post</button>
                    </div>
                </div>
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
                            <div class="i_title col-6">
                                <label for="">Tiêu đề</label>
                                <h5>Hello t amet consectetur adipisicing elit. Ipsam voluptates dolorem natus beatae sed doloremque atque quas id a</h5>
                            </div>
                            <div class="au col-6"> <!-- Thêm lớp justify-content-center vào đây -->
                                <label for="">Tác giả</label>
                                <h5>Miho</h5>
                            </div>
                        </div>

                        <div class="i_content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptates dolorem natus beatae sed doloremque atque quas id aut odit nobis magni saepe consequatur omnis nesciunt, eligendi labore veniam aspernatur.</p>
                        </div>
                        <div class="i_choose d-flex flex-row justify-content-end ">
                            <div class="see pl-3 pr-3"><button type="button" class="btn btn-primary"><i class="fa-solid fa-eye"></i></button></div>
                            <div class="fix pr-3"><button type="button" class="btn btn-success"><i class="fa-solid fa-pencil"></i></button></div>
                            <div class="delete"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></div>
                        </div>
                    </div>
                    <div class="items p-2 my-3">
                        <div class="row">
                            <div class="i_title col-6">
                                <label for="">Tiêu đề</label>
                                <h5>Hello t amet consectetur adipisicing elit. Ipsam voluptates dolorem natus beatae sed doloremque atque quas id a</h5>
                            </div>
                            <div class="au col-6"> <!-- Thêm lớp justify-content-center vào đây -->
                                <label for="">Tác giả</label>
                                <h5>Miho</h5>
                            </div>
                        </div>

                        <div class="i_content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptates dolorem natus beatae sed doloremque atque quas id aut odit nobis magni saepe consequatur omnis nesciunt, eligendi labore veniam aspernatur.</p>
                        </div>
                        <div class="i_choose d-flex flex-row justify-content-end ">
                            <div class="see pl-3 pr-3"><button type="button" class="btn btn-primary"><i class="fa-solid fa-eye"></i></button></div>
                            <div class="fix pr-3"><button type="button" class="btn btn-success"><i class="fa-solid fa-pencil"></i></button></div>
                            <div class="delete"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></div>
                        </div>
                    </div>
                    <div class="items p-2 my-3">
                        <div class="row">
                            <div class="i_title col-6">
                                <label for="">Tiêu đề</label>
                                <h5>Hello t amet consectetur adipisicing elit. Ipsam voluptates dolorem natus beatae sed doloremque atque quas id a</h5>
                            </div>
                            <div class="au col-6"> <!-- Thêm lớp justify-content-center vào đây -->
                                <label for="">Tác giả</label>
                                <h5>Miho</h5>
                            </div>
                        </div>

                        <div class="i_content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptates dolorem natus beatae sed doloremque atque quas id aut odit nobis magni saepe consequatur omnis nesciunt, eligendi labore veniam aspernatur.</p>
                        </div>
                        <div class="i_choose d-flex flex-row justify-content-end ">
                            <div class="see pl-3 pr-3"><button type="button" class="btn btn-primary"><i class="fa-solid fa-eye"></i></button></div>
                            <div class="fix pr-3"><button type="button" class="btn btn-success"><i class="fa-solid fa-pencil"></i></button></div>
                            <div class="delete"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></div>
                        </div>
                    </div>
                    <div class="items p-2 my-3">
                        <div class="row">
                            <div class="i_title col-6">
                                <label for="">Tiêu đề</label>
                                <h5>Hello t amet consectetur adipisicing elit. Ipsam voluptates dolorem natus beatae sed doloremque atque quas id a</h5>
                            </div>
                            <div class="au col-6"> <!-- Thêm lớp justify-content-center vào đây -->
                                <label for="">Tác giả</label>
                                <h5>Miho</h5>
                            </div>
                        </div>

                        <div class="i_content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptates dolorem natus beatae sed doloremque atque quas id aut odit nobis magni saepe consequatur omnis nesciunt, eligendi labore veniam aspernatur.</p>
                        </div>
                        <div class="i_choose d-flex flex-row justify-content-end ">
                            <div class="see pl-3 pr-3"><button type="button" class="btn btn-primary"><i class="fa-solid fa-eye"></i></button></div>
                            <div class="fix pr-3"><button type="button" class="btn btn-success"><i class="fa-solid fa-pencil"></i></button></div>
                            <div class="delete"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></div>
                        </div>
                    </div>
                    <div class="items p-2 my-3">
                        <div class="row">
                            <div class="i_title col-6">
                                <label for="">Tiêu đề</label>
                                <h5>Hello t amet consectetur adipisicing elit. Ipsam voluptates dolorem natus beatae sed doloremque atque quas id a</h5>
                            </div>
                            <div class="au col-6"> <!-- Thêm lớp justify-content-center vào đây -->
                                <label for="">Tác giả</label>
                                <h5>Miho</h5>
                            </div>
                        </div>

                        <div class="i_content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptates dolorem natus beatae sed doloremque atque quas id aut odit nobis magni saepe consequatur omnis nesciunt, eligendi labore veniam aspernatur.</p>
                        </div>
                        <div class="i_choose d-flex flex-row justify-content-end ">
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