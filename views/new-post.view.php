<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng bài viết mới</title>
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
    <link rel="stylesheet" href="../vendor/richtexteditor/rte_theme_default.css" />
    <script type="text/javascript" src="../vendor/richtexteditor/rte.js"></script>
    <script type="text/javascript" src='../vendor/richtexteditor/plugins/all_plugins.js'></script>
</head>

<body>
    <div class="new-post">
        <?php
        include './includes/topbar.php';
        ?>

        <?php
        include './includes/navbar.php';
        ?>

        <div class="row test_content d-flex flex-row">
            <?php
            include './includes/ad-dashboard.php';
            ?>
            <div class="test container col-md-6 pr-5 pl-5 pt-5">
                <form id="new-post-form" class="form" action="" method="post">
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea id="content" name="content"></textarea>
                    </div>

                    <!-- Phần này dùng để định dang form cho backend, đừng đụng vào -->
                    <input type='hidden' name='new-post-form' value='new-post-form'>
                    <input type="hidden" id="selectedCategory" name="selectedCategory">
                </form>
            </div>

            <div class="side-bar_right col-md-2">
                <div class="form-group">
                    <label for="image">Add Image:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="category">Category:</label>
                    <select class="form-control" id="category">
                        <?php
                        //Load category đã fetch từ CSDL
                        foreach ($categoryForView as $category) {
                            echo "<option>$category</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="button-btn text-center">
                    <button class="btn btn-primary btn-preview">Xem trước</button>
                    <input type="submit" name="NewPostSubmitBtn" id="NewPostSubmitBtn" class="btn btn-info btn-md" value="Lưu">
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/load_richtexteditor.js"></script>
    <script>
        $(document).ready(function() {
            // Bắt sự kiện click của nút "Lưu"
            $("#NewPostSubmitBtn").click(function() {
                alert("hehe");
                // Kích hoạt phương thức submit của form
                $("#new-post-form").submit();
            });
        });

        $(document).ready(function() {
            // Bắt sự kiện khi giá trị của select thay đổi
            $("#category").change(function() {
                // Lấy giá trị đã chọn
                var selectedValue = $(this).val();

                // Đẩy giá trị vào trường ẩn trong form
                $("#selectedCategory").val(selectedValue);
            });
        });
    </script>

</body>

</html>