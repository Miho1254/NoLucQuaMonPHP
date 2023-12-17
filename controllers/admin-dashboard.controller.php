<!-- include TouchSwipe.Js -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.19/jquery.touchSwipe.min.js'></script>

<!-- swipe start -->
<script type="text/javascript">
	// carousel is the default bootstrap carousel class
    $(".carousel").swipe({
        swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left') $(this).carousel('next');
            if (direction == 'right') $(this).carousel('prev');
        },
        allowPageScroll: "vertical" 
    });
</script>
<!-- swipe end -->
<link rel="stylesheet" href="../assets/css/admin-dashboard.css">
<?php 
include './views/admin-dashboard.view.php';
?>