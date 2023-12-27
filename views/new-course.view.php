<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/new-course.css">
    <link rel="stylesheet" href="../assets/css/index.css">
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

        <div class="course_content d-flex flex-row">
            <?php
            include './includes/ad-dashboard.php';
            ?>
            <div class="category col-md-9 container">
                <div class="courseinput mt-5">
                    <form action="" method="post">
                        <div class="row mt-3">
                            <label class="col-md-3" for="coursename ">Tên khoá học:</label>
                            <input class="col-md-9" type="text" id="coursename" name="coursename" required>
                        </div>

                        <div class="row mt-3">
                            <label class="col-md-3" for="coursefather-name ">Tên khoá học cha:</label>
                            <select id="coursefather-name" name="coursefather-name" class="form-control col-md-9">
                                <option>Không có</option>
                                <?php
                                //Load category đã fetch từ CSDL
                                foreach ($coursesForView as $course) {
                                    echo "<option>$course</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="row mt-3">
                            <label class="col-md-3" for="coursedescription">Mô tả:</label>
                            <textarea class="col-md-9" id="coursedescription" name="coursedescription" rows="4" required></textarea>
                        </div>

                        <div class="row mt-3">
                            <label class="col-md-3" for="introduce-post-course">ID bài viết giới thiệu khoá học:</label>
                            <input class="col-md-9" type="text" id="idBaiViet" name="idBaiViet">
                        </div>

                        <div class="row mt-3">
                            <label class="col-md-3" for="introduce-post-course">URL ảnh bìa:</label>
                            <input class="col-md-9" type="text" id="imagePath" name="imagePath" required>
                        </div>
                        <input type="hidden" id="selectedCategory" name="selectedCategory">
                        <div class="d-flex justify-content-end mt-2">
                            <input type="submit" name="coursesubmit" id="coursesubmit" class="btn btn-info " value="Tạo">
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {

        });

        $(document).ready(function() {
            // Bắt sự kiện khi giá trị của select thay đổi
            $("#coursefather-name").change(function() {

                // Lấy giá trị đã chọn
                var selectedValue = $(this).val();

                // Đẩy giá trị vào trường ẩn trong form
                $("#selectedCategory").val(selectedValue);
            });
        });
    </script>

</body>

</html>