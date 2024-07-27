<style>
    ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 5px;
    }
    ::-webkit-scrollbar-thumb {
        border-radius: 10px;
        background-color: rgba(0,0,0,.5);
        -webkit-box-shadow: 0 0 1px rgba(255,255,255,.5);
    }
    .level0{
        width: 200px;
        height: 300px;
        overflow-y: hidden;
        overflow-x: hidden;
        float: right;

        margin-bottom: 50px!important;
    }
    .level0:hover{
        overflow-y: auto;
    }
    .level1{
        display: block!important;
        width: 100%!important;
        text-align: center!important;
        font-weight: lighter;
    }
    .ul-title {
        border-bottom: 1px solid #000;
        height: 15px;
        font-weight: bolder;
        font-size: 18px;
        margin: 10px;
        width: 200px !important;
        text-align: center !important;
        scroll-margin-right: 20px;
    }
</style>
<header>
    <?

    ////    require_once '../Connection/works.php';
    //    require_once 'Administrator/Connection/works.php';
    //    require_once 'Administrator/models/ContractorCategories.php';

    //    $contractor = new ContractorCategories();
    require_once 'Administrator/Connection/works.php'; ?>
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="header-banner">
                        <div class="assetBlock">
                            <div id="slideshow">
                                <p>Special Offers! - Get <span>50%</span> off on vegetables </p>
                                <p>sale <span>40%</span> of on bulk shopping! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header">
        <div class="container">
            <div class="header-container row">
                <div class="logo logo-2"><a href="index1.php" title="index">
                        <div><img class="logo-image" src="Administrator/dist/img/CompanyLogo.png" alt="logo"></div>
                    </a></div>
                <div class="fl-nav-menu float-right-sm-digchi" id="menu-button">
                    <nav>
                        <div class="mm-toggle-wrap">
                            <div class="mm-toggle"><i class="icon-align-justify"></i><span class="mm-label">Menu</span>
                            </div>
                        </div>
                        <div class="nav-inner">

                            <ul id="nav" class="hidden-xs">

                                <li><a class="level-top" href="https://digchi.ir/new1/index1.php"><span>صفحه اصلی</span></a></li>
                                <li class="mega-menu"><a class="level-top" href="#"><span>منو غذا</span></a>
                                    <div class="level0-wrapper dropdown-6col">
                                        <div class="container">
                                            <div class="level0-wrapper2">
                                                <div class="col-1">
                                                    <div class="nav-block nav-block-center">
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>پیتزا</strong></li>
                                                            <li class="level1"><a href="#">پیتزا مخلوط</a></li>
                                                            <li class="level1"><a href="#">پیتزا آمریکایی</a></li>
                                                            <li class="level1"><a href="#">پیتزا اسپانیایی</a></li>
                                                            <li class="level1"><a href="#">پیتزا مکزیکی</a></li>
                                                            <li class="level1"><a href="#">پیتزا سبزیجات</a></li>
                                                            <li class="level1"><a href="#">پیتزا قارچ و گوشت</a></li>
                                                            <li class="level1"><a href="#">پیتزا مخصوص</a></li>
                                                            <li class="level1"><a href="#">پیتزا خانواده</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>خورشت</strong></li>
                                                            <li class="level1"><a href="#">خورشت قرمه سبزی</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه</a></li>
                                                            <li class="level1"><a href="#">خورشت کرفس</a></li>
                                                            <li class="level1"><a href="#">خورشت بامیه</a></li>
                                                            <li class="level1"><a href="#">خورشت خوراک</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه بادمجان</a></li>
                                                            <li class="level1"><a href="#">خورشت فسنجان</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>غذاهای ایرانی</strong></li>
                                                            <li class="level1"><a href="#">خورشت قرمه سبزی</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه</a></li>
                                                            <li class="level1"><a href="#">خورشت کرفس</a></li>
                                                            <li class="level1"><a href="#">خورشت بامیه</a></li>
                                                            <li class="level1"><a href="#">خورشت خوراک</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه بادمجان</a></li>
                                                            <li class="level1"><a href="#">خورشت فسنجان</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>غذاهای محلی</strong></li>
                                                            <li class="level1"><a href="#">خورشت قرمه سبزی</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه</a></li>
                                                            <li class="level1"><a href="#">خورشت کرفس</a></li>
                                                            <li class="level1"><a href="#">خورشت بامیه</a></li>
                                                            <li class="level1"><a href="#">خورشت خوراک</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه بادمجان</a></li>
                                                            <li class="level1"><a href="#">خورشت فسنجان</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>فست فود</strong></li>
                                                            <li class="level1"><a href="#">همبرگر</a></li>
                                                            <li class="level1"><a href="#">پیتزا</a></li>
                                                            <li class="level1"><a href="#">فلافل</a></li>
                                                            <li class="level1"><a href="#">سیب زمینی سرخ کرده</a></li>
                                                            <li class="level1"><a href="#">قارچ سوخاری</a></li>
                                                            <li class="level1"><a href="#">ناگت مرع</a></li>
                                                            <li class="level1"><a href="#">هات داگ</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>سالاد</strong></li>
                                                            <li class="level1"><a href="#">سزار</a></li>
                                                            <li class="level1"><a href="#">شیرازی</a></li>
                                                            <li class="level1"><a href="#">فصل</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>دسر</strong></li>
                                                            <li class="level1"><a href="#">ژله</a></li>
                                                            <li class="level1"><a href="#">کارامل</a></li>
                                                            <li class="level1"><a href="#">شکلات</a></li>
                                                        </ul>
<!--                                                        <ul class="level0">-->
<!--                                                            --><?php
//                                                            $menuCategories = json_decode(CallAPI('get', 'https://digchi.ir/new/Administrator/controllers/BaseTables/MenuCategories/MenuCategories.php'));
//
//                                                            foreach ($menuCategories
//
//                                                                     as $menuCategory) {
//                                                                ?>
<!--                                                                <li class="level3 nav-6-1 parent item">-->
<!--                                                                    <a href="#"><span></span></a>-->
<!--                                                                    <ul class="level1">-->
<!--                                                                        <li class="level2 nav-4-1-1"><strong><a-->
<!--                                                                                href="https://digchi.ir/new1/menu2.php?mcid=--><?//= $menuCategory->mcid ?><!--"><span>--><?//= $menuCategory->name ?><!--</span></a></strong>-->
<!--                                                                        </li>-->
<!---->
<!---->
<!--                                                                    </ul>-->
<!---->
<!--                                                                </li>-->
<!---->
<!--                                                            --><?// } ?>
<!--                                                        </ul>-->
                                                    </div>
                                                </div>


                                                <div class="col-2">
                                                    <div class="menu_image"><a title="" href="#"><img
                                                                    alt="menu_image" src="images/banner.jpg"></a></div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>


                                </li>
                                <li class="mega-menu"><a class="level-top" href="#"><span>رستوران</span></a>
                                    <div class="level0-wrapper dropdown-6col">
                                        <div class="container">
                                            <div class="level0-wrapper2">
                                                <div class="col-1">
                                                    <div class="nav-block nav-block-center">
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>پیتزا</strong></li>
                                                            <li class="level1"><a href="#">پیتزا مخلوط</a></li>
                                                            <li class="level1"><a href="#">پیتزا آمریکایی</a></li>
                                                            <li class="level1"><a href="#">پیتزا اسپانیایی</a></li>
                                                            <li class="level1"><a href="#">پیتزا مکزیکی</a></li>
                                                            <li class="level1"><a href="#">پیتزا سبزیجات</a></li>
                                                            <li class="level1"><a href="#">پیتزا قارچ و گوشت</a></li>
                                                            <li class="level1"><a href="#">پیتزا مخصوص</a></li>
                                                            <li class="level1"><a href="#">پیتزا خانواده</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>خورشت</strong></li>
                                                            <li class="level1"><a href="#">خورشت قرمه سبزی</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه</a></li>
                                                            <li class="level1"><a href="#">خورشت کرفس</a></li>
                                                            <li class="level1"><a href="#">خورشت بامیه</a></li>
                                                            <li class="level1"><a href="#">خورشت خوراک</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه بادمجان</a></li>
                                                            <li class="level1"><a href="#">خورشت فسنجان</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>غذاهای ایرانی</strong></li>
                                                            <li class="level1"><a href="#">خورشت قرمه سبزی</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه</a></li>
                                                            <li class="level1"><a href="#">خورشت کرفس</a></li>
                                                            <li class="level1"><a href="#">خورشت بامیه</a></li>
                                                            <li class="level1"><a href="#">خورشت خوراک</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه بادمجان</a></li>
                                                            <li class="level1"><a href="#">خورشت فسنجان</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>غذاهای محلی</strong></li>
                                                            <li class="level1"><a href="#">خورشت قرمه سبزی</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه</a></li>
                                                            <li class="level1"><a href="#">خورشت کرفس</a></li>
                                                            <li class="level1"><a href="#">خورشت بامیه</a></li>
                                                            <li class="level1"><a href="#">خورشت خوراک</a></li>
                                                            <li class="level1"><a href="#">خورشت قیمه بادمجان</a></li>
                                                            <li class="level1"><a href="#">خورشت فسنجان</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>فست فود</strong></li>
                                                            <li class="level1"><a href="#">همبرگر</a></li>
                                                            <li class="level1"><a href="#">پیتزا</a></li>
                                                            <li class="level1"><a href="#">فلافل</a></li>
                                                            <li class="level1"><a href="#">سیب زمینی سرخ کرده</a></li>
                                                            <li class="level1"><a href="#">قارچ سوخاری</a></li>
                                                            <li class="level1"><a href="#">ناگت مرع</a></li>
                                                            <li class="level1"><a href="#">هات داگ</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>سالاد</strong></li>
                                                            <li class="level1"><a href="#">سزار</a></li>
                                                            <li class="level1"><a href="#">شیرازی</a></li>
                                                            <li class="level1"><a href="#">فصل</a></li>
                                                        </ul>
                                                        <ul class="level0">
                                                            <li class="ul-title"><strong>دسر</strong></li>
                                                            <li class="level1"><a href="#">ژله</a></li>
                                                            <li class="level1"><a href="#">کارامل</a></li>
                                                            <li class="level1"><a href="#">شکلات</a></li>
                                                        </ul>
<!--                                                        <ul class="level0">-->
<!--                                                            --><?php
//                                                            $contractors1 = json_decode(CallAPI('get', 'https://digchi.ir/new/Administrator/controllers/Contractors/Contractors.php'));
//
//                                                            foreach ($contractors1
//
//                                                                     as $contractor) {
//                                                                ?>
<!--                                                                <li class="level3 nav-6-1 parent item"><a-->
<!--                                                                            href="#"><span></span></a>-->
<!--                                                                    <ul class="level1">-->
<!--                                                                        <li class="level2 nav-4-1-1"><a-->
<!--                                                                                    href="https://digchi.ir/new1/menu.php?restaurant_id=--><?// echo $contractor->contractor_id ?><!--"><span>--><?//= $contractor->brandName ?><!--</span></a>-->
<!--                                                                        </li>-->
<!---->
<!---->
<!--                                                                    </ul>-->
<!---->
<!--                                                                </li>-->
<!---->
<!--                                                            --><?// } ?>
<!--                                                        </ul>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </li>
                                <li class="mega-menu"><a class="level-top" href="blog.php"><span>بلاگ</span></a>
                                </li>
                                <li class="mega-menu"><a class="level-top" href="about-us.php"><span>درباره ما</span></a></li>
                             <li class="mega-menu"><a class="level-top" href="contactUs.php"><span>تماس با ما</span> </a>
                                </li>
                                <li class="mega-menu"><a class="level-top href="#"><span></span> </a>
                                </li>


                                                                <li class="fl-custom-tabmenulink mega-menu"><a href="#" class="level-top">
                     
                                                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="fl-header-right">
                    <div class="collapse navbar-collapse">
                        <form class="navbar-form ajax" id="searchForm"  method="get" action="search.php">
                            <div class="input-group mr-2">
                                <input id="searchname" name="searchname" type="text" class="form-control input1" placeholder="نام رستوران یا غذا...">
                                <span class="input-group-btn">
                  <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span
                                  class="sr-only">جستجو</span> </span> </button>
                  </span></div>
                        </form>
                    </div>
                    <div class="fl-links" style="float: left;position: relative;">
                        <div class="no-js"><a title="حساب من" class="clicker"></a>
                            <div class="fl-nav-links">
                                <div class="language-currency">

                                </div>
                                <ul class="links">
                                    <li><a href="https://digchi.ir/new1/checkOut.php" title="حساب من" >حساب من</a></li>
                                    <li><a href="https://digchi.ir/new1/wishList.php" title="علاقه مندی ها">علاقه مندی ها</a></li>
                                    <li><a href="https://digchi.ir/new1/menu2.php?allId=1" title="ثبت سفارش">ثبت سفارش جدید</a></li>
                                    <li><a  title="بلاک" href="https://digchi.ir/new1/blog.php">بلاک</a></li>
                                    <?php

                                    if (isset($_SESSION['auth']['sUserId']) and $_SESSION['auth']['logged_in'] == true) {
                                        ?>
                                        <li class="last"><a href="logout.php" title="خروج">خروج</a></li>
                                        <?php
                                    } else { ?>
                                        <li class="last"><a href="login.php" title="ورود">ورود</a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                    require_once 'layers/mini-cart.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>