<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/admin-dashboard.css">
    <title>Admin dashboard</title>
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
        <div class="nav container-fluid">
            <div class="navbar container d-flex align-content-center">
                <div class="logo">
                    <a style="height: 100%;" href="/"><img style="height: 100%;" src="../assets/images/logo10.png" alt=""></a> 
                    <img src="../assets/css/in" alt="">
                </div>
            </div>
        </div>
        <?php 
            include './includes/sidebar.php';
        ?>
    </div>
</body>

</html>