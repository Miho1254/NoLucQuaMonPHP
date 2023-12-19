<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <title>404 Not found</title>
    <script src="../vendor/jquery-3.6.0.min.js"></script>
    <script src="../vendor/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <style>
        .mt-10 {
            margin-top: 100px;
        }

        .btn-dark {
            color: black;
            background-color: #343a40;
            border-color: #343a40;
            border-radius: 35px;
            border: 2px solid grey;
        }

        .nounderline {
            text-decoration: none !important
        }
    </style>

</head>

<body>
    <div class="container d-flex align-items-center vh-100 mt-10">
        <div class="error-content text-center">
            <h1 class="error-title" style="color: red;">404 Not Found</h1>
            <img class="error-img" src="../assets/images/error.png" alt="" style="height: 40%; width: 40%;">
            <p style="font-size: 1.25rem;">Hình như trang bạn tìm kiếm không tồn tại.</p>
            <div class="button-come-back">
                <a href="/" target="_self" class="btn-lg btn-dark text-white nounderline">
                    <span>Go home</span>
                </a>
            </div>
        </div>
        <?php
        include './includes/footer.php';
        ?>
    </div>

</body>

</html>