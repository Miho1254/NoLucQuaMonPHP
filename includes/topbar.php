<div class="top-bar d-flex align-items-center container justify-content-center mt-3">
        <p class="ml-auto">Trung tâm Văn hóa Nghệ thuật Tp. Hồ Chí Minh</p>
        <p class="ml-3 d-none d-md-block" style="color: #e15f1d;"><i class="fa-regular fa-envelope"></i>
            webdesign@gmail.com</p>
        <p class="ml-3 d-none d-md-block" style="color: #e15f1d;"><i class="fa-regular fa-clock"></i> 8:00 -
            21:30</p>
        <p class="ml-3 d-none d-md-block" style="color: #e15f1d;"><i class="fa-solid fa-phone"></i> 0909009009
        </p>
        <?php
        //Có session thì hiện nút đăng xuất không thì thôi
        if (isset($_SESSION['UserID'])) {
            echo '<p class="ml-3 d-none d-md-block"><a style="color: #e15f1d;" onclick="CalldeleteSession(); href= "#">LOGOUT</a></p>';
        } else {
            echo '<p class="ml-3 d-none d-md-block"><a style="color: #e15f1d;" href="/admin/login">LOGIN</a></p>';
        }
        ?>
    </div>