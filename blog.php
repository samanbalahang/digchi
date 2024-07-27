<?php

require_once 'head.php';
require_once 'Administrator/Connection/works.php';

?>
<?php


?>
<?php
function extracss()
{
    global $ROUTE;
    $api = 'https://digchi.ir/new/Administrator/controllers/Blog/Blog.php?controller_type=get&bid=' . $bid;
    $api = strval($api);
    $blog = json_decode(CallAPI('get', $api));
    $description = "وبلاگ دیگچی معرفی غذاها و فرهنگ های غذایی مناطق و کشور های مختلف و سرآشپزان کشورهای مختلف";
    $seos = "<title>" . $ROUTE . "</title>" .
        "<meta name='description' content='" . $description . "'/>" .
        "<meta name='robots'" . "content='index, follow" . "/>" .
        "<meta name='googlebot' content='index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1' />" .
        "<meta name='bingbot' content='index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1' />" .
        "<link rel='canonical' href='https://digchi.ir/new/' />" .
        "<meta property='og:locale' content='fa-IR' />" .
        "<meta property='og:type' content='website' />" .
        "<meta property='og:title' content='وبلاگ دیگچی'/>" .
        "<meta property='og:description' content='" . $description . " />" .
        "<meta property='og:url' content='https://digchi.ir/new/' />" .
        "<meta property='og:site_name' content='https://digchi.ir/new/' />" .
        "<meta property='article:publisher' content='https://www.facebook.com/digchi/' />" .
        "<meta property='article:modified_time' content='" . jdate(date("Y/m/d")) . "' />" .
        "<meta property='og:image:width' content='717' />" .
        "<meta property='og:image:height' content='669' />" .
        "<meta name='twitter:card' content='summary_large_image' />" .
        "<meta name='twitter:creator' content='@digchi' />" .
        "<meta name='twitter:site' content='@digchi' />";
    return $seos;
}

?>
<body>
<div id="page">
    <? include('header.php'); ?>
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>وبلاگ دیگچی</h2>
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
                            <h2 class="widget-title">محبوب ترین غذا ها</h2>
                            <div class="widget-content">
                                <ul class="posts-list unstyled clearfix">
                                    <?php
                                    foreach ($blogs as $blog) {
                                        ?>

                                        <li>
                                            <figure class="featured-thumb"><a
                                                        href="blog-detail.php?blog_id=<?= $blog->bid ?>"> <img
                                                            src="../assts/img/blog/<?= $blog->pic ?>"
                                                            alt="<?= $blog->title ?>"> </a></figure>
                                            <!--featured-thumb-->
                                            <div class="content-info">
                                                <h4>
                                                    <a href="blog-detail.php?blog_id=<?= $blog->bid ?>"><?= $blog->title ?></a>
                                                </h4>
                                                <p class="post-meta">
                                                    <time class="entry-date"><?= jdate("F", $blog->bdate) ?></time>
                                                    .
                                                </p>
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
                            <h2 class="widget-title">دستـه بنــدی</h2>
                            <div class="content">
                                <ul>
                                    <?php
                                    $SubCategories = json_decode(CallAPI('get', 'https://digchi.ir/new1/Administrator/controllers/BaseTables/ContractorCategories/ContractorCategories.php'));

                                    foreach ($SubCategories

                                    as $subCat) {
                                        ?>
                                        <li>
                                            <img width="50px" height="50px"
                                                 src="Administrator/images/icons/<?= $subCat->pic ?>"
                                                 alt="">
                                            <a
                                                    href="https://digchi.ir/new1/restaurant.php?t=<?= $subCat->cid ?>"><span><?= $subCat->title ?></span></a>
                                        </li>
                                        <?
                                    }
                                    ?>
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
                                            <div class="carousel-caption mt-3">
                                                <h4>رستــوران رعـنا</h4>
                                                <h3><a title=" Sample Product" href="product-detail.html">
                                                        تخفـیف 70%
                                                    </a></h3>
                                                <p>
                                                    چلوکوبیده
                                                </p>
                                                <a class="link" href="blog.html#">همین حالا خرید کنید</a></div>
                                        </div>
                                        <div class="item"><img src="images/slide3.jpg" alt="slide1">
                                            <div class="carousel-caption">
                                                <h4>رستـوران آسمـون</h4>
                                                <h3><a title=" Sample Product" href="product-detail.html">20% تخفیف</a>
                                                </h3>
                                                <p>
                                                    تخفیف پیتـزا . برگـر
                                                </p>
                                                <a class="link" href="blog.html#">همین حالا خرید کنید</a>
                                            </div>
                                        </div>
                                        <div class="item"><img src="images/slide1.jpg" alt="slide2">
                                            <div class="carousel-caption">
                                                <h4>رستـوران گریـک</h4>
                                                <h3><a title=" Sample Product" href="product-detail.html">
                                                        تخـفیف 50%
                                                    </a></h3>
                                                <p>تخفیف سالاد ها</p>
                                                <a class="link" href="blog.html#">همین حالا خرید کنید</a>
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
                                <?php
                                $rowcount = "SELECT COUNT(bid) FROM tblBlog";
                                $rowcount = $pdo->query($rowcount);
                                $rowcount = $rowcount->fetchObject();
                                $rowcount = intval($rowcount);
                                $paginatenum = intval($rowcount / 10);
                                if (fmod($rowcount, 10) != 0) {
                                    $paginatenum++;
                                }

                                //                                $blogs = json_decode(CallAPI('get', "https://digchi.ir/new/Administrator/controllers/Blog/Blog.php"));
                                #new code
                                if (!isset($_GET['page'])) {
                                    $strquery = "select * from tblBlog as Blog LIMIT 10";

                                } else {
                                    $offset = intval($_GET['page']);
                                    $strquery = strval("select * from tblBlog as Blog LIMIT 10 , " . $offset);
                                }
                                $strquery = strval($strquery);
                                $blogs = $pdo->query($strquery);
                                while ($blog = $blogs->fetchObject()) {
                                    #end
                                    #foreach ($blogs as $blog) {
                                    ?>
                                    <article id="post-<?= $blog->bid ?>"
                                             class="blog_entry clearfix wow bounceInUp animated animated"
                                             style="visibility: visible;">
                                        <div class="entry-content">
                                            <div class="featured-thumb"><a
                                                        href="blog-detail.php?blog_id=<?= $blog->bid ?>"><img
                                                            src="../assts/img/blog/<?= $blog->pic ?>"
                                                            alt="blog-img3"></a></div>
                                            <header class="blog_entry-header clearfix">
                                                <div class="blog_entry-header-inner">
                                                    <h2 class="blog_entry-title"><a
                                                                href="blog-detail.php?blog_id=<?= $blog->bid ?>"><?= $blog->title ?></a>
                                                    </h2>

                                                </div>
                                                <!--blog_entry-header-inner-->
                                            </header>
                                            <div class="entry-content">
                                                <?= mb_substr((html_entity_decode($blog->content)), 0, 150) ?>
                                            </div>
                                            <p style="float: left"><a href="blog-detail.php?blog_id=<?= $blog->bid ?>"
                                                                      class="btn">بیشتر بخوانید</a></p>
                                        </div>
                                    </article>
                                    <?php
                                } ?>

                            </div>
                        </div>
                        <div class="pager">
                            <div class="pages">
                                <ol class="pagination">
                                    <?php
                                    for ($x = 0; $x <= $paginatenum; $x++) {
                                        ?>
                                        <?php
                                        if ($x == 0) {
                                            ?>
                                            <li class="<?php if (!isset($_GET['page'])) {
                                                echo 'active';
                                            } ?>"><a href="blog.php">1</a></li>
                                            <?php
                                        } else {
                                            ?>

                                            <li class="<?php if ($_GET['page'] == $x + 1) {
                                                echo 'active';
                                            } ?>"><a class="button"
                                                     href="blog.php?page=<?= $x + 1; ?>"><?= $x + 1; ?></a></li>

                                            <?php
                                        }
                                    }
                                    ?>
                                </ol>
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


    <!-- For version 1,2,3,4,6 -->
    <?php
    require_once('footer.php');
    ?>


</div>
<!--page-->
<!-- Mobile Menu-->

<div class="bg-black" id="bg-black">

</div>
</div>
<!-- JavaScript -->
<?php
require_once 'manumobile.php';
?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/revslider.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
<script>
    $(window).on('load', () => {
        $("img").each(function () {
            let src = $(this).attr("data-src");
            $(this).attr("src", src);
        });
    });

    function SubmitRequest() {
        <?php
        if (isset($sUserId) and $sUserId > 0){ ?>

        let newForm = '<form id="checkoutform" action="checkOut.php" method="post">' +
            '<?=hiddenInput($sUserId, 'uid')?>' +
            '<?=csrf_field("checkout")?>' +
            '</form>';

        $('body').append(newForm);
        $("#checkoutform").submit();
        <?php
        } else {
        ?>
        UserLogin();
        <?php
        } ?>
    }

    function showLoader() {
        $("#cart").addClass('beingLoaded');
        $("#loader").fadeIn(500);
    }

    function hideLoader() {
        $("#cart").removeClass('beingLoaded');
        $("#loader").fadeOut(250);
    }
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
</body>
</html>