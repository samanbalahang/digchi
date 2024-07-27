<?php
require_once 'head.php';
?>
<?php
$bid = $_GET['blog_id'];
$api = 'https://digchi.ir/new/Administrator/controllers/Blog/Blog.php?controller_type=get&bid=' . $bid;
$api = strval($api);
$blog = json_decode(CallAPI('get', $api));
if (isset($_SESSION['auth']['sUserId'])) {
    $user_id = $_SESSION['auth']['sUserId'];
}
?>

<body>
<div id="page">
    <?include ('header.php');?>
<!--    <header>-->
<!---->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="container">-->
<!--                    <div class="row">-->
<!--                        <div class="header-banner">-->
<!--                            <div class="assetBlock">-->
<!--                                <div id="slideshow">-->
<!--                                    <p>Special Offers! - Get <span>50%</span> off on vegetables </p>-->
<!--                                    <p>sale <span>40%</span> of on bulk shopping! </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div id="header">-->
<!--            <div class="container">-->
<!--                <div class="header-container row">-->
<!--                    <div class="logo logo-2"><a href="index.php" title="index">-->
<!--                            <div><img class="logo-image" src="Administrator/dist/img/CompanyLogo.png" alt="logo"></div>-->
<!--                        </a></div>-->
<!--                    <div class="fl-nav-menu float-right-sm-digchi">-->
<!--                        <nav>-->
<!--                            <div class="mm-toggle-wrap">-->
<!--                                <div class="mm-toggle"><i class="icon-align-justify"></i><span-->
<!--                                            class="mm-label">Menu</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="nav-inner">-->
<!---->
<!--                                <ul id="nav" class="hidden-xs">-->
<!---->
<!--                                    <li><a class="level-top" href="#"><span>صفحه اصلی</span></a></li>-->
<!--                                    --><?// $Menus = json_decode(CallAPI('get', 'https://digchi.ir/new/Administrator/controllers/BaseTables/MenuCategories/MenuCategories.php')); ?>
<!---->
<!--                                    <li class="mega-menu"><a class="level-top"-->
<!--                                                             href="grid.html"><span> منو غذا</span></a>-->
<!--                                        <div class="level0-wrapper dropdown-6col">-->
<!--                                            <div class="container">-->
<!--                                                <div class="level0-wrapper2">-->
<!--                                                    <div class="col-1">-->
<!--                                                        <div class="nav-block nav-block-center">-->
<!---->
<!--                                                            <ul class="level0">-->
<!--                                                                --><?php
//                                                                foreach ($Menus as $menu) {
//                                                                    ?>
<!--                                                                    <li class="level3 nav-6-1 parent item"><a-->
<!--                                                                                href="#"><span></span></a>-->
<!--                                                                        <ul class="level1">-->
<!--                                                                            <li class="level2 nav-4-1-1"><a-->
<!--                                                                                        href="test.php?mcid=--><?//= $menu->mcid ?><!--"><span>--><?//= $menu->name ?><!--</span></a>-->
<!--                                                                            </li>-->
<!---->
<!---->
<!--                                                                        </ul>-->
<!---->
<!--                                                                    </li>-->
<!--                                                                --><?// }
//                                                                $contractors1 = json_decode(CallAPI('get', 'https://digchi.ir/new/Administrator/controllers/Contractors/Contractors.php')); ?>
<!---->
<!--                                                        </div>-->
<!---->
<!--                                                    </div>-->
<!---->
<!--                                                    <div class="col-2">-->
<!--                                                        <div class="menu_image"><a title="" href="grid.html"><img-->
<!--                                                                        alt="menu_image" src="images/banner.jpg"></a>-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!---->
<!--                                                </div>-->
<!---->
<!--                                            </div>-->
<!---->
<!--                                        </div>-->
<!---->
<!---->
<!--                                    </li>-->
<!--                                    <li class="mega-menu"><a class="level-top" href="grid.html"><span>رستوران</span></a>-->
<!--                                        <div class="level0-wrapper dropdown-6col">-->
<!--                                            <div class="container">-->
<!--                                                <div class="level0-wrapper2">-->
<!--                                                    <div class="col-1">-->
<!--                                                        <div class="nav-block nav-block-center">-->
<!---->
<!--                                                            <ul class="level0">-->
<!--                                                                --><?php
//                                                                foreach ($contractors1
//
//                                                                         as $contractor) {
//                                                                    ?>
<!--                                                                    <li class="level3 nav-6-1 parent item"><a-->
<!--                                                                                href="#"><span></span></a>-->
<!--                                                                        <ul class="level1">-->
<!--                                                                            <li class="level2 nav-4-1-1"><a-->
<!--                                                                                        href="https://digchi.ir/new/menu.php?'--><?//= $contractor->contractor_id ?><!--'"><span>--><?//= $contractor->brandName ?><!--</span></a>-->
<!--                                                                            </li>-->
<!---->
<!---->
<!--                                                                        </ul>-->
<!---->
<!--                                                                    </li>-->
<!---->
<!--                                                                --><?// } ?>
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                    </li>-->
<!--                                    <li class="mega-menu"><a class="level-top"-->
<!--                                                             href="https://digchi.ir/new/blog.php"><span>بلاگ</span></a>-->
<!--                                    </li>-->
<!--                                    <li class="mega-menu"><a class="level-top"-->
<!--                                                             href="grid.html"><span>درباره ما</span></a></li>-->
<!--                                    <li class="level0 parent drop-menu"><a href="index.php#"><span>تماس با ما</span>-->
<!--                                        </a>-->
<!---->
<!--                                        <ul class="level1">-->
<!--                                            <li class="level1 first"><a href="grid.html"><span>Product Grid</span></a>-->
<!--                                            </li>-->
<!--                                            <li class="level1 nav-10-2"><a href="list.html"> <span>Product List</span>-->
<!--                                                </a>-->
<!--                                            </li>-->
<!--                                            <li class="level1 nav-10-3"><a href="product-detail.html">-->
<!--                                                    <span>Product Detail</span> </a></li>-->
<!--                                            <li class="level1 nav-10-4"><a href="shopping-cart.html">-->
<!--                                                    <span>Cart Page</span>-->
<!--                                                </a></li>-->
<!--                                            <li class="level1 first parent"><a-->
<!--                                                        href="checkout.html"><span>Checkout</span></a>-->
<!---->
<!--                                                <ul class="level2 right-sub">-->
<!--                                                    <li class="level2 nav-2-1-1 first"><a-->
<!--                                                                href="checkout-method.html"><span>Method</span></a>-->
<!--                                                    </li>-->
<!--                                                    <li class="level2 nav-2-1-5 last"><a-->
<!--                                                                href="checkout-billing-info.html"><span>Billing Info</span></a>-->
<!--                                                    </li>-->
<!--                                                </ul>-->
<!---->
<!--                                            </li>-->
<!--                                            <li class="level1 nav-10-4"><a href="wishlist.html"> <span>Wishlist</span>-->
<!--                                                </a>-->
<!--                                            </li>-->
<!--                                            <li class="level1"><a href="dashboard.html"> <span>Dashboard</span> </a>-->
<!--                                            </li>-->
<!--                                            <li class="level1"><a href="multiple-addresses.html">-->
<!--                                                    <span>Multiple Addresses</span> </a></li>-->
<!--                                            <li class="level1"><a href="about-us.html"> <span>About us</span> </a></li>-->
<!--                                            <li class="level1 first parent"><a href="blog.html"><span>Blog</span></a>-->
<!---->
<!--                                                <ul class="level2 right-sub">-->
<!--                                                    <li class="level2 nav-2-1-1 first"><a href="blog-detail.php"><span>Blog Detail</span></a>-->
<!--                                                    </li>-->
<!--                                                </ul>-->
<!---->
<!--                                            </li>-->
<!--                                            <li class="level1"><a href="contact-us.html"><span>Contact us</span></a>-->
<!--                                            </li>-->
<!--                                            <li class="level1"><a href="404error.html"><span>404 Error Page</span></a>-->
<!--                                            </li>-->
<!--                                            <li class="level1"><a href="login.html"><span>Login Page</span></a></li>-->
<!--                                            <li class="level1"><a href="quickview.html"><span>Quick View</span></a></li>-->
<!--                                            <li class="level1"><a href="newsletter.html"><span>Newsletter</span></a>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="fl-custom-tabmenulink mega-menu"><a href="index.php#" class="level-top">-->
<!--                                            <span>Custom</span> </a>-->
<!--                                        <div class="level0-wrapper fl-custom-tabmenu">-->
<!--                                            <div class="container">-->
<!--                                                <div class="header-nav-dropdown-wrapper clearer">-->
<!--                                                    <div class="grid12-3">-->
<!--                                                        <div><img src="images/custom-img1.jpg" alt="custom-image"></div>-->
<!--                                                        <h4 class="heading">Up to 70% Off</h4>-->
<!--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                                                    </div>-->
<!--                                                    <div class="grid12-3">-->
<!--                                                        <div><img src="images/custom-img2.jpg" alt="custom-image"></div>-->
<!--                                                        <h4 class="heading">Big Sale - Get 50% oFF</h4>-->
<!--                                                        <p>Sed et quam lacus. Fusce condimentum eleifend enim a-->
<!--                                                            feugiat.</p>-->
<!--                                                    </div>-->
<!--                                                    <div class="grid12-3">-->
<!--                                                        <div><img src="images/custom-img3.jpg" alt="custom-image"></div>-->
<!--                                                        <h4 class="heading">SALE UP TO 40% OFF</h4>-->
<!--                                                        <p>Sed et quam lacus. Fusce condimentum eleifend enim a-->
<!--                                                            feugiat.</p>-->
<!--                                                    </div>-->
<!--                                                    <div class="grid12-3">-->
<!--                                                        <div><img src="images/custom-img4.jpg" alt="custom-image"></div>-->
<!--                                                        <h4 class="heading">Summer Sale! limited time</h4>-->
<!--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                        </nav>-->
<!--                    </div>-->
<!--                    <div class="fl-header-right">-->
<!--                        <div class="collapse navbar-collapse">-->
<!--                            <form class="navbar-form" role="search">-->
<!--                                <div class="input-group">-->
<!--                                    <input type="text" class="form-control" placeholder="جستجو...">-->
<!--                                    <span class="input-group-btn">-->
<!--                  <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span-->
<!--                                  class="sr-only">جستجو</span> </span> </button>-->
<!--                  </span></div>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                        <div class="fl-links" style="float: left">-->
<!--                            <div class="no-js"><a title="Company" class="clicker"></a>-->
<!--                                <div class="fl-nav-links">-->
<!--                                    <div class="language-currency">-->
<!---->
<!--                                    </div>-->
<!--                                    <ul class="links">-->
<!--                                        <li><a href="dashboard.html" title="حساب من">حساب من</a></li>-->
<!--                                        <li><a href="wishlist.html" title="علاقه مندی ها">علاقه مندی ها</a></li>-->
<!--                                        <li><a href="checkout.html" title="ثبت سفارش">ثبت سفارش</a></li>-->
<!--                                        <li><a href="blog.html" title="بلاک"><span>بلاک</span></a></li>-->
<!--                                        --><?php
//                                        if (isset($_SESSION['digchi_user_login']) and $_SESSION['digchi_user_login'] == true) {
//                                            ?>
<!--                                            <li class="last"><a href="logout.php" title="خروج"><span>خروج</span></a>-->
<!--                                            </li>-->
<!--                                            --><?php
//                                        } else { ?>
<!--                                            <li class="last"><a href="login.php" title="ورود"><span>ورود</span></a></li>-->
<!--                                            --><?php
//                                        }
//                                        ?>
<!--                                    </ul>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        --><?php
//                        #require_once 'layers/mini-cart.php';
//                        ?>
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </header>-->

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2><a class="text-white"
                               href="blog-detail.php?blog_id=<?= $blog->bid ?>"><?= $blog->title ?></a></h2>
                    </div>
                </div>
                <!--col-xs-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <!-- BEGIN Main Container -->
    <div class="main-container col2-left-layout">
        <div class="main container">
            <div class="row">
                <div class="col-left sidebar col-sm-3 blog-side">
                    <div id="secondary" class="widget_wrapper13" role="complementary">
                        <div id="recent-posts-4"
                             class="popular-posts widget widget__sidebar wow bounceInUp animated animated"
                             style="visibility: visible;">
                            <h2 class="widget-title">Most Popular Posts</h2>
                            <div class="widget-content">
                                <ul class="posts-list unstyled clearfix">
                                    <?php
                                    $MostPopularPosts = json_decode(CallAPI('post', 'https://digchi.ir/new/Administrator/controllers/Front/Blog.php'));
                                    foreach ($MostPopularPosts as $pblog) {
                                        ?>

                                        <li>
                                            <figure class="featured-thumb"><a
                                                        href="blog-detail.php?blog_id=<?= $pblog->bid ?>"> <img
                                                            src="../assts/img/blog/<?= $pblog->pic ?>"
                                                            alt="<?= $pblog->title ?>"> </a></figure>
                                            <!--featured-thumb-->
                                            <div class="content-info">
                                                <h4>
                                                    <a href="blog-detail.php?blog_id=<?= $pblog->bid ?>"><?= $pblog->title ?></a>
                                                </h4>

                                            </div>
                                        </li>
                                        <?php
                                    } ?>
                                </ul>
                            </div>
                            <!--widget-content-->
                        </div>
                        <div id="categories-2" class="widget widget_categories wow bounceInUp animated animated"
                             style="visibility: visible;">
                            <h2 class="widget-title">Categories</h2>
                            <div class="content">
                                <ul>
<!--                                    <li><a href="blog.html#">PhotoShop</a></li>-->
<!--                                    <li><a href="blog.html#">News</a></li>-->
<!--                                    <li><a href="blog.html#">Illustration</a></li>-->
<!--                                    <li><a href="blog.html#">Foods and Drinks</a></li>-->
<!--                                    <li><a href="blog.html#">Social</a></li>-->
<!--                                    <li><a href="blog.html#">Technology</a></li>-->
<!--                                    <li><a href="blog.html#">Uncategorized</a></li>-->
<!--                                    <li><a href="blog.html#">Videos</a></li>-->
                                </ul>
                            </div>
                        </div>
                        <!-- Banner Ad Block -->
                        <div class="custom-slider">
                            <div>
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#carousel-example-generic"
                                            data-slide-to="0"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active"><img src="images/slide2.jpg" alt="slide3">
                                            <div class="carousel-caption">
                                                <h4>Fruit Shop</h4>
                                                <h3><a title=" Sample Product" href="product-detail.html">Up to 70%
                                                        Off</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <a class="link" href="blog.html#">Buy Now</a></div>
                                        </div>
                                        <div class="item"><img src="images/slide3.jpg" alt="slide1">
                                            <div class="carousel-caption">
                                                <h4>Black Grapes</h4>
                                                <h3><a title=" Sample Product" href="product-detail.html">Mega Sale</a>
                                                </h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <a class="link" href="blog.html#">Buy Now</a>
                                            </div>
                                        </div>
                                        <div class="item"><img src="images/slide1.jpg" alt="slide2">
                                            <div class="carousel-caption">
                                                <h4>Food Farm</h4>
                                                <h3><a title=" Sample Product" href="product-detail.html">Up to 50%
                                                        Off</a></h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <a class="link" href="blog.html#">Buy Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="blog.html#carousel-example-generic"
                                       data-slide="prev"> <span class="sr-only">Previous</span> </a> <a
                                            class="right carousel-control" href="blog.html#carousel-example-generic"
                                            data-slide="next"> <span class="sr-only">Next</span> </a></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-main col-sm-9 main-blog">
                    <div id="main" class="blog-wrapper">
                        <div id="primary" class="site-content">
                            <div id="content" role="main">
                               <article id="post-<?= $blog->bid ?>"
                                         class="blog_entry clearfix wow bounceInUp animated animated"
                                         style="visibility: visible;">
                                    <div class="entry-content">
                                        <div class="featured-thumb"><a href="blog-detail.php?blog_id=<?= $blog->bid ?>"><img
                                                        src="../assts/img/blog/<?= $blog->pic ?>" alt="blog-img3"></a>
                                        </div>
                                        <header class="blog_entry-header clearfix">
                                            <div class="blog_entry-header-inner">


                                            </div>
                                            <!--blog_entry-header-inner-->
                                        </header>
                                        <div class="entry-content">
                                            <?= html_entity_decode($blog->content) ?>
                                            <?php
                                            if (isset($user_id)) {

                                                ?>
                                                <div id="commentrep" class="cursor text-blue">
                                                    برای نمایش بخش کامنت ها کلیک کنید.
                                                    <?php
                                                    global $db;

                                                    # count number of comment;
                                                    $query = "SELECT COUNT(comment_id) FROM tblComment WHERE blog_id = '$bid' AND childoff = 0";
                                                    if($result = mysqli_query($db, $query)){
                                                        $rowcount = mysqli_num_rows($result);
                                                    }


                                                   # echo "<span class='commentnum'>" . $rowcount . "</span>";
                                                    ?>
                                                </div>
                                                <section class="comment p-5" id="commentsec" style="display: none;">
                                                    <textarea name="comment" id="comment" class="w-100">

                                                    </textarea>
                                                    <br>

                                                    <button id="sendcomment" class="btn btn-info">ارسال کامنت</button>

                                                    <section class="comments">
                                                        <ul class="comment replay list">
                                                            <?php
                                                            $commentsquery = "select * from tblComment as comment WHERE blog_id='$blog->bid' AND childoff = 0 ORDER BY comment_id DESC LIMIT 10";
                                                            $showcomments = $pdo->query($commentsquery);
                                                            while ($shocomment = $showcomments->fetchObject()) {
                                                                ?>
                                                                <li>
                                                                    <?= $shocomment->content ?>
                                                                    <br>
                                                                    <button class="addreplay"
                                                                            id="addreply<?= $shocomment->comment_id ?>">
                                                                        ارسال پاسخ
                                                                    </button>
                                                                    <?php
                                                                    $therepliesq = "select * from tblComment as comment WHERE blog_id='$blog->bid' AND childoff='$shocomment->comment_id' ORDER BY comment_id DESC LIMIT 10";
                                                                    $thereplies = $pdo->query($therepliesq);
                                                                    while ($thereplie = $thereplies->fetchObject()) {
                                                                    ?>
                                                                    <section class="thereplies">
                                                                        <?= $thereplie->content ?>
                                                                    </section>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    <section class="reply"
                                                                             id="replyof<?= $shocomment->comment_id ?>"
                                                                             style="display: none">
                                                                <textarea name="comment"
                                                                          id="commentof<?= $shocomment->comment_id ?>">

                                                                </textarea>
                                                                        <input type="hidden" name="childoff"
                                                                               value="<?= $shocomment->comment_id; ?>"
                                                                               id="childoff<?= $shocomment->comment_id; ?>">
                                                                        <button id="sendreplay<?= $shocomment->comment_id ?>">
                                                                            ارسال
                                                                            پاسخ
                                                                        </button>
                                                                    </section>
                                                                </li>
                                                                <?php

                                                            }
                                                            ?>

                                                        </ul>
                                                    </section>
                                                </section>


                                                <?php
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <!--#main wrapper grid_8-->

                </div>
                <!--col-main col-sm-9-->
            </div>
        </div>
        <!--main-container-->

    </div>
    <!--col2-layout-->


    <!--    <div class="container">-->
    <!--        <div class="row our-features-box">-->
    <!--            <ul>-->
    <!--                <li class="float-right-hassan">-->
    <!--                    <div class="feature-box">-->
    <!--                        <div class="icon-truck"></div>-->
    <!--                        <div class="content">FREE SHIPPING on order over $99</div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="float-right-hassan">-->
    <!--                    <div class="feature-box">-->
    <!--                        <div class="icon-support"></div>-->
    <!--                        <div class="content">Have a question?<br>-->
    <!--                            +1 800 789 0000</div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="float-right-hassan">-->
    <!--                    <div class="feature-box">-->
    <!--                        <div class="icon-money"></div>-->
    <!--                        <div class="content">100% Money Back Guarantee</div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="float-right-hassan">-->
    <!--                    <div class="feature-box">-->
    <!--                        <div class="icon-return"></div>-->
    <!--                        <div class="content">30 days return Service</div>-->
    <!--                    </div>-->
    <!--                </li>-->
    <!--                <li class="last" style="direction: ltr">-->
    <!--                    <div class="feature-box"> <a href="blog.html#"><i class="fa fa-apple"></i> download</a> <a href="blog.html#"><i class="fa fa-android"></i> download</a> </div>-->
    <!--                </li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->
    <!-- For version 1,2,3,4,6 -->
    <?php
    require_once 'footer.php';

    ?>

    <!-- End For version 1,2,3,4,6 -->
    <div class="bg-black" id="bg-black">

    </div>
</div>

<!-- Mobile Menu-->
<?php
require_once 'manumobile.php';
?>
<!--page-->

<!-- JavaScript -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/revslider.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
<script type="text/javascript" src="Administrator/plugins/sweetalert2/sweetalert2.js"></script>
<script>
    $("#commentrep").click(function () {
        console.log("Submitted he");
        $("#commentsec").slideToggle("slow");
    });

</script>
<script>
    $("input[name='searchname']").change(function () {
        console.log("Submitted he");
    });
    $("#bg-black").addClass("d-none");
    $("#menu-button").click(function () {
        $("#bg-black").toggleClass("d-none");
        $("#mobile-menu").removeClass("d-none");
    });
    $("#bg-black").click(function () {
        console.log("#sls");
        $("#bg-black").addClass("d-none");
        $("#mobile-menu").addClass("d-none");
    });

</script>
<script>
    $("#sendcomment").on('click', () => {
        console.log("click is triger");
        var user_id = <?= $user_id ?> ;
        var blog_id = <?= $bid ?>;
        var content = document.getElementById('comment').value;
        console.log(comment);
        $.ajax({
            url: "Administrator/controllers/Comment/Comment.php",
            type: "post",
            data: {
                controller_type: "comment",
                user_id: user_id,
                content: content,
                blog_id: blog_id
            },
            success: (res) => {
                $("#loader").hide();
                if (res == 'true') {
                    Swal.fire({
                        icon: 'success',
                        title: 'پیام',
                        text: 'پیام شما با موفقیت ثبت شد و بعد از تائید درج میشود.',
                        showConfirmButton: false,
                        showCloseButton: true,
                        onAfterClose: () => {
                            window.location.reload();
                        }
                    })
                } else {
                    console.log(res);
                }
            }
        });
    });
</script>
<?php
$commentsquery = "select * from tblComment as comment WHERE blog_id='$blog->bid' ORDER BY comment_id DESC LIMIT 10";
$showcomments = $pdo->query($commentsquery);
while ($scriptcomment = $showcomments->fetchObject()) {

?>
<script>
    $("#addreply<?= $scriptcomment->comment_id?>").click(function () {
        $("#replyof<?=$scriptcomment->comment_id?>").slideToggle("slow");
    });
    $("#sendreplay<?=$scriptcomment->comment_id?>").on('click', () => {
        console.log("click is triger");
        var user_id = <?= $user_id ?> ;
        var blog_id = <?= $bid ?>;
        var content = $("#commentof<?= $scriptcomment->comment_id ?>").val();
        var childoff = $("#childoff<?= $scriptcomment->comment_id; ?>").val();
        console.log(comment);
        $.ajax({
            url: "Administrator/controllers/Comment/Comment.php",
            type: "post",
            data: {
                controller_type: "reply",
                user_id: user_id,
                content: content,
                blog_id: blog_id,
                childoff:childoff,

            },
            success: (res) => {
                $("#loader").hide();
                if (res == 'true') {
                    Swal.fire({
                        icon: 'success',
                        title: 'پیام',
                        text: 'پیام شما با موفقیت ثبت شد و بعد از تائید درج میشود.',
                        showConfirmButton: false,
                        showCloseButton: true,
                        onAfterClose: () => {
                            window.location.reload();
                        }
                    })
                } else {
                    console.log(res);
                }
            }
        });
    });
</script>
    <?php
}
?>




</body>
</html>