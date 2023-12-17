<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng bài viết mới</title>
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
    <div class="new-post d-flex flex-row">
        <?php
        include './includes/ad-dashboard.php';
        ?>
        <div class="container pl-5 pr-5 pt-5">
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea class="form-control" id="content" name="content" rows="15" required></textarea>
                </div>
            </form>
        </div>

        <div class="side-bar_right">
            <div class="form-group">
                <label for="image">Add Image:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" id="category">
                    <option>Technology</option>
                    <option>Sports</option>
                    <option>Travel</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>
            <div class="button-btn text-center">
                <button class="btn btn-primary btn-preview">Xem trước</button>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </div>
        </div>

    </div>


</body>

</html>