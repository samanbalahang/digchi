<?php
session_start();
require_once 'head.php';
require_once 'Administrator/Connection/works.php';

?>
<style>
    body {
        direction: rtl;
    }

    .owl-carousel {
        direction: ltr;
    }

    .rtlarrow, .ltrarrow {
        width: 72px;
        height: 72px;
    }

    .rtlarrow {
        background: url(../images/right-arrow.png) 0 0;
    }

    .ltrarrow {
        background: url(../images/left-arrow.png) 0 0;
    }

    .text {
        color: #f2f2f2;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        top: 50%;
        right: 5%;
        line-height: 7rem;
        font-size: 24px;
        margin: auto;
        text-align: center;
        transform: translatey(-50%);
        border-right: 5px solid #538c13;
        font-family: IRANSans !important;
    }

    .tocardfilter {
        font-size: 1rem;
        border-bottom: 1px solid #dcdbdb !important;
        padding: 20PX 10PX 0px 11px;
    }

    .d-none {
        display: none !important;
    }

    #menu2 .card {
        border: none;
    }

    .restrows {
        border-bottom: 1px solid #ccc !important;
        padding: 15px 0px;
    }

    .narrow-text {
        font-weight: bolder;
    }

    .btn-success {
        color: #ffffff;
        background-color: #80b435;
        border-color: #4cae4c;
    }

    a.button-grid {
        background: url(images/icon_list_act.png) no-repeat 10px 7px;
        background-color: #bdbdbd;
        color: #333;
        padding: 6px 11px 7px 22px;
        border: 1px #ddd solid;
        border-radius: 0px;
    }

    a.button-grid.active {
        background-color: #80b435;
        color: #fff;
        border: 1px #80b435 solid;
        border-radius: 0px;
    }

    span.button-active.button-list {
        background: #bdbdbd url(images/icon_grid_over.png) no-repeat 12px 9px;
        border: 1px #ddd solid;
        color: #333;
        padding: 6px 8px 7px 25px;
        border-radius: 0px;
    }

    span.button-active.button-list.active {
        background-color: #80b435;
        border: 1px #80b435 solid;
        color: #fff;
        padding: 6px 8px 7px 25px;
        border-radius: 0px;
    }

    .border-left {
        border-left: 1px solid #33333340 !important;
    }

    .img-card-grid {
        max-height: 238px !important;
        min-height: 238px !important;
    }

    .menu-2-col-img.col-md-12 .over-flow-hidden {
        overflow: hidden;
    }

    .menu-2-col-img.col-md-12 .over-flow-hidden img {
        transition: 0.2s;
        transform: scale(1);

    }

    .menu-2-col-img.col-md-12 .over-flow-hidden:hover img {
        transform: scale(1.2);
        transition: 0.2s;
    }

    .card.restrows.col-xs-4.border-left {
        min-height: 467px;
    }

    .card.restrows.col-xs-4.border-left {
        padding: 0px;
    }

    .w-75 {
        width: 75% !important;
    }

    .m-auto {
        margin: auto !important;
    }

    .border-r-l-b-blue {
        border: 1px solid #0ba29b3b;
        border-top: none;
    }

    .border-blue {
        border-color: #0ba29b3b;
    }

    .col-md-12 .m-text-center {
        text-align: center;
    }
    .col-xs-4 .rating-box{
        margin-right:auto ;
        margin-left:auto;
    }
    .col-xs-12 .rating-box{
        margin:0px ;
    }

    .sliderlink {
        color: white !important;
    }

    .sliderlink:link {
        color: white;
    }

    /* visited link */
    .sliderlink:visited {
        color: #00FF00;
    }

    /* mouse over link */
    .sliderlink:hover {
        color: #FF00FF;

    }

    /* selected link */
    .sliderlink:active {
        color: #0000FF;
    }
    .rest-link:link{
        color: white;
    }
    .rest-link:visited {
        color: #86ff00;
    }

    /* mouse over link */
    .rest-link:hover {
        color: #86ff00;
         text-shadow: 0px 2px 6px #062d02;
    }

    /* selected link */
    .rest-link:active {
        color: #86ff00;
    }

    .catrestdiv {
        padding: 10px 12px;
        border-right: 2px solid #80b435;
        border-bottom: 1px solid #ccc;
    }

    .fa.fa-plus:before {
        content: '\f067';
        font-family: IRANSans, FontAwesome;
        font-size: 1rem;
        padding-left: 4px;
        padding-top: 2px;
        margin-right: 6px;
        margin-top: -2px;
        height: 40px;
        cursor: pointer;
        color: #000000;
    }
    .fa.fa-heart{
        content: '\f004';
        font-family: IRANSans, FontAwesome;
        font-size: 1.4rem;
        padding-left: 4px;
        padding-top: 2px;
        margin-right: 6px;
        margin-top: -2px;
        cursor: pointer;
    }

    .fa.fa-plus:hover:before {
        color: #504f4f;
    }

    .fa.fa-minus:before {
        content: '\f068';
        font-family: IRANSans, FontAwesome;
        font-size: 1rem;
        padding-left: 4px;
        padding-top: 2px;
        margin-right: 6px;
        margin-top: -2px;
        height: 40px;
        cursor: pointer;
        color: #000000;
    }

    .rest-cat-main-ul {
        list-style: none;
        padding: 0px;
        margin-bottom: 0px;
    }

    .cat-main-item {
        color: black;
        border-bottom: 1px solid #ccc;
        padding: 10px 3px;
    }

    .cat-main-item.active {
        color: #80b435;
    }

    .cat-main-item.active a {
        color: #80b435;
    }

    .cat-sub-menu-ul {
        height: 0px;
        list-style: none;
        adding: 0px 2rem;
    }

    li.cat-sub-menu-li {
        line-height: 4rem;
    }

    .cat-sub-menu-li:hover {
        background: #C8C4C4C4;
    }

    li.cat-sub-menu-li a {
        color: #797878 !important;
        font-size: 1rem;
    }

    .cat-sub-menu-ul.active {
        height: auto;
    }


    .d-flex {
        display: -ms-flexbox !important;
        display: flex !important;
    }
    .flex-row-reverse {
        -ms-flex-direction: row-reverse!important;
        flex-direction: row-reverse!important;
    }
    .flex-row {
        -ms-flex-direction: row!important;
        flex-direction: row!important;
    }

    .resturant-btn {
        padding: 20px 32px;
        border-radius: 129px;
        background: #80b435;
        color: white;
    }

    .resturant-grid-btn {
        padding: 20px 20px;
        border-radius: 100%;
        background: #80b435;
        color: white;

    }
    .modal-btn{
        padding: 16px 27px;
        border-radius: 42px;
        background: #ed6663;
        color: white;
    }
    .modal-btn:hover{
        background: #80b435;
    }
    .modal-header {
        border-bottom: none !important;
    }
    .col-md-12 .sub-border-narrow-gray {
        border: 1px solid #ccc;
    }

    .fa.fa-angle-up:before {
        content: '\f106';
        font-family: IRANSans, FontAwesome;
        font-size: 20px;
        padding-left: 4px;
        padding-top: 2px;
        margin-right: 6px;
        margin-top: -2px;
        height: 40px;
        cursor: pointer;

    }

    .fa.fa-angle-down:before {
        content: '\f107';
        font-family: IRANSans, FontAwesome;
        font-size: 20px;
        padding-left: 4px;
        padding-top: 2px;
        margin-right: 6px;
        margin-top: -2px;
        height: 40px;
        cursor: pointer;

    }

    .fa.fa-book:before {
        content: '\f02d';
        font-family: IRANSans, FontAwesome;
        font-size: 20px;
        padding-left: 4px;
        padding-top: 2px;
        margin-right: 6px;
        margin-top: -2px;
        height: 40px;
        cursor: pointer;
    }

    .orderbtn {
        padding: 0px 9px;
        height: 35px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background: white;
    }

    .lable {
        width: 100px;
        margin: 6px 0px;
    }

    select, option {
        font-family: numeral !important;
    }

    .show-in-grid-hover {
        display: none;
        position: absolute;
        bottom: 0px;
        left: 50%;
        transform: translatex(-50%);
    }

    .midle-on-grid-hover {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .col-md-12 .resturant-btn {
        display: none;
    }

    .col-xs-12 .liner-star{
        font-family: numeral !important;
        font-size: 0.8rem;
        color: #6daf23;
    }
    .col-xs-12 .grid-star{
        display: none;
    }
    .col-md-12 ..grid-star{
        display: block;
    }

    .col-md-12 .liner-star{
        display: none;
    }

    .col-md-12 .over-flow-hidden:hover .show-in-grid-hover {
        display: block;
    }

    .col-md-12 .over-flow-hidden:hover .midle-on-grid-hover {
        display: block;
    }

    .col-md-12 .grid-text-size {
        min-height: 141px;
    }

    .fa.fa-thumbs-up::before {
        content: '\f164';
        font-family: IRANSans, FontAwesome;
        font-size: 20px;
        padding-left: 4px;
        padding-top: 2px;
        margin-right: 6px;
        margin-top: -2px;
        height: 40px;
        cursor: pointer;
        color: #80b435;
    }

    .fa.fa-thumbs-down::before {
        content: '\f165';
        font-family: IRANSans, FontAwesome;
        font-size: 20px;
        padding-left: 4px;
        padding-top: 2px;
        margin-right: 6px;
        margin-top: -2px;
        height: 40px;
        cursor: pointer;
        color: #FF0000;
    }
    .fa.fa-signal::before{
        content: '\f012';
        font-family: IRANSans, FontAwesome;
        font-size: 20px;
        padding-left: 4px;
        padding-top: 2px;
        margin-right: 6px;
        margin-top: -2px;
        height: 40px;
        cursor: pointer;
        color: #80b435;
    }
    .resturant-btn .fa.fa-signal::before{
        color: white;
    }


    .circle {
        border-radius: 100%;
        padding: 13px 10px;
    }

    .bg-white {
        background: white;
    }

    .bg-light-gray{
        background: #00000082;
    }
    .position-fixed{
        position: fixed;
    }
    .bottom.left{
        bottom: 0px;
        left:0px
    }
    .compair-div{
        display: none;
    }
    .modal{
        top: 6rem;
    }
    .modal-title{
        color: black;
        margin-bottom: 24px;
    }
    .modal-header{
        position: relative;
    }
    .modal-close-btn{
        position: absolute;
        top: -22px;
        left: -23px;
        padding: 3px 8px !important;
        border-radius: 100%;
        background: black !important;
        color: white;
        opacity: 1;
        border: 10px solid white !important;
        box-shadow: 0px 1px 0 2px #0e0d0d26;
    }
    .modal-body {
        min-height: 10em;
        padding: 21px 19px;
        font-family: numeral !important;
    }
    #comment{
        font-family: numeral !important;
        font-size: 1rem;
    }
    .okmessage{
        color: white;
        text-align: center;
        background: #80b435;
        padding: 10px;
        font-family: numeral !important;
        font-size: 1rem;
    }
    .falsemessage , .errormessage{
        color: red;
        text-align: center;
        padding: 10px;
        font-family: numeral !important;
        font-size: 1.3rem;
        font-weight: bolder;
    }


    /*.justify-content-between {*/
    /*    -ms-flex-pack: justify!important;*/
    /*    justify-content: space-between!important;*/
    /*}*/
    @media (min-width: 540px) {
        .d-sm-block {
            display: block !important;
        }
        .compair-div{
            width: 200px;
            padding: 38px;
            text-align: center;
            color: #86ff00;
            display: block;
        }
    }

    @media (min-width: 1170px) {
        .d-lg-block {
            display: inline-block !important;
        }

        .d-lg-flex {
            display: flex !important;
        }

        .lg-text-left {
            text-align: left;
        }

        .lg-text-right {
            text-align: right;
        }

    }
</style>
<body>
<div id="page">
    <? // include 'header.php' ?>
    <? include('header.php'); ?>
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>رستـورانهای دیگچی</h2>
                    </div>
                </div>
                <!--col-xs-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <section class="mt-5">
        <div class="container p-0">
            <div class="row">
                <aside class="col-lg-3">
                    <div class="card mb-5">
                        <section class="category">
                            <div class="catrestdiv">
                                <p>
                                    دسته بندی ها
                                </p>
                            </div>
                            <div>
                                <ul id="maincatul" class="rest-cat-main-ul hidden-xs">
                                    <?php
                                    $MainCategories = json_decode(CallAPI('get', 'https://digchi.ir/new1/Administrator/controllers/BaseTables/MainCategories/MainCategories.php'));
                                    foreach ($MainCategories

                                             as $mainCategory) {
                                        ?>
                                        <li class="cat-main-item cursor">
                                           <span class="d-flex justify-content-between px-3">
                                                 <a class="level-top">
                                                     <?= $mainCategory->main_cat_name ?></a>
                                                  <i class="fa fa-plus" aria-hidden="true"></i>
                                           </span>

                                            <ul class="cat-sub-menu-ul">
                                                <?php
                                                $SubCategories = json_decode(CallAPI('get', 'https://digchi.ir/new1/Administrator/controllers/BaseTables/ContractorCategories/ContractorCategories.php', ['main_cat_id' => $mainCategory->main_cat_id, 'controller_type' => 'getByMainCat']));
                                                if (is_array($SubCategories) or is_object($SubCategories)) {
                                                    foreach ($SubCategories

                                                             as $subCat) {
                                                        ?>
                                                        <li class="cat-sub-menu-li d-none">
                                                            <a
                                                                    href="https://digchi.ir/new1/restaurant.php?page=1&t=<?= $subCat->cid ?>"><span><?= $subCat->title ?></span></a>
                                                        </li>


                                                    <? }
                                                }

                                                ?>
                                            </ul>
                                        </li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </section>
                    </div>
                    <div class="card mb-5">
                        <div class="custom-sliders">
                            <div>
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#carousel-example-generic"
                                            data-slide-to="0"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active"><img src="images/slide2.jpg" alt="slide3"
                                                                      class="img-slider">
                                            <div class="carousel-caption">
                                                <h4>تخفیف یک</h4>
                                                <h3><a title="Sample Product" href="product-detail.html"
                                                       class="product-sample">تا 70 درصد
                                                        تخفیف</a></h3>
                                                <p>متن تخفیف یک</p>
                                                <a class="link link-buy" href="#">همین حالا خرید کنید</a></div>
                                        </div>
                                        <div class="item"><img src="images/slide3.jpg" alt="slide1" class="img-slider">
                                            <div class="carousel-caption">
                                                <h4>تخفیف دو</h4>
                                                <h3><a title="Sample Product" href="product-detail.html"
                                                       class="product-sample">فروش بزرگ</a></h3>
                                                <p>متن ساخته شده برای تخفیف دو</p>
                                                <a class="link link-buy" href="#">همین حالا خرید کنید</a>
                                            </div>
                                        </div>
                                        <div class="item"><img src="images/slide1.jpg" alt="slide1" class="img-slider">
                                            <div class="carousel-caption">
                                                <h4>تخفیف سه</h4>
                                                <h3><a title="Sample Product" href="product-detail.html"
                                                       class="product-sample">غذا های خوشمزه</a>
                                                </h3>
                                                <p>متن ساخته شده برای تخفیف سه</p>
                                                <a class="link link-buy" href="#">همین حالا خرید کنید</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="sr-only">قبلی</span> </a> <a class="right carousel-control"
                                                                                  href="#carousel-example-generic"
                                                                                  data-slide="next"> <span
                                                class="sr-only">بعدی</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="cart" class="block block-list block-cart">
                        <div class="block-title"> سبد خرید</div>
                        <div class="block-content">
                            <div id="loader" style="display: none" class="loader_ajax_small"></div>

                        </div>
                    </div>
                </aside>
                <div class="col-lg-9">
                    <div class="restuarant position-relative">
                        <div class="slideshow-container">
                            <?php
                            $contractors1 = json_decode(CallAPI('get', 'https://digchi.ir/new/Administrator/controllers/Contractors/Contractors.php'));
                            $i = 0;
                                              
                            foreach ($contractors1 as $cont) {
                                $i++;
                                if ($i < 4) {

                                    ?>
                                    <div class="mySlides fade">
                                        <div class="numbertext"><?= $i ?> / 3</div>
                                        <a class="sliderlink" href="menu.php?restaurant_id=<?= $cont->id; ?>">
                                            <img src="images/<?= $cont->contarctorsslide_img; ?> " style="width:100%">
                                        </a>
                                        <div class="text numeral-fa">
                                            <a class="sliderlink" href="menu.php?restaurant_id=<?= $cont->id; ?>">
                                                رستوران
                                                <?= $cont->brandName; ?>
                                            </a>
                                            <br>
                                            <span class="inslider">
                                                 <a class="sliderlink" href="menu.php?restaurant_id=<?= $cont->id; ?>">
                                                رستوران با کیفیت غذای برتر
                                                 </a>
                                            </span>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>


                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        </div>
                        <!--                        <br>-->
                        <!---->
                        <!--                        <div style="text-align:center">-->
                        <!--                            <span class="dot" onclick="currentSlide(1)"></span>-->
                        <!--                            <span class="dot" onclick="currentSlide(2)"></span>-->
                        <!--                            <span class="dot" onclick="currentSlide(3)"></span>-->
                        <!--                        </div>-->
                    </div>

                    <div class="col-12 img-slider">
                        <div class="mb-3 mt-4">
                            <div class="row no-gutters">
                                <div class="restaurant-slide">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="card tocardfilter w-100">
                                                <div class="flex justify-content-between">
                                                    <div class=" view-mode">
                                                        <a title="Grid"
                                                           class="linrview button button-grid cursor d-none d-lg-block<?php if (isset($_COOKIE[view])) {
                                                               if (strval($_COOKIE[view]) == "linrview") {
                                                                   echo " active";
                                                               }
                                                           } else {
                                                               echo " active";
                                                           } ?>"
                                                           id="linrview">&nbsp;</a>
                                                        &nbsp; <span title="List"
                                                                     class="gridview button button-active button-list cursor d-none d-lg-block<?php if (strval($_COOKIE[view]) == "gridview") {
                                                                         echo " active";
                                                                     } ?>"
                                                                     id="gridview">
                                 &nbsp;
                                                             </span>
                                                    </div>
                                                    <div class="pages">
                                                        <!--                            <label>صفحات</label>-->
                                                        <ul class="pagination">
                                                            <li><a href="#">«</a></li>
                                                            <?php
                                                            if (isset($_GET['limit'])) {
                                                                $number = intval($_GET['limit']);
                                                            } else {

                                                                $number = 9;

                                                            }
                                                            if (!isset($_GET['t'])) {
                                                                $query = "SELECT COUNT(`contractor_id`) as thrcount FROM `tblContractors`";
                                                                $numrow = $pdo->query($query);
                                                                $execute = $numrow->fetchObject();
                                                                $number0frow = intval($execute->thrcount);
                                                            } else {
                                                                $mcid = $_GET['t'];
                                                                $query = "SELECT COUNT(`tblContractors`.`contractor_id`)as th FROM `tblContractors` left join `tblInnerCategories` on `tblContractors`.`contractor_id`= `tblInnerCategories`.`contractor_id` WHERE `tblInnerCategories`.`mcid` = '$mcid' GROUP BY `tblContractors`.`contractor_id`";
                                                                #$query="SELECT COUNT(`tblContractors`.`contractor_id`) as thrcount FROM `tblContractors` left join `tblInnerCategories` on `tblContractors`.`contractor_id`= `tblInnerCategories`.`contractor_id` WHERE `tblInnerCategories`.`mcid` ='$mcid'";
                                                                $array_num = [];
                                                                $numrow = $pdo->query($query);
                                                                while ($numrows = $numrow->fetchObject()) {
                                                                    $array_num[] = $numrows->th;
                                                                }
                                                                $number0frow = count($array_num);
                                                            }
                                                            #echo $query;
                                                            #echo $number0frow;

                                                            $page = intval($number0frow / $number);
                                                            if (fmod($number0frow, $number) != 0) {
                                                                $page++;
                                                            }
                                                            for ($x = 1; $x <= $page; $x++) {


                                                                ?>

                                                                <li class="<?
                                                                if ($x == 1) {
                                                                    if (!isset($_GET['page'])) {
                                                                        echo 'active';
                                                                    }
                                                                }
                                                                if ($_GET['page'] == $x) {
                                                                    echo 'active';
                                                                } ?>">
                                                                    <a href="
                                                <?= "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
                                                                    if (isset($_GET['t'])) {
                                                                        echo '?t=' . $_GET['t'];
                                                                        echo '&page=' . $x;
                                                                    } else {
                                                                        echo '?page=' . $x;
                                                                    }
                                                                    if (isset($_GET['limit'])) {
                                                                        echo '&limit=' . $_GET['limit'];
                                                                    } else {
                                                                        echo '&limit=9';
                                                                    }
                                                                    ?>">
                                                                        <?= $x ?>
                                                                    </a>

                                                                </li>
                                                                <?php
                                                            }
                                                            ?>
                                                            <li><a href="#">»</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-group flex d-none d-lg-flex">
                                                        <label>تعداد نمایش در هر صفحه: </label>
                                                        <select class="form-control inline-block limit"
                                                                name="limit">
                                                            <option value="9" <?php if (!isset($_GET['limit'])) {
                                                                echo 'SELECTED';
                                                            } ?> >9
                                                            </option>
                                                            <option value="12" <?php if ($_GET['limit'] == 12) {
                                                                echo 'SELECTED';
                                                            } ?> >12
                                                            </option>
                                                            <option value="15" <?php if ($_GET['limit'] == 15) {
                                                                echo 'SELECTED';
                                                            } ?> >15
                                                            </option>
                                                            <option value="18" <?php if ($_GET['limit'] == 18) {
                                                                echo 'SELECTED';
                                                            } ?> >18
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group flex d-none d-lg-flex" id="order-by">
                                                        <p class="lable">مرتب سازی:</p>
                                                        <select class="form-control inline-block order"
                                                                name="order">
                                                            <option value="brandName" <?php if ($_COOKIE[order] == "brandName") {
                                                                echo " SELECTED=SELECTED";
                                                            } ?>>
                                                                نام رستوران
                                                            </option>
                                                            <option value="deliveryPrice" <?php if ($_COOKIE[order] == "deliveryPrice") {
                                                                echo " SELECTED=SELECTED";
                                                            } ?>>
                                                                هزینه ارسال
                                                            </option>
                                                            <option value="deliveryArrival" <?php if ($_COOKIE[order] == "deliveryArrival") {
                                                                echo " SELECTED=SELECTED";
                                                            } ?>>
                                                                زمان ارسال
                                                            </option>
                                                        </select>
                                                        <button class="orderbtn"><i
                                                                    class="sortangle <?php if (isset($_COOKIE[asc])) {
                                                                        if (strval($_COOKIE[asc]) == "asc") {
                                                                            echo " fa fa-angle-up";
                                                                        } else {
                                                                            echo " fa fa-angle-down";
                                                                        }
                                                                    } else {
                                                                        echo " fa fa-angle-up";
                                                                    } ?>"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            if (isset($_SESSION['auth']['sUserId']) and $_SESSION['auth']['logged_in'] == true) {

                                                $user_id = $_SESSION['auth']['sUserId'];
                                                $likequery = "select * from `tblFavouriteRestaurant` where uid = '$user_id'";

                                                $likequery = strval($likequery);
                                                $restlike = $pdo->query($likequery);
                                                if($restlike->rowCount()>0) {

                                                    $likers = array();

                                                    $i=0;
                                                    while ($restlikes = $restlike->fetchObject()) {
                                                        array_push($likers,$restlikes->restourant_id);
                                                        array_push($likers,$restlikes->flag);
                                                    }

                                                   }







                                                #$liks = json_decode(CallAPI('post', 'https://digchi.ir/new1/Administrator/controllers/Favorites/Favoriteresturant.php', array("controller_type" => "bestSeller")));

                                                //end call liks
                                            }
                                            ?>
                                            <?php
                                            if (isset($_GET['limit'])) {
                                                $limit = $_GET['limit'];

                                                if (isset($_GET['page'])) {
                                                    $multy = intval($_GET['page']) - 1;
                                                    $offset = $limit * $multy;
                                                }
                                            } else {
                                                if (isset($_GET['page'])) {
                                                    $multy = intval($_GET['page']) - 1;
                                                } else {
                                                    $multy = 0;
                                                }
                                                $limit = 9;
                                                $offset = $limit * $multy;
                                            }
                                            if (isset($_GET['t'])) {

                                                $add = isset($_GET['t']) ? " where category_id = " . $_GET['t'] : "";
                                                $mcid = intval($_GET['t']);
                                                if (isset($_COOKIE[asc])) {

                                                    $asc = $_COOKIE[asc];
                                                    if (!isset($_COOKIE[order])) {
                                                        echo "c <br>";

                                                        $strquery = "SELECT DISTINCT `tblContractors`.`contractor_id`,`tblContractors`.`pic`,`tblContractors`.`address`, `tblContractors`.`tel` , `tblInnerCategories`.`mcid` , `tblContractors`.`contractor_id`  FROM `tblContractors` left join `tblInnerCategories` on `tblContractors`.`contractor_id`= `tblInnerCategories`.`contractor_id` WHERE `tblInnerCategories`.`mcid` = '$mcid' ORDER BY brandName " . $asc . " LIMIT " . $limit . " OFFSET " . $offset;

                                                    } else {

                                                        $order = $_COOKIE[order];
                                                        $strquery = "SELECT DISTINCT `tblContractors`.`contractor_id`,`tblContractors`.`pic`,`tblContractors`.`address`, `tblContractors`.`tel` , `tblInnerCategories`.`mcid` , `tblContractors`.`contractor_id`  FROM `tblContractors` left join `tblInnerCategories` on `tblContractors`.`contractor_id`= `tblInnerCategories`.`contractor_id` WHERE `tblInnerCategories`.`mcid` = '$mcid'  ORDER BY " . $order . " " . $asc . " LIMIT " . $limit . " OFFSET " . $offset;
                                                    }
                                                } else {
                                                    if (!isset($_COOKIE[order])) {

                                                        $strquery = "SELECT DISTINCT `tblContractors`.`contractor_id`,`tblContractors`.`pic`,`tblContractors`.`address`, `tblContractors`.`tel` , `tblInnerCategories`.`mcid` , `tblContractors`.`contractor_id`  FROM `tblContractors` left join `tblInnerCategories` on `tblContractors`.`contractor_id`= `tblInnerCategories`.`contractor_id` WHERE `tblInnerCategories`.`mcid` = '$mcid'  LIMIT " . $limit . " OFFSET " . $offset;

                                                    } else {

                                                        $order = $_COOKIE[order];
                                                        $strquery = "SELECT DISTINCT `tblContractors`.`contractor_id`,`tblContractors`.`pic`,`tblContractors`.`address`, `tblContractors`.`tel` , `tblInnerCategories`.`mcid` , `tblContractors`.`contractor_id`  FROM `tblContractors` left join `tblInnerCategories` on `tblContractors`.`contractor_id`= `tblInnerCategories`.`contractor_id` WHERE `tblInnerCategories`.`mcid` = '$mcid'  ORDER BY " . $order . " LIMIT " . $limit . " OFFSET " . $offset;

                                                    }
                                                }
                                            } else {
                                                if (isset($_COOKIE[asc])) {

                                                    $asc = $_COOKIE[asc];
                                                    if (!isset($_COOKIE[order])) {
                                                        echo "h <br>";
                                                        $strquery = "select * from tblContractors as restaurant " . "ORDER BY brandName" . $asc . " LIMIT " . $limit . " OFFSET " . $offset;

                                                    } else {

                                                        $order = $_COOKIE[order];
                                                        $strquery = "select * from tblContractors as restaurant " . "ORDER BY " . $order . " " . $asc . " LIMIT " . $limit . " OFFSET " . $offset;
                                                    }
                                                } else {
                                                    if (!isset($_COOKIE[order])) {

                                                        $strquery = "select * from tblContractors as restaurant " . "ORDER BY brandName" . $asc . " LIMIT " . $limit . " OFFSET " . $offset;

                                                    } else {

                                                        $order = $_COOKIE[order];
                                                        $strquery = "select * from tblContractors as restaurant " . " LIMIT " . $limit . " OFFSET " . $offset;

                                                    }
                                                }
                                            }

                                            #echo $strquery;
                                            //call likes

                                            $strquery = strval($strquery);
                                            $contractors = $pdo->query($strquery);
                                            while ($contractor = $contractors->fetchObject()) {
                                                #end
                                                #foreach ($blogs as $blog) {
                                                ?>
                                                <div class="card restrows<?php if (isset($_COOKIE[view])) {
                                                    if (strval($_COOKIE[view]) == "linrview") {
                                                        echo " col-xs-12";
                                                    } elseif (strval($_COOKIE[view]) == "gridview") {
                                                        echo " col-xs-4 border-left";
                                                    }
                                                } else {
                                                    echo " col-xs-12";
                                                } ?> ">
                                                    <div class="mb-3">
                                                        <div class="row no-gutters">
                                                            <div class="menu-2-col-img<?php if (isset($_COOKIE[view])) {
                                                                if (strval($_COOKIE[view]) == "linrview") {
                                                                    echo " col-md-4";
                                                                } elseif (strval($_COOKIE[view]) == "gridview") {
                                                                    echo " col-md-12";
                                                                }
                                                            } else {
                                                                echo " col-md-4";
                                                            } ?> ">
                                                                <div class="w-75 over-flow-hidden m-auto<?php if (isset($_COOKIE[view])) {
                                                                    if (strval($_COOKIE[view]) == "gridview") {
                                                                        echo " cursor";
                                                                    }
                                                                } ?>">
                                                                    <img class="img-fluid img-ras img-menu2 w-100<?php if (isset($_COOKIE[view])) {
                                                                        if (strval($_COOKIE[view]) == "gridview") {
                                                                            echo " border-r-l-b-blue border-blue img-card-grid";
                                                                        }
                                                                    } ?>"
                                                                         src="Administrator/images/restaurants/<?= $contractor->pic; ?>"
                                                                         alt="">
                                                                    <?php
                                                                    if (isset($_SESSION['auth']['sUserId']) and $_SESSION['auth']['logged_in'] == true) {
                                                                        $user_id = $_SESSION['auth']['sUserId'];

                                                                        if ($_COOKIE[restoursntid] ==$contractor->contractor_id ){
                                                                            $thisresturant = 1;
                                                                            if(isset($_COOKIE['thumb'])) {
                                                                                $link = $_COOKIE['thumb'];
                                                                            }else{
                                                                                $link = "1";
                                                                            }
                                                                        }else{
                                                                            $link = "1";
                                                                        }
                                                                        ?>
                                                                        <div class="midle-on-grid-hover">
                                                                            <div class="d-flex justify-content-between">
                                                                                <p class="bg-white circle">
                                                                                    <i onclick="compair(<?=$contractor->contractor_id?>)" class="fa fa-signal" name="مقایسه" alt="مقایسه" data-toggle="tooltip" data-placement="bottom" title="مقایسه"></i>
                                                                                </p>
                                                                                <p class="bg-white circle">
                                                                                    <?if (in_array("$contractor->contractor_id", $likers)){
                                                                                        $indexes = array_search("$contractor->contractor_id", $likers );
                                                                                        $flag = intval($indexes + 1);
                                                                                        $like = intval($likers[$flag]);
                                                                                        switch ($flag){
                                                                                            case 1:
                                                                                                $like = 0;
                                                                                                break;
                                                                                            case 0:
                                                                                                $like = 1;
                                                                                            break;
                                                                                        }

                                                                                    }else{

                                                                                        $like= 1;

                                                                                    }
                                                                                    ?>


                                                                                    <i class="thumbs<?php if($like == 1){echo " fa fa-thumbs-up";}else{echo " fa fa-thumbs-down";}?>" onclick="whishlist(<?=$contractor->contractor_id?>,<?=$user_id?>,<?if($like==1){echo 0;}else{echo 1;}?>)"></i>


                                                                                </p>

                                                                            </div>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    <div class="show-in-grid-hover">
                                                                        <a href="https://digchi.ir/new1/menu.php?restaurant_id=<?= $contractor->contractor_id; ?>"
                                                                           class="btn mt-5 resturant-grid-btn">
                                                                            <i class="fa fa-book"
                                                                               aria-hidden="true"></i>
                                                                        </a>
                                                                    </div>
                                                                    <form id="user-resturant" class="d-none">
                                                                        <input type="hidden"
                                                                               value="<?= $contractor->contractor_id; ?>"
                                                                               name="restourant-id" id="restourant-id<?=$contractor->contractor_id;?>">
                                                                        <?php
                                                                        $user_id = $_SESSION['auth']['sUserId'];
                                                                        ?>
                                                                        <input type="hidden" value="<?= $user_id; ?>"
                                                                               name="uid" class="uid<?=$user_id;?>">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="menu-2-col-text<?php if (isset($_COOKIE[view])) {
                                                                if (strval($_COOKIE[view]) == "linrview") {
                                                                    echo " col-md-8";
                                                                } elseif (strval($_COOKIE[view]) == "gridview") {
                                                                    echo " col-md-12";
                                                                }
                                                            } else {
                                                                echo " col-md-8";
                                                            } ?> ">
                                                                <div class="card-body menu2-card m-text-center grid-text-size lg-text-right sub-border-narrow-gray<?php if (isset($_COOKIE[view])) {
                                                                    if (strval($_COOKIE[view]) == "gridview") {
                                                                        echo " w-75 mx-auto mt-5 ";
                                                                    }
                                                                } ?>">
                                                                    <h5 class="card-title">
                                                                        <h5 class="card-title">
                                                                            <?
                                                                            echo $contractor->brandName;
                                                                            ?>
                                                                        </h5>
                                                                        <div class="liner-star ">
                                                                            <div class="d-flex flex-row">


                                                                            <div class="rating-box mt-1">
                                                                                <?php
                                                                                $query = "SELECT  COUNT(flag) FROM tblFavouriteRestaurant as liksme where flag=1 && restourant_id='$contractor->contractor_id'";
                                                                                $restlike = $pdo->query($query);
                                                                                $queryall ="SELECT  COUNT(flag) FROM tblFavouriteRestaurant as likeall where flag=1";
                                                                                $percentage = intval(($restlike->liksme)/($restlike->likeall) *100 );
                                                                                ?>
                                                                                <div class="rating" style="width:<?=$percentage?>%">
                                                                                </div>
                                                                            </div>
                                                                            <div>
                                                                                &nbsp;
                                                                                |
                                                                                &nbsp;
                                                                            </div>
                                                                            <p>
                                                                                تعداد نظرات
                                                                            </p>
                                                                            <div>
                                                                                &nbsp;
                                                                                |
                                                                                &nbsp;
                                                                            </div>
                                                                            <p data-toggle="modal" data-target="#commentModal" class="cursor">
                                                                                نظر خود را ثبت کنید
                                                                            </p>
                                                                                <?php
                                                                                    include "layers/resturantcomment.php";
                                                                                ?>
                                                                            </div>
                                                                        </div>

                                                                        <span class="card-text numeral-fa narrow-text">
                                        <?
                                        echo $contractor->address;
                                        ?>
                                                                                </span>

                                                                        <br/>
                                                                        <a href="https://digchi.ir/new1/menu.php?restaurant_id=<?= $contractor->contractor_id; ?>"
                                                                           class="btn mt-5 resturant-btn">مشاهده
                                                                            منو</a>
                                                                        <? if(isset($user_id)){?>
                                                                        <a onclick="whishlist(<?=$contractor->contractor_id?>,<?=$user_id?>,<?if($like==1){echo 0;}else{echo 1;}?>)"  class="btn mt-5 resturant-btn"><i class="fa fa-heart"></i>افزودن به علاقمندی</a>
                                                                        <a onclick="compair(<?=$contractor->contractor_id?>)"  class="btn mt-5 resturant-btn"><i class="fa fa-signal"></i>مقایسه کنید</a>
<?php } ?>

                                                                        <!--                                                                        <span class="mr-3">-->
                                                                        <!--                                                                                        تلفن:-->
                                                                        <!--                                                                                        <span>-->
                                                                        <!--                                                                                            --><?// echo $contractor->tel; ?>
                                                                        <!--                                                                                        </span>-->
                                                                        <!--                                                                                    </span>-->
                                                                        <div class="grid-star rating-box mt-5">
                                                                            <?php
                                                                            $query = "SELECT  COUNT(flag) FROM tblFavouriteRestaurant as liksme where flag=1 && restourant_id='$contractor->contractor_id'";
                                                                            $restlike = $pdo->query($query);
                                                                            $queryall ="SELECT  COUNT(flag) FROM tblFavouriteRestaurant as likeall where flag=1";
                                                                            $percentage = intval(($restlike->liksme)/($restlike->likeall) *100 );
                                                                            ?>
                                                                            <div class="rating" style="width:<?=$percentage?>%">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <?php
                                            }

                                            ?>
                                            <div class="card tocardfilter w-100">
                                                <div class="flex justify-content-between">

                                                    <div class="pages">
                                                        <!--                            <label>صفحات</label>-->
                                                        <ul class="pagination">
                                                            <li><a href="#">«</a></li>
                                                            <?php
                                                            if (isset($_GET['limit'])) {
                                                                $number = intval($_GET['limit']);
                                                            } else {

                                                                $number = 9;

                                                            }
                                                            if (!isset($_GET['t'])) {
                                                                $query = "SELECT COUNT(`contractor_id`) as thrcount FROM `tblContractors`";
                                                                $numrow = $pdo->query($query);
                                                                $execute = $numrow->fetchObject();
                                                                $number0frow = intval($execute->thrcount);
                                                            } else {
                                                                $mcid = $_GET['t'];
                                                                $query = "SELECT COUNT(`tblContractors`.`contractor_id`)as th FROM `tblContractors` left join `tblInnerCategories` on `tblContractors`.`contractor_id`= `tblInnerCategories`.`contractor_id` WHERE `tblInnerCategories`.`mcid` = '$mcid' GROUP BY `tblContractors`.`contractor_id`";
                                                                #$query="SELECT COUNT(`tblContractors`.`contractor_id`) as thrcount FROM `tblContractors` left join `tblInnerCategories` on `tblContractors`.`contractor_id`= `tblInnerCategories`.`contractor_id` WHERE `tblInnerCategories`.`mcid` ='$mcid'";
                                                                $array_num = [];
                                                                $numrow = $pdo->query($query);
                                                                while ($numrows = $numrow->fetchObject()) {
                                                                    $array_num[] = $numrows->th;
                                                                }
                                                                $number0frow = count($array_num);
                                                            }
                                                            #echo $query;
                                                            #echo $number0frow;

                                                            $page = intval($number0frow / $number);
                                                            if (fmod($number0frow, $number) != 0) {
                                                                $page++;
                                                            }
                                                            for ($x = 1; $x <= $page; $x++) {


                                                                ?>

                                                                <li class="<?
                                                                if ($x == 1) {
                                                                    if (!isset($_GET['page'])) {
                                                                        echo 'active';
                                                                    }
                                                                }
                                                                if ($_GET['page'] == $x) {
                                                                    echo 'active';
                                                                } ?>">
                                                                    <a href="
                                                <?= "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
                                                                    if (isset($_GET['t'])) {
                                                                        echo '?t=' . $_GET['t'];
                                                                        echo '&page=' . $x;
                                                                    } else {
                                                                        echo '?page=' . $x;
                                                                    }
                                                                    if (isset($_GET['limit'])) {
                                                                        echo '&limit=' . $_GET['limit'];
                                                                    } else {
                                                                        echo '&limit=9';
                                                                    }
                                                                    ?>">
                                                                        <?= $x ?>
                                                                    </a>

                                                                </li>
                                                                <?php
                                                            }
                                                            ?>
                                                            <li><a href="#">»</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-group flex d-none d-lg-flex">
                                                        <label>تعداد نمایش در هر صفحه: </label>
                                                        <select class="form-control inline-block limit"
                                                                name="limit">
                                                            <option value="9" <?php if (!isset($_GET['limit'])) {
                                                                echo 'SELECTED';
                                                            } ?> >9
                                                            </option>
                                                            <option value="12" <?php if ($_GET['limit'] == 12) {
                                                                echo 'SELECTED';
                                                            } ?> >12
                                                            </option>
                                                            <option value="15" <?php if ($_GET['limit'] == 15) {
                                                                echo 'SELECTED';
                                                            } ?> >15
                                                            </option>
                                                            <option value="18" <?php if ($_GET['limit'] == 18) {
                                                                echo 'SELECTED';
                                                            } ?> >18
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group flex d-none d-lg-flex" id="order-by">
                                                        <p class="lable">مرتب سازی:</p>
                                                        <select class="form-control inline-block order"
                                                                name="order">
                                                            <option value="brandName" <?php if ($_COOKIE[order] == "brandName") {
                                                                echo " SELECTED=SELECTED";
                                                            } ?>>
                                                                نام رستوران
                                                            </option>
                                                            <option value="deliveryPrice" <?php if ($_COOKIE[order] == "deliveryPrice") {
                                                                echo " SELECTED=SELECTED";
                                                            } ?>>
                                                                هزینه ارسال
                                                            </option>
                                                            <option value="deliveryArrival" <?php if ($_COOKIE[order] == "deliveryArrival") {
                                                                echo " SELECTED=SELECTED";
                                                            } ?>>
                                                                زمان ارسال
                                                            </option>
                                                        </select>
                                                        <button class="orderbtn"><i
                                                                    class="sortangle <?php if (isset($_COOKIE[asc])) {
                                                                        if (strval($_COOKIE[asc]) == "asc") {
                                                                            echo " fa fa-angle-up";
                                                                        } else {
                                                                            echo " fa fa-angle-down";
                                                                        }
                                                                    } else {
                                                                        echo " fa fa-angle-up";
                                                                    } ?>"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(isset($_COOKIE[compair])){ ?>
                <div class="position-fixed bottom left bg-light-gray compair-div numeral-fa">
                    <?php
                    $comp =strval($_COOKIE[compair]);

                    $comps = explode('-',$comp);

                    $count_rest = count($comps);

                    $message = "تعداد ";
                    $message .= $count_rest ;
                    $message .= " رستوران برای مقایسه وارد شده است.";
                    echo  $message ."<br>";
                    ?>
                    <a class="rest-link numeral-fa" href="compare.php?restourantid=<?=$comp?>">مقایسه کنید.</a>
                    <?php
                    if(isset($_COOKIE[numcompair]) && $_COOKIE[numcompair]>=2){
                        echo "<br>";
                        echo "حداکثر تعداد رستوران برای مقایسه سه عدد";
                    }
                    ?>
                </div>
                <?php
            }
            ?>
        </div>
    </section>
    <div class=" bg-black" id="bg-black">

    </div>
    <?php
    require_once 'manumobile.php';
    ?>


</div>
<div class="container">
    <div class="row">
    </div>
</div>
<?php
require_once 'feature-box.php';
require_once('footer.php');
?>
<script>
    // comment
    $(document).ready(function() {
        // process the form
        $('.restourantCommentForm').submit(function(event) {
            var restoursnt_id = $("#restaurantid",this).val();
            var uid = $("#userid",this).val();
            var comment = $("#comment",this).val();
            console.log(restoursnt_id);
            console.log(uid);
            console.log(comment);
            $.ajax({
                url: 'Administrator/controllers/Comment/restuarantcomment.php',
                data: {
                    controller_type: 'add',
                    restoursnt_id: restoursnt_id,
                    uid: uid,
                    comment: comment,
                    sort:0,
                    active:0
                },
                type: "POST",
                success: newRes => {
                    console.log(newRes);
                    if(newRes == "true"){
                        $(".okmessage").toggleClass("d-none");
                    }else if(newRes == 'false'){
                        $(".falsemessage").toggleClass("d-none");
                    }else if(newRes == 'falseer') {
                        $(".errormessage").toggleClass("d-none");
                    }
                }
            });
            event.preventDefault();
        });
       $(".modal-close-btn").on('click',()=>{
           location.reload();
           return true;
        });
    });
</script>
<script>
    function compair(restid){
        var restourant_id = restid;
        var compair = getCookie("compair");
        var numcompair = ((compair.match(/-/g) || []).length);
        console.log(compair);
        console.log(numcompair);
        console.log(compair == '');
        if(compair == ''){
            if(numcompair <=2){
                document.cookie = "compair="+restourant_id;
                document.cookie = "numcompair="+numcompair + 1;
                location.reload();
                return true;
            }
            location.reload();
            return true;
        }else{
            var compairs = compair;
            if(!compairs.includes(restourant_id)){
                var numcompair = ((compair.match(/-/g) || []).length);
                console.log(numcompair);
                if(numcompair <=2){
                    document.cookie = "compair="+compairs+"-"+restourant_id;
                    document.cookie = "numcompair="+numcompair +1;
                }

                location.reload();
                return true;
            }
            location.reload();
            return true;

        }
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>
<script>
    function whishlist(contractorid,userid,flaged){
        console.log(contractorid);
        console.log(userid);
        console.log(flaged);
        var restoursnt_id = contractorid;
        var uid = userid;
        var flaged = flaged;
        var flagcookee = "thumb=" + flaged;
        var rest = "restoursntid=" + restoursnt_id;
        // $(this).toggleClass("fa-thumbs-up");
        // $(this).toggleClass("fa-thumbs-down");
        $.ajax({
            url: 'Administrator/controllers/Favorites/Favoriteresturant.php',
            data: {
                type: 'add',
                restoursnt_id: restoursnt_id,
                uid: uid,
                flaged: flaged
            },
            type: "POST",
            success: newRes => {
                console.log(newRes);
                if (newRes == "update" || newRes == "true") {
                    console.log("if worked");
                    if (flaged == 1 || flaged == '1') {
                        console.log("flaged = 1");
                        flaged = 0
                    } else {
                        console.log("flaged = 0");
                        flaged = 0;
                    }

                    // if(restoursnt_id == ''){
                    //     var rest = "restoursntid=" + restoursnt_id;
                    //     document.cookie = rest;
                    //      if(thumb == ''){
                    //          var flagcookee = "thumb=" + flaged;
                    //          document.cookie = flagcookee;
                    //      }else{
                    //          var flags = thumb;
                    //          document.cookie = "thumb="+flags+ "-"+flaged;
                    //      }
                    // }else{
                    //     var resturant  = restoursnt_id;
                    //     document.cookie = "restoursntid="+resturant+ "-"+restoursnt_id;
                    //     if(thumb == ''){
                    //         var flagcookee = "thumb=" + flaged;
                    //         document.cookie = flagcookee;
                    //     }else{
                    //         var flags = thumb;
                    //         document.cookie = "thumb="+flags+ "-"+flaged;
                    //     }
                    // }

                    console.log(rest);
                    document.cookie = flagcookee;
                    document.cookie = rest;
                    // var restoursnt_id = getCookie("restoursnt_id");
                    // var thumb = getCookie("thumb");
                    location.reload();
                    return true;
                }
            }
        });
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
          for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
</script>
<script>
    // $(".thumbs").on("click", () => {
    //     var restoursnt_id = $("#restourant-id").val();
    //     var uid = $("#uid").val();
    //
    //     if ($(".thumbs").hasClass("fa-thumbs-up")) {
    //         var flag = 1;
    //         $.ajax({
    //             url: 'Favorites/Favoriteresturant.php',
    //             data: {
    //                 type: 'add',
    //                 restoursnt_id: restoursnt_id,
    //                 uid: uid,
    //                 flag: flag
    //             },
    //             type: "POST",
    //             success: newRes => {
    //                 console.log(newRes);
    //                 $(".thumbs").toggleClass("fa-thumbs-up");
    //                 $(".thumbs").toggleClass("fa-thumbs-down");
    //             }
    //         });
    //     } else if ($(".thumbs").hasClass("fa-thumbs-down")) {
    //         var flag = 0;
    //         $.ajax({
    //             url: 'Favorites/Favoriteresturant.php',
    //             data: {
    //                 type: 'add',
    //                 restoursnt_id: restoursnt_id,
    //                 uid: uid,
    //                 flag: flag
    //             },
    //             type: "POST",
    //             success: newRes => {
    //                 console.log(newRes);
    //                 $(".thumbs").toggleClass("fa-thumbs-up");
    //                 $(".thumbs").toggleClass("fa-thumbs-down");
    //             }
    //         });
    //     }
    // });
</script>
<script>
    $(document).ready(function () {
        $(".order").on("change", () => {
            var order = $(".order").val();
            var cook = "order=" + order;
            console.log(cook);
            document.cookie = cook;
            location.reload();
            return true;
        });
    });
</script>
<script>
    $(document).ready(function () {
        $(".sortangle").on("click", () => {
            $(".sortangle").toggleClass("fa fa-angle-up");
            $(".sortangle").toggleClass("fa fa-angle-down");
            var courentasc = checkCookie('asc');

        });


        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function checkCookie(asc) {
            var username = getCookie(asc);
            if (username != "") {
                if (username != "asc") {
                    var asc = "asc= asc";
                    document.cookie = asc;
                    location.reload();
                    return true;
                } else {
                    var asc = "asc= DESC";
                    document.cookie = asc;
                    location.reload();
                    return true;
                }
            } else {
                var asc = "asc= asc";
                document.cookie = asc;
                location.reload();
                return true;
            }
        }

    });

</script>
<script>
    //category click each item;
    $(function () {
        $(".cat-main-item").on('click', function () {
            console.log("cat-main-item");
            $(this).toggleClass("active");
            $(".cat-sub-menu-ul", this).toggleClass("active");
            $(".cat-sub-menu-li", this).toggleClass("d-none");
            $(".fa", this).toggleClass("fa-plus");
            $(".fa", this).toggleClass("fa-minus");
        });
    });
</script>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        // dots[slideIndex - 1].className += " active";
        // console.log(n);
    }
</script>
<script>
    $(document).ready(function () {
        $(".linrview").on('click', () => {
            console.log("line trigger");
            document.cookie = "view=linrview";
            if ($(".restrows").hasClass("col-xs-12")) {
                console.log("has col-12");
            } else {
                console.log("dosent has col-12");
                if ($(".linrview").hasClass('active')) {
                    console.log('active');
                } else {
                    console.log('else active');
                    $(".linrview").addClass('active');
                }
                $(".gridview").removeClass('active');
                $(".resrtcardimg").addClass('col-xs-4');
                $(".resrtcardimg").removeClass('col-xs-12');
                $(".img-restaurant").removeClass('grid');
                $(".restrows").addClass("col-xs-12");
                $(".restrows").removeClass("col-xs-4");
                $(".restcardpad").removeClass("resgridheigh");
                $(".restrows").removeClass("border-left");
                $(".menu-2-col-img").addClass('col-md-2');
                $(".menu-2-col-img").removeClass('col-md-12');
                $(".over-flow-hidden").removeClass("cursor");
                $(".menu-2-col-text").addClass("col-md-8");
                $(".menu-2-col-text").removeClass("col-md-12");
                $(".menu-2-col-text").removeClass("text-center");
                $(".img-ras").removeClass("border-r-l-b-blue");
                $(".img-ras").removeClass("img-card-grid");
            }
            location.reload();
            return true;
        });
    });
</script>
<script>
    $(".gridview").on('click', () => {
        console.log("grid trigger");
        if ($(".restrows").hasClass("col-xs-12")) {
            console.log("has col-12");
            $(".linrview").removeClass('active');
            $(".gridview").addClass('active');
            $(".restrows").removeClass("col-xs-12");
            $(".restrows").addClass("col-xs-4");
            $(".menu-2-col-img").removeClass('col-md-2');
            $(".menu-2-col-img").addClass('col-md-12');
            $(".restrows").addClass("border-left");
            $(".over-flow-hidden").addClass("cursor");
            $(".menu-2-col-text").removeClass("col-md-8");
            $(".menu-2-col-text").addClass("col-md-12");
            $(".menu-2-col-text").addClass("text-center");
            $(".img-ras").addClass("border-r-l-b-blue border-blue img-card-grid");
            $(".img-ras").addClass("border-blue");
            $(".img-ras").addClass("img-card-grid");
            document.cookie = "view=gridview";
            location.reload();
            return true;
        }
    });
</script>
<script>
    $(".limit").change(function () {
        var limit = $(".limit").val();
        var removeolder = "<?= $_SERVER['REQUEST_URI']; ?>";
        console.log(removeolder);
        console.log(removeolder.search(/limit/i));
        if (removeolder.search(/limit/i) >= 0) {
            var indexes = removeolder.search(/limit/i) - 1;
            var haslimit = removeolder.substr(0, indexes);
            console.log(haslimit);
            console.log(typeof haslimit);
        }
        var text = "<?= $_SERVER[HTTP_HOST] . $_SERVER['PHP_SELF'] ?>"
        var url = "<?=  $_SERVER[HTTP_HOST] . $_SERVER['REQUEST_URI']?>";
        console.log("url");
        console.log(url);
        console.log(typeof haslimit);

        if (typeof haslimit == 'undefined') {
            if (url.includes("t=")) {
                var tpos = url.search('t=');
                var t = url.slice(tpos);
                var t = t.slice(2, 3);
                console.log(tpos);
                console.log(t);
                let fullurl = "https://" + text + '?t=' + t + '&page=1' + '&limit=' + limit;
                console.log("sdf");
                console.log(fullurl);
                window.location.replace(fullurl);
            } else {
                console.log("mahalo");
                let fullurl = "https://" + text + '?page=1' + '&limit=' + limit;
                window.location.replace(fullurl);
            }

        } else {
            let fullurl = "https://" + "<?= $_SERVER[HTTP_HOST] ?>" + haslimit + '&limit=' + limit;
            console.log("sdfsdf");
            console.log(fullurl);
            window.location.replace(fullurl);
        }


        // window.location.replace(fullurl);
    });
</script>
<script>
    var owl = $("#restaurant");
    owl.owlCarousel({
        loop: false,
        margin: 10,
        items: 1,
        nav: true
    });
    // owl.owlCarousel();
    $("#arrow-left").click(function () {
        stopOwlPropagation();

        owl.trigger('prev.owl.carousel');
        console.log('sdgg');
    });
    $('.arrow-right').click(function () {

        owl.trigger('next.owl.carousel');
        stopOwlPropagation();
        console.log('ssdfsdfdgg');
    });

    function stopOwlPropagation(element) {
        $(element).on('to.owl.carousel, next.owl.carousel, prev.owl.carousel, destroy.owl.carousel', function (e) {
            e.stopPropagation();
        });
    }
</script>

</body>
</html>
