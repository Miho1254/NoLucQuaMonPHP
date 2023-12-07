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

    <style>
        .mt-10{
            margin-top: 100px;
        }
    </style>

</head>

<body>
    <div class="container d-flex align-items-center vh-100 mt-10">
        <div class="error-content text-center">
            <h1 class="error-title" style="color: red;">404 Not Found</h1>
            <img class="error-img" src="../assets/images/error.png" alt="" style="height: 40%; width: 40%;">
            <p>Hình như trang bạn tìm kiếm không tồn tại.</p>
            <div class="button-come-back">
                <a href="/" target="_self" class="btn btn-come-back text-white" style="background-color: blue;">
                    <span>Come back</span>
                </a>
            </div>
        </div>
    </div>

</body>

</html>