<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/category.css">
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

        <div class="category_content d-flex flex-row">
            <?php
            include './includes/ad-dashboard.php';
            ?>
            <div class="category col-md-9 container">
                <div class="category_input mt-5">
                    <form action="" method="post">
                        <div class="row mt-3">
                            <label class="col-md-3" for="category_name ">Tên danh mục:</label>
                            <input class="col-md-9" type="text" id="category_name" name="category_name" required>
                        </div>

                        <div class="row mt-3">
                            <label class="col-md-3" for="category_description">Mô tả:</label>
                            <textarea class="col-md-9" id="category_description" name="category_description" rows="4" required></textarea>
                        </div>

                        <div class="d-flex justify-content-end mt-2">
                            <input type="submit" name="category_submit" id="category_submit" class="btn btn-info " value="Tạo">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>