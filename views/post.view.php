<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/post.css">
    <title>Document</title>
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
        <div class="header">
            <?php
            include './includes/topbar.php';
            include './includes/navbar.php';
            ?>
        </div>
        <div class="content container mt-md-4">
            <div class="row">
                <div class="content-left col-md-9 text-left">
                    <div class="categories">
                        <a href="" style="text-transform: uppercase; font-size: 13px;"><span>Tin tức</span></a>
                    </div>
                    <div class="posts">
                        <div class="post-title mt-md-2" style="color: #0A0A0A; font-family: 'Open Sans', sans-serif;">
                            <h3><span class="font-weight-bold"><?php echo $post['PostTitle']?></span></h3>
                        </div>
                        <div class="time mt-md-2">
                            <p style="font-size: 13px;">POSTED ON <span style="color: #FF6600;"><?php echo $post['Createt_At']?></span> BY <span style="color: #FF6600;"><?php echo $authorName?></span> </p>
                        </div>
                        <div class="post-content">
                        <?php echo $post['Post_Content']?>
                        </div>
                    </div>

                    <div class="next-and-prev">
                        <hr>
                        <div class="row" style="height: 5%;">
                            <div class="prev col-md-6 text-left" style="height: 100%;">
                                <a href=""><i class="fa-solid fa-chevron-left mr-md-1"></i>Góc nhìn mới về giáo dục nghệ thuật</a>
                            </div>
                            <div class="next col-md-6 text-right" style="height: 100%;">
                                <a href="">Phát huy sức mạnh giáo dục nhân cách cho trẻ bằng Văn học thiếu nhi<i class="fa-solid fa-chevron-right ml-md-1"></i></a>
                            </div>
                        </div>
                        <hr>

                    </div>

                    <div id="comments" class="comments-area">
                        <div id="respond" class="comment-respond">
                            <h3 id="reply-title" class="comment-reply-title">Trả lời <small><a rel="nofollow" id="cancel-comment-reply-link" href="/giai-dieu-mua-he-2017-san-choi-moi-cho-cac-ban-nho-dam-me-nghe-thuat/#respond" style="display:none;">Hủy</a></small></h3>
                            <form action="https://edu.maugiaodien.com/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                                <p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span></p>
                                <div class="form-group comment-form-comment">
                                    <label for="comment">Bình luận <span class="required">*</span></label>
                                    <textarea id="comment" name="comment" class="form-control" rows="4" maxlength="65525" required="required"></textarea>
                                </div>
                                <div class="form-row comment-form-row">
                                    <div class="col-md-4 form-group comment-form-author">
                                        <label for="author">Tên <span class="required">*</span></label>
                                        <input id="author" name="author" type="text" class="form-control" value="" size="30" maxlength="245" required="required">
                                    </div>
                                    <div class="col-md-4 form-group comment-form-email">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input id="email" name="email" type="email" class="form-control" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required">
                                    </div>
                                    <div class="col-md-4 form-group comment-form-url">
                                        <label for="url">Trang web</label>
                                        <input id="url" name="url" type="url" class="form-control" value="" size="30" maxlength="200">
                                    </div>
                                </div>
                                <div class="form-group comment-form-cookies-consent">
                                    <div class="form-check">
                                        <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" class="form-check-input" value="yes">
                                        <label class="form-check-label" for="wp-comment-cookies-consent">Lưu tên của tôi, email, và trang web trong trình duyệt này cho lần bình luận kế tiếp của tôi.</label>
                                    </div>
                                </div>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="btn text-light comment-form-submit" value="Phản hồi">
                                    <input type="hidden" name="comment_post_ID" value="431" id="comment_post_ID">
                                    <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <?php 
                    include './includes/sidebar-post.php';
                ?>
            </div>
        </div>
    </div>
    
</body>

</html>