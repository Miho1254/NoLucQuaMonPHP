<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/category-management.css">
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
    <div class="wrapper">
        <?php
        include './includes/topbar.php';
        ?>

        <?php
        include './includes/navbar.php';
        ?>

        <div class="category-management_content d-flex flex-row">
            <?php
            include './includes/ad-dashboard.php';
            ?>
            <div class="category-management col-9 container">
                <div class="category-management_title pt-5 text-center d-flex flex-row">
                    <h2 class="pr-3 pt-1">Danh mục</h2>
                    <div class="category-management_btn ">
                        <button type="button" class="btn btn-outline-secondary btn-block">New category</button>
                    </div>
                </div>
                <div class="category-management_choose pt-3 d-flex flex-row">
                    <a href="">
                        <div class="category_all pt-2 pr-3">Tất cả ( ? )</div>
                    </a>
                    <a href="">
                        <div class="category_active pt-2 pl-3 pr-3">Đã xuất bản ( ? )</div>
                    </a>
                    <a href="">
                        <div class="category_trash pt-2 pl-3 pr-3">Thùng rác ( ? )</div>
                    </a>
                    <div class="category-management_search ml-auto">
                        <form action="" class="d-flex flex-row align-items-center">
                            <div class="category-management_search_txt pr-2">
                                <input type="text" class="form-control" id="search_txt" placeholder="" name="search_txt">
                            </div>
                            <div class="category-management_search_btn">
                                <button type="button" class="btn btn-outline-primary">Tìm kiếm</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="category-management_all d-flex flex-column align-items-center">
                    <?php 
                        foreach ($list as $category) {
                            echo '<div class="category_items p-2 my-3">
                        <div class="row">
                            <div class="item-category_title col-4">
                                <label for="">Danh mục</label>
                                <h5>'. $category['CategoryName'] .'</h5>
                            </div>
                            <div class="item_describe col-8"> <!-- Thêm lớp justify-content-center vào đây -->
                                <label for="">Mô tả</label>
                                <h5>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed assumenda repellendus, adipisci a illo quasi. Veritatis, cumque consequuntur, culpa quis eius ut aliquid distinctio deserunt a repudiandae eligendi itaque molestiae?</h5>
                            </div>
                        </div>
                        <div class="item-category_post">
                            <p>Có: ? bài viết</p>
                        </div>
                        <div class="item_choose d-flex flex-row justify-content-end ">
                            <div class="item_see pl-3 pr-3"><button type="button" class="btn btn-primary"><i class="fa-solid fa-eye"></i></button></div>
                            <div class="item_fix pr-3"><button type="button" class="btn btn-success"><i class="fa-solid fa-pencil"></i></button></div>
                            <div class="item_delete"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></div>
                        </div>
                    </div>';
                        }
                    ?>
                </div>

            </div>

        </div>
    </div>
</body>

</html>