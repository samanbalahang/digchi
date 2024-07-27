<?php
session_start();
require_once 'head.php';
require_once 'Administrator/Connection/works.php'; ?>
<style>
    .tocardfilter {
        font-size: 1rem;
        border-bottom: 1px solid #dcdbdb !important;
        padding: 20PX 10PX 17px 11px;
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

        max-height: 300px !important;
        min-height: 225px !important;
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
        min-height: 460px;
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

    .m-text-center {
        text-align: center;
    }

    @media (min-width: 540px) {
        .d-sm-block {
            display: block !important;
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

    <?php
    require_once 'header.php';
    ?>

    <div class="page-heading">
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!--                        <ul>-->
                        <!--                            <li class="home"><a href="index.php" title="Go to Home Page">صفحه ی اصلی</a>-->
                        <!--                               </li>-->
                        <!--                            <li class="category1601"><strong></strong></li>-->
                        <!--                        </ul>-->
                    </div>

                </div>

            </div>

        </div>
        <div class="page-title">
            <h2> جستجو در دیگچی&nbsp<?= $Restaurant->brandName ?>  </h2>
        </div>
    </div>

    <section class="mt-5">
        <div class="container">
            <div class="row">

                <aside class="col-lg-3">
                    <div class="custom-sliders">

                        <div>
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#carousel-example-generic" data-slide-to="0"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active"><img src="images/slide2.jpg" alt="slide3">
                                        <div class="carousel-caption">
                                            <h4>تخفیف یک</h4>
                                            <h3><a title=" Sample Product" href="product-detail.html">تا 70 درصد
                                                    تخفیف</a></h3>
                                            <p>متن تخفیف یک</p>
                                            <a class="link" href="#">همین حالا خرید کنید</a></div>
                                    </div>
                                    <div class="item"><img src="images/slide3.jpg" alt="slide1">
                                        <div class="carousel-caption">
                                            <h4>تخفیف دو</h4>
                                            <h3><a title=" Sample Product" href="product-detail.html">فروش بزرگ</a></h3>
                                            <p>متن ساخته شده برای تخفیف دو</p>
                                            <a class="link" href="#">همین حالا خرید کنید</a>
                                        </div>
                                    </div>
                                    <div class="item"><img src="images/slide1.jpg" alt="slide1">
                                        <div class="carousel-caption">
                                            <h4>تخفیف سه</h4>
                                            <h3><a title=" Sample Product" href="product-detail.html">غذا های خوشمزه</a>
                                            </h3>
                                            <p>متن ساخته شده برای تخفیف سه</p>
                                            <a class="link" href="#">همین حالا خرید کنید</a>
                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                    <span class="sr-only">قبلی</span> </a> <a class="right carousel-control"
                                                                              href="#carousel-example-generic"
                                                                              data-slide="next"> <span
                                            class="sr-only">بعدی</span>
                                </a></div>
                        </div>
                    </div>

                    <div id="cart" class="block block-list block-cart">
                        <div class="block-title"> سبد خرید</div>
                        <div class="block-content">
                            <div id="loader" style="display: none" class="loader_ajax_small"></div>
                            <?php
                            require_once 'layers/side-cart.php';
                            ?>
                        </div>

                        <!--                    </div>-->
                </aside>

                <div class="col-lg-9" style="flex-wrap: wrap;display: flex;}">
                    <div class="row">
                        <div class="card tocardfilter w-100">
                            <div class="flex justify-content-between">
                                <div class=" view-mode">
                                    <a title="Grid" class="button button-grid cursor active d-none d-lg-block"
                                       id="linrview">&nbsp;</a>
                                    &nbsp; <span title="List"
                                                 class="gridview button button-active button-list cursor d-none d-lg-block"
                                                 id="gridview">
                                 &nbsp;
                                                             </span>
                                    &nbsp;
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
                                        $searchname = $_GET['searchname'];
                                        $strquery= "Select `tblContractors`.`contractor_id`,`tblInnerCategories`.`icid` from `tblContractors` join `tblInnerCategories` on `tblContractors`.`contractor_id` = `tblInnerCategories`.`contractor_id` where `tblInnerCategories`.`name` like '%$searchname%' or `tblContractors`.`brandName` like '%$searchname%' GROUP BY `tblContractors`.`contractor_id` , `tblInnerCategories`.`icid`";
                                        #echo $strquery;
                                        $resu = $pdo->query($strquery);
                                        $array = [];
                                        while ($contractor = $resu->fetchObject()) {
                                            if (strlen($contractor->contractor_id) > 0) {
                                                if (!in_array($contractor->contractor_id, $array)) {
                                                    $array[] = $contractor->contractor_id;
                                                }
                                            }
                                        }
                                        $number0frow = intval(count($array));
                                        //                                        echo $number0frow;
                                        //                                        echo $strquery;
                                        $page = intval($number0frow / $number);
                                        if($number0frow > 9) {
                                            if (fmod($number0frow, $number) != 0) {
                                                $page++;
                                            }
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
                                                if (isset($_GET['searchname'])) {
                                                    echo '?searchname=' . $_GET['searchname'];
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
<!--                                <div class="form-group flex d-none d-lg-flex">-->
<!--                                    <label>تعداد نمایش در هر صفحه: </label>-->
<!--                                    <select class="form-control inline-block limit"-->
<!--                                            name="limit">-->
<!--                                        <option value="9" --><?php //if (!isset($_GET['limit'])) {
//                                            echo 'SELECTED';
//                                        } ?><!-- >9-->
<!--                                        </option>-->
<!--                                        <option value="12" --><?php //if ($_GET['limit'] == 12) {
//                                            echo 'SELECTED';
//                                        } ?><!-- >12-->
<!--                                        </option>-->
<!--                                        <option value="15" --><?php //if ($_GET['limit'] == 15) {
//                                            echo 'SELECTED';
//                                        } ?><!-- >15-->
<!--                                        </option>-->
<!--                                        <option value="18" --><?php //if ($_GET['limit'] == 18) {
//                                            echo 'SELECTED';
//                                        } ?><!-- >18-->
<!--                                        </option>-->
<!--                                    </select>-->
<!--                                </div>-->
                                <div class="sort-of flex">
                                    <!--                            <label class="left">مرتب سازی: </label>-->
                                    <!--                            <select class="form-control inline-block" id="sort" name="sort">-->
                                    <!--                                <option value="position">جایگاه</option>-->
                                    <!--                                <option value="name">اسم</option>-->
                                    <!--                                <option value="price">قیمت</option>-->
                                    <!--                            </select>-->
                                    <!--                            <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a>-->
                                </div>
                            </div>
                        </div>

                        <?php

                        //                $searchname = $_GET['searchname'];
                        //                $contractors2 = json_decode(CallAPI('get', 'https://digchi.ir/new/Administrator/controllers/Contractors/Contractors.php'));
                        //                $strquery = "select distinct * from tblInnerCategories as innerCat   join tblContractors as contractor on innerCat.contractor_id = contractor.contractor_id where  innerCat.name  like '%$searchname%' or contractor.brandName like '%$searchname%'";
                        //                $res = $pdo->query($strquery);
                        //                $array = [];

                        //                while ($contractor = $res->fetchObject()) {
                        //                    if (strlen($contractor->brandName) > 0) {
                        //                        if (!in_array($contractor->contractor_id, $array)) {
                        //                            $array[] = $contractor->contractor_id;
                        ?>

                        <!--                            <div class="col-12 col-lg-6 col-md-6 col-sm-6">-->
                        <!--                                <div class="card mb-3" style="max-width: 540px;">-->
                        <!--                                    <div class="row no-gutters">-->
                        <!--                                        <div class="col-md-4">-->
                        <!--                                            --><? //
                        //                                            foreach ($contractors2 as $cont) {
                        //                                                if ($cont->contractor_id == $contractor->contractor_id) {
                        ?>
                        <!--                                                    <img class="img-fluid img-ras img-search"-->
                        <!--                                                         src="Administrator/images/restaurants/-->
                        <? //= $cont->pic; ?><!--"-->
                        <!--                                                         alt="">-->
                        <?
                        //                                                }
                        //                                            }
                        ?>
                        <!--                                        </div>-->
                        <!--                                        <div class="col-md-8">-->
                        <!--                                            <div class="card-body">-->
                        <!--                                                <h5 class="card-title">-->
                        <? //= $contractor->brandName; ?><!--</h5>-->
                        <!--                                                <span class="card-text">-->
                        <? #=
                        //                                            substr($contractor->address,0,50). (strlen($contractor->address) > 50 ? '...' : '');
                        //                                            $contractor->address;
                        ?>
                        <!--                                        </span>-->
                        <!---->
                        <!--                                                <br/>-->
                        <!--                                                <a href="https://digchi.ir/new1/menu.php?restaurant_id=-->
                        <? //= $contractor->contractor_id; ?><!--"-->
                        <!--                                                   class="btn btn-success mt-2">مشاهده منو</a>-->
                        <!---->
                        <!--                                                <span class="mr-3">-->
                        <!--                                                تلفن:-->
                        <!--                                                <span>-->
                        <? //= $contractor->tel; ?>
                        <!--                                                </span>-->
                        <!--                                            </span>-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                        <!--                                    </div>-->
                        <!--                                </div>-->
                        <!--                            </div>-->

                        <? #}
                        #}
                        #}


                        #sambal test
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
                        $searchname = $_GET['searchname'];
                        $strquery="Select `tblContractors`.`contractor_id`,`tblInnerCategories`.`icid`,`tblContractors`.`contractor_id`,`tblContractors`.`brandName`,`tblContractors`.`pic`,`tblContractors`.`tel` from `tblContractors` join `tblInnerCategories` on `tblContractors`.`contractor_id` = `tblInnerCategories`.`contractor_id` where `tblInnerCategories`.`name` like '%$searchname%' or `tblContractors`.`brandName` like '%$searchname%' GROUP BY `tblContractors`.`contractor_id`,`tblContractors`.`brandName` ,`tblContractors`.`pic`,`tblContractors`.`tel`,`tblInnerCategories`.`icid` LIMIT " . $limit . " OFFSET " . $offset."";
                        #$strquery = "Select distinct `tblInnerCategories`.`icid` , `tblInnerCategories`.`contractor_id`,`tblContractors`.`contractor_id`,`tblContractors`.`brandName`,`tblContractors`.`pic`,`tblContractors`.`tel` from tblInnerCategories join tblContractors on `tblInnerCategories`.`contractor_id` = `tblContractors`.`contractor_id` GROUP BY `tblContractors`.`contractor_id` , `tblInnerCategories`.`icid` where `tblInnerCategories`.`name` like '%$searchname%'  or `tblContractors`.`brandName` like '%$searchname%'  LIMIT " . $limit . " OFFSET " . $offset."";
                         echo $strquery;
                        $res = $pdo->query($strquery);
                        $arries = [];
                        while ($contractor = $res->fetchObject()) {
//                            if (strlen($contractor->brandName) > 0) {
//                                if (!in_array($contractor->contractor_id, $arries)) {
//                                    $arries[] = $contractor->contractor_id;
                                    ?>
                                    <div class="card restrows col-xs-12">
                                        <div class="mb-3">
                                            <div class="row no-gutters">
                                                <div class="menu-2-col-img col-md-2">
                                                    <div class="w-75 over-flow-hidden m-auto">
                                                        <img class="img-fluid img-ras img-menu2 w-100"
                                                             src="Administrator/images/restaurants/<?= $contractor->pic; ?>"
                                                             alt="">
                                                    </div>
                                                </div>
                                                <div class="menu-2-col-text col-md-8">
                                                    <div class="card-body menu2-card m-text-center lg-text-right">
                                                        <h5 class="card-title">
                                                            <h5 class="card-title">
                                                                <?
                                                                echo $contractor->brandName;
                                                                ?>
                                                            </h5>
                                                            <span class="card-text">
                                        <?
                                        echo $contractor->address;
                                        ?>
                                                                                </span>

                                                            <br/>
                                                            <a href="https://digchi.ir/new1/menu.php?restaurant_id=<?= $contractor->contractor_id; ?>"
                                                               class="btn btn-success mt-2">مشاهده منو</a>

                                                            <span class="mr-3">
                                                                                        تلفن:
                                                                                        <span>
                                                                                            <? echo $contractor->tel; ?>
                                                                                        </span>
                                                                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?
//                                }
//                            }
                        }
                        #end of test

                        if (sizeof($array) === 0) {
                            ?>

                            <div class="col-12">
                                <div class="card mb-3">
                                    <div class="row no-gutters">
                                        <div class="col-md-12">
                                            <p class="p-3">
                                                عبارت جستجو شده یافت نشده. لطفا واژه جستجو شده را تغییر دهید تا به نتیجه
                                                دلخواه
                                                برسید.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?
                        }
                        ?>
                        <div class="card tocardfilter w-100">
                            <div class="flex justify-content-between">
                                <div class=" view-mode">
                                    <a title="Grid" class="button button-grid cursor active d-none d-lg-block"
                                       id="linrview">&nbsp;</a>
                                    &nbsp; <span title="List"
                                                 class="gridview button button-active button-list cursor d-none d-lg-block"
                                                 id="gridviews">
                                 &nbsp;
                                                             </span>
                                    &nbsp;
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
                                        $searchname = $_GET['searchname'];
                                        $strquery= "Select `tblContractors`.`contractor_id`,`tblInnerCategories`.`icid` from `tblContractors` join `tblInnerCategories` on `tblContractors`.`contractor_id` = `tblInnerCategories`.`contractor_id` where `tblInnerCategories`.`name` like '%$searchname%' or `tblContractors`.`brandName` like '%$searchname%' GROUP BY `tblContractors`.`contractor_id` , `tblInnerCategories`.`icid`";
                                        #echo $strquery;
                                        $resu = $pdo->query($strquery);
                                        $array = [];
                                        while ($contractor = $resu->fetchObject()) {
                                            if (strlen($contractor->contractor_id) > 0) {
                                                if (!in_array($contractor->contractor_id, $array)) {
                                                    $array[] = $contractor->contractor_id;
                                                }
                                            }
                                        }
                                        $number0frow = intval(count($array));
                                        //                                        echo $number0frow;
                                        //                                        echo $strquery;
                                        $page = intval($number0frow / $number);
                                        if($number0frow > 9) {
                                            if (fmod($number0frow, $number) != 0) {
                                                $page++;
                                            }
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
                                                if (isset($_GET['searchname'])) {
                                                    echo '?searchname=' . $_GET['searchname'];
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
                                <!--                                <div class="form-group flex d-none d-lg-flex">-->
                                <!--                                    <label>تعداد نمایش در هر صفحه: </label>-->
                                <!--                                    <select class="form-control inline-block limit"-->
                                <!--                                            name="limit">-->
                                <!--                                        <option value="9" --><?php //if (!isset($_GET['limit'])) {
                                //                                            echo 'SELECTED';
                                //                                        } ?><!-- >9-->
                                <!--                                        </option>-->
                                <!--                                        <option value="12" --><?php //if ($_GET['limit'] == 12) {
                                //                                            echo 'SELECTED';
                                //                                        } ?><!-- >12-->
                                <!--                                        </option>-->
                                <!--                                        <option value="15" --><?php //if ($_GET['limit'] == 15) {
                                //                                            echo 'SELECTED';
                                //                                        } ?><!-- >15-->
                                <!--                                        </option>-->
                                <!--                                        <option value="18" --><?php //if ($_GET['limit'] == 18) {
                                //                                            echo 'SELECTED';
                                //                                        } ?><!-- >18-->
                                <!--                                        </option>-->
                                <!--                                    </select>-->
                                <!--                                </div>-->
                                <div class="sort-of flex">
                                    <!--                            <label class="left">مرتب سازی: </label>-->
                                    <!--                            <select class="form-control inline-block" id="sort" name="sort">-->
                                    <!--                                <option value="position">جایگاه</option>-->
                                    <!--                                <option value="name">اسم</option>-->
                                    <!--                                <option value="price">قیمت</option>-->
                                    <!--                            </select>-->
                                    <!--                            <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
            require_once('footer.php');
            ?>
    <script>
        $(document).ready(function () {
            $("#linrview").on('click', () => {
                console.log("line trigger");
                if ($(".restrows").hasClass("col-xs-12")) {
                    console.log("has col-12");
                } else {
                    console.log("dosent has col-12");
                    if ($("#linrview").hasClass('active')) {
                        console.log('active');
                    } else {
                        console.log('else active');
                        $("#linrview").addClass('active');
                    }
                    $("#gridview").removeClass('active');
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
            });
        });
    </script>
    <script>
        $(".gridview").on('click', () => {
            console.log("grid trigger");
            if ($(".restrows").hasClass("col-xs-12")) {
                console.log("has col-12");
                $("#linrview").removeClass('active');
                $("#gridview").addClass('active');
                $(".restrows").removeClass("col-xs-12");
                $(".restrows").addClass("col-xs-4");
                $(".menu-2-col-img").removeClass('col-md-2');
                $(".menu-2-col-img").addClass('col-md-12');
                $(".restrows").addClass("border-left");
                $(".over-flow-hidden").addClass("cursor");
                $(".menu-2-col-text").removeClass("col-md-8");
                $(".menu-2-col-text").addClass("col-md-12");
                $(".menu-2-col-text").addClass("text-center");
                $(".img-ras").addClass("border-r-l-b-blue");
                $(".img-ras").addClass("border-blue");
                $(".img-ras").addClass("img-card-grid");
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
                if(url.includes("t=")) {
                    var tpos = url.search('t=');
                    var searchname = url.slice(tpos);
                    var searchname = searchname.slice(2, 3);
                    console.log(tpos);
                    console.log(searchname);
                    let fullurl = "https://" + text + '?searchname=' + searchname +'&page=1'+ '&limit=' + limit;
                    console.log("sdf");
                    console.log(fullurl);
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
        <script src="Administrator/plugins/leaflet/leaflet.js"></script>
        <script src="Administrator/plugins/leaflet/Leaflet.draw.js"></script>
        <script src="Administrator/plugins/leaflet/Control.Draw.js"></script>
        <script>
            $(window).on('load', function () {
                loadmap();
            });

            function loadmap() {

                let map = L.map('resmapcanv').setView([<?=$reslatlngcur[0];?>, <?=$reslatlngcur[1];?>], 13);
                L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiZmFyaGFkamFmYXJpMzg1IiwiYSI6ImNqanF5dmpvNjhmZXgzdm82cHljbDdhb2UifQ.VGrzePHsYotiYRCe9cDr4A', {
                    maxZoom: 18,
                    id: 'mapbox.streets',
                    accessToken: 'pk.eyJ1IjoiZmFyaGFkamFmYXJpMzg1IiwiYSI6ImNqanF5dmpvNjhmZXgzdm82cHljbDdhb2UifQ.VGrzePHsYotiYRCe9cDr4A'
                }).addTo(map);
                let marker = L.marker([<?=$reslatlngcur[0];?>, <?=$reslatlngcur[1];?>]).addTo(map);
            }
        </script>
        <script>
            function UserLogin() {
                Swal.fire({
                    icon: 'info',
                    title: 'ورود',
                    showCancelButton: true,
                    confirmButtonText: 'تایید',
                    cancelButtonText: 'لغو',
                    confirmButtonColor: '#00b82b',
                    cancelButtonColor: '#bb2720',
                    reverseButtons: true,
                    showLoaderOnConfirm: true,
                    html:
                        '<label style="float: right" for="mobile">موبایل</label>' +
                        '<input placeholder="شماره موبایل" id="mobile" autocomplete="off" style="text-align: center" class="swal2-input form-control">' +
                        '<label style="float: right" for="password">رمز عبور</label>' +
                        '<input type="password" placeholder="رمز عبور" autocomplete="off" style="text-align: center" id="password" class="swal2-input form-control">',
                    focusConfirm: false,
                    footer: '<a href="#" onclick="UserSubScribe()">عضو دیگچی نیستم!</a>',
                    preConfirm: () => {
                        if (!/^[0][9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/.test($('#mobile').val())) {
                            $("#mobile").addClass('is-invalid');
                            return false;
                        }
                        if ($("#password").val() == '') {
                            $("#password").addClass('is-invalid');
                            $("#mobile").removeClass('is-invalid');
                            return false;
                        }
                        return {
                            mobile: $("#mobile").val(),
                            password: $("#password").val(),
                            controller_type: 'loginForFront'
                        }
                    }
                }).then(value => {
                    if (!value.dismiss) {
                        $.ajax({
                            url: 'Administrator/controllers/SiteUsers/SiteUsers.php',
                            data: value.value,
                            type: 'post',
                            success: (res) => {
                                let result = JSON.parse(res);
                                if (result.uid > 0) {
                                    let newForm = '<form id="checkoutform" action="checkOut.php" method="post">' +
                                        '<input type="hidden" value="' + result.uid + '" name="uid">' +
                                        result.csrf +
                                        '</form>';

                                    Swal.fire({
                                        icon: 'success',
                                        title: 'ورود با موفقیت انجام شد!',
                                        html: 'شما تا <b></b> ثانیه دیگر به صفحه ی بررسی درحواست منتقل میشوید!',
                                        showConfirmButton: false,
                                        timer: 4000,
                                        showLoaderOnConfirm: true,
                                        timerProgressBar: true,
                                        onBeforeOpen: () => {
                                            setInterval(() => {
                                                const content = Swal.getContent();
                                                if (content) {
                                                    const b = content.querySelector('b');
                                                    if (b) {
                                                        b.textContent = Math.round(Swal.getTimerLeft() / 1000)
                                                    }
                                                }
                                            }, 100)
                                        },
                                        onAfterClose: () => {
                                            $('body').append(newForm);
                                            $("#checkoutform").submit();
                                        }
                                    });

                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'اطلاعات اشتباه',
                                        text: 'رمز عبور و شماره موبایل وارد شده با هم مطابقت ندارند، اگه رمز عبور خود را فراموش کرده اید لطفا مراحل بازیابی رمز عبور را طی کنید',
                                        showCloseButton: true,
                                        showConfirmButton: false,
                                        footer: '<a href="#">بازیابی رمز عبور</a>'
                                    });
                                }
                            }
                        })
                    }
                });
            }

            function UserSubScribe() {
                Swal.fire({
                    icon: 'info',
                    title: 'ثبت نام!',
                    text: 'شماره موبایل خود را وارد کرده و پس از فشردن دکمه ی تایید منتظر کد فعال سازی باشید!',
                    showCancelButton: true,
                    confirmButtonText: 'تایید',
                    cancelButtonText: 'لغو',
                    confirmButtonColor: '#00b82b',
                    cancelButtonColor: '#bb2720',
                    reverseButtons: true,
                    input: 'text',
                    inputValidator: (mobile) => {
                        if (!/^[0][9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]$/.test(mobile)) {
                            return 'لطفا شماره موبایل خود را با ساختار صحبح وارد نمایید! (با صفر شروع شود)';
                        }
                    },
                    inputAttributes: {
                        placeholder: 'شماره موبایل',
                        autocomplete: 'off',
                        style: "text-align: center;"
                    },
                    focusConfirm: false,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true,
                    allowOutsideClick: () => !Swal.isLoading(),
                    footer: '<a href="#" onclick="UserLogin()">عضو دیگچی هستم!</a>',
                    preConfirm: (mobile) => {
                        return fetch(`Administrator/controllers/SiteUsers/SiteUsers.php?mobile=${mobile}&controller_type=initRegister`)
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error(response.statusText)
                                }
                                return response.json()
                            })
                            .catch(error => {
                                Swal.showValidationMessage(
                                    `ارسال کد با خطا مواجه شد!`
                                )
                            })
                    }
                }).then((result) => {
                    if (result.value) {
                        let res = (result.value);
                        if (res.status == 'success') {
                            let timerInterval;
                            Swal.fire({
                                icon: 'info',
                                title: 'کد تایید ارسال شد!',
                                html: 'شما <b></b> ثانیه برای وارد کردن کد تایید زمان دارید!',
                                input: 'text',
                                showCancelButton: true,
                                confirmButtonText: 'تایید',
                                cancelButtonText: 'لغو',
                                confirmButtonColor: '#00b82b',
                                cancelButtonColor: '#bb2720',
                                reverseButtons: true,
                                inputValidator: (code) => {
                                    if (!/^[0-9]{6}/.test(code))
                                        return 'کد وارد شده صحیح نمی باشد';
                                },
                                inputAttributes: {
                                    placeholder: 'کد',
                                    style: 'text-align: center'
                                },
                                timer: 60000,
                                showLoaderOnConfirm: true,
                                timerProgressBar: true,
                                onBeforeOpen: () => {
                                    setTimeout(() => {
                                        timerInterval = setInterval(() => {
                                            const content = Swal.getContent();
                                            if (content) {
                                                const b = content.querySelector('b');
                                                if (b) {
                                                    b.textContent = Math.round(Swal.getTimerLeft() / 1000)
                                                }
                                            }
                                        }, 1000)
                                    }, 1000);
                                },
                                preConfirm: (code) => {
                                    return fetch(`Administrator/controllers/SiteUsers/SiteUsers.php?mobile=${res.mobile}&code=${code}&controller_type=checkCode`)
                                        .then(response => {
                                            if (!response.ok) {
                                                throw new Error(response.statusText)
                                            }
                                            return response.json()
                                        })
                                        .catch(error => {
                                            Swal.showValidationMessage(
                                                `بررسی کد با خطا مواجه شد!`
                                            )
                                        })
                                }
                            }).then(val => {
                                if (val.value) {
                                    if (val.value.status == 'logged_in') {
                                        alert(val.value.target);
                                    } else {
                                        let authCode = val.value.code;
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'کد تایید وارد شده اشتباه است',
                                            text: 'دوباره وارد میکنید؟',
                                            confirmButtonColor: '#2a9829',
                                            confirmButtonText: 'تایید',
                                            cancelButtonColor: '#e9342b',
                                            cancelButtonText: 'لغو',
                                            showCancelButton: true,
                                            reverseButtons: true,
                                            preConfirm: () => {
                                                Swal.fire({
                                                    icon: 'info',
                                                    title: 'کد تایید',
                                                    text: 'لطفا کد تایید ارسال شده را وارد نمایید',
                                                    input: 'text',
                                                    inputValue: authCode > 0 ? authCode : '',
                                                    inputValidator: (code) => {
                                                        if (!/^[0-9]{6}$/.test(code)) return 'لطفا کد تایید شش رقمی خود را وارد نمایید';
                                                    },
                                                    confirmButtonColor: '#2a9829',
                                                    confirmButtonText: 'تایید',
                                                    cancelButtonColor: '#e9342b',
                                                    cancelButtonText: 'لغو',
                                                    showCancelButton: true,
                                                    reverseButtons: true,
                                                    preConfirm: (authCode) => {
                                                        $.ajax({
                                                            url: 'Administrator/controllers/SiteUsers/SiteUsers.php',
                                                            data: {
                                                                controller_type: 'checkCode',
                                                                auth_code: authCode
                                                            },
                                                            type: 'post',
                                                            success: result => {
                                                                if (result == 'logged_in') {
                                                                    alert(result)
                                                                }
                                                            }
                                                        })
                                                    }
                                                })
                                            }
                                        })
                                    }
                                }
                            });
                        } else if (res.status == 'failed' && res.detail == 'exists') {
                            Swal.fire({
                                icon: 'warning',
                                title: 'خطا!',
                                text: 'شماره موبایل وارد شده توسط کاربر دیگری ثبت شده است!',
                                showConfirmButton: false,
                                footer: 'رمز عبور خود را فراموش کرده اید؟  <a href="#"> بازیابی رمز عبور </a>'
                            })
                        }
                    }
                })
            }

        </script>
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
</body>
</html>
