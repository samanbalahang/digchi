<?php
require_once 'head.php';
require_once 'Administrator/Connection/works.php';
require_once 'Administrator/Connection/jdf.php';
?>
<style>
    #gallery_01 .slider-items{
        direction: ltr !important;
    }
    #productDetail .nav-tabs{
        border-bottom:none;
        padding: 0px;

    }
    #productDetail .nav-tabs > li {
        width: auto;
        float: right !important;
        padding: 10px 3px 10px 12px;
        list-style: none;
    }
         #productDetail .nav-tabs > li.active > a
        ,#productDetail  .nav-tabs > li.active > a:hover
        ,#productDetail .nav-tabs > li.active > a:focus{
            padding: 10px;
        }

    #productDetail .nav-tabs > li > a
    ,#productDetail .nav-tabs > li > a:hover
    ,#productDetail .nav-tabs > li > a:focus {
        border: none;
        background: none repeat scroll 0 0 #ccc;
        color: #fff;
        border-radius: 10px 10px 0px 0px;
        padding: 10px;
    }
    .related-slider{
        width: 100% !important;
        padding: 0px;
        margin: 0px;
    }
    .owl-controls{
        position: absolute;
        top: 0px;
        right: 0px;
    }
    .related-pro .new_title h2 {
        color: #292929;
        font-size: 26px;
        font-weight: 500;
        margin-bottom: 0px;
        padding: 22px 25px 22px 25px;
        position: relative;
        display: block;
        font-family: IRANSans, 'Oswald', sans-serif;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-top: 0px;
    }
    .text-black{
        color: black;
    }
    #productDetail .product-image img {
        margin-right: 0px !important;
        margin-left: 0px !important;

    }
    #productDetail .more-views-items{
        min-width: 133px;
        max-width: 134px;
    }
</style>
<body id="productDetail">
<div id="page">
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
    <!-- BEGIN Main Container -->
    <div class="main-container col1-layout wow bounceInUp animated">
        <div class="main">
            <div class="col-main">
                <!-- Endif Next Previous Product -->
                <div class="product-view wow bounceInUp animated" itemscope="" itemtype="http://schema.org/Product"
                     itemid="#product_base">
                    <div id="messages_product_view"></div>
                    <!--product-next-prev-->
                    <div class="product-essential container">
                        <div class="row">

                            <form action="product-detail.php" method="post" id="product_addtocart_form">
                                <!--End For version 1, 2, 6 -->
                                <!-- For version 3 -->
                                <?
                                $food_id = $_GET['food_id'];
                                $food = json_decode(CallAPI('get', 'https://digchi.ir/new1/Administrator/controllers/Contractors/Food.php', array("food_id" => $food_id, "controller_type" => "get")));


                                ?>
                                <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                                    <div class="new-label new-top-left">Hot</div>
                                    <div class="sale-label sale-top-left">-15%</div>
                                    <div class="product-image">
                                        <div class="product-full"><img id="product-zoom" src="Administrator/images/Foods/<?= $food->pic?>"
                                                                       data-zoom-image="Administrator/images/Foods/<?= $food->pic?>"
                                                                       alt="product-image"/></div>
                                        <div class="more-views">
                                            <div class="slider-items-products">
                                                <div id="gallery_01"
                                                     class="product-flexslider hidden-buttons product-img-thumb">
                                                    <div class="slider-items ltr slider-width-col4 block-content">
                                                        <?php
                                                        $query = "SELECT * FROM tblfoodsliders WHERE food_id = '$food->food_id'";
                                                        $execute= $pdo->query($query);
                                                        if($execute->rowCount()>0){
                                                        while ($galery = $execute->fetchObject()) {
                                                            ?>
                                                            <div class="more-views-items">
                                                                <a href="product-detail.html#"
                                                                                             data-image="Administrator/images/Foods/<?= $galery->imgaddress?>"
                                                                                             data-zoom-image="Administrator/images/Foods/<?= $galery->imgaddress?>">
                                                                    <img id="product-zoom0"
                                                                         src="Administrator/images/Foods/<?= $galery->imgaddress?>"
                                                                         alt="product-image"/>
                                                                </a>
                                                            </div>
                                                        <?php
                                                        }
                                                        ?>
                                                        <?php } else { ?>
                                                        <div class="more-views-items"><a href="product-detail.html#"
                                                                                         data-image="Administrator/images/Foods/<?= $food->pic?>"
                                                                                         data-zoom-image="Administrator/images/Foods/<?= $food->pic?>">
                                                                <img id="product-zoom0"
                                                                     src="Administrator/images/Foods/<?= $food->pic?>"
                                                                     alt="product-image"/> </a></div>
                                                        <div class="more-views-items"><a href="product-detail.html#"
                                                                                         data-image="images/fakefood/nature-2.jpg"
                                                                                         data-zoom-image="images/fakefood/nature-2.jpg">
                                                                <img id="product-zoom1"
                                                                     src="images/fakefood/nature-2.jpg"
                                                                     alt="product-image"/> </a></div>
                                                        <div class="more-views-items"><a href="product-detail.html#"
                                                                                         data-image="images/fakefood/nature-3.jpg"
                                                                                         data-zoom-image="images/fakefood/nature-3.jpg">
                                                                <img id="product-zoom2"
                                                                     src="images/fakefood/nature-3.jpg"
                                                                     alt="product-image"/> </a></div>
                                                        <div class="more-views-items"><a href="product-detail.html#"
                                                                                         data-image="images/fakefood/nature-4.jpg"
                                                                                         data-zoom-image="images/fakefood/nature-4.jpg">
                                                                <img id="product-zoom3"
                                                                     src="images/fakefood/nature-4.jpg"
                                                                     alt="product-image"/> </a></div>
                                                        <div class="more-views-items"><a href="product-detail.html#"
                                                                                         data-image="mages/fakefood/nature-4.jpg"
                                                                                         data-zoom-image="mages/fakefood/nature-4.jpg">
                                                                <img id="product-zoom4"
                                                                     src="images/fakefood/nature-4.jpg"
                                                                     alt="product-image"/> </a></div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: more-images -->
                                </div>
                                <div class="product-shop col-lg- col-sm-7 col-xs-12 " dir="rtl">
                                    <div class="product-name pull-right">
                                        <h1><?= $food->name ?> </h1>
                                    </div>

                                    <div class="price-block">
                                        <div class="price-box">
                                            <p class="availability in-stock"><span>موجود است</span></p>
                                            <p class="special-price pull-left"><span class="price-label">قیمت</span></p>
                                            <p><span id="product-price-48"
                                                     class="price pull-right"><?= en_to_fa(number_format($food->price)) . " تومان" ?> </span>
                                            </p>


                                        </div>
                                    </div>

                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <div class="pull-right">
                                                <div class="custom pull-right">
                                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;"
                                                            class="increase items-count" type="button"><i
                                                                class="fa fa-plus plus"></i></button>
                                                    <input type="text" class="input-text qty" title="Qty" value="1"
                                                           maxlength="12" id="qty" name="qty">
                                                    <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;"
                                                            class="reduced items-count" type="button"><i
                                                                class="fa fa-minus minus"></i></button>

                                                </div>
                                            </div>
                                            <button onclick="productAddToCartForm.submit(this)" class="button btn-cart"
                                                    title="Add to Cart" type="button">اضافه کردن به سبد خرید
                                            </button>
                                        </div>

                                    </div>
                                    <div class="short-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi
                                            ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate
                                            adipiscing cursus eu, suscipit id nulla. Donec a neque libero. </p>
                                    </div>
                                    <div class="social">
                                        <ul class="link">
                                            <li class="fb"><a href="product-detail.html#"></a></li>
                                            <li class="tw"><a href="product-detail.html#"></a></li>
                                            <li class="googleplus"><a href="product-detail.html#"></a></li>
                                            <li class="rss"><a href="product-detail.html#"></a></li>
                                            <li class="pintrest"><a href="product-detail.html#"></a></li>
                                            <li class="linkedin"><a href="product-detail.html#"></a></li>
                                            <li class="youtube"><a href="product-detail.html#"></a></li>
                                        </ul>
                                    </div>
                                    <ul class="shipping-pro">
                                        <?
                                        $rest_id = $_GET['rest_id'];
                                        $result = $pdo->query("SELECT * from tblContractors as conn join tblFoods as food on conn.contractor_id=food.contractor_id where food.food_id='$food_id' && conn.contractor_id='$rest_id'");
                                        while ($contractor = $result->fetchObject()){
                                        ?>
                                        <li> رستوران : <?= $contractor->brandName ?></li>
                                        <li>آدرس: <?= $contractor->address ?> </li>
                                        <li> تلفن : <?= $contractor->tel ?></li>
                                    </ul>
                                    <? } ?>
                                </div>


                        </div>

                        </form>
                    </div>
                </div>

<div class="container p-0">
                <ul class="nav-tabs row m-0">
                    <li class="active"><a data-toggle="tab" href="#home">بیشتر بدانید</a></li>
                    <li><a data-toggle="tab" href="#menu1">تگ ها</a></li>
                    <li><a data-toggle="tab" href="#menu2">کامنت ها</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <h3>در باره غذا</h3>
                        <p>ویژگی های این غذا</p>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>تگ ها برای نمایش در گوگل</h3>
                        <p>غذا</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>پیام ها</h3>
                        <p>پیام تائید شده ای وجود ندارد.</p>
                    </div>
                </div>
</div>

                <!--product-collateral-->
                <div class="box-additional">
                    <!-- BEGIN RELATED PRODUCTS -->
                    <div class="related-pro container">
                        <div class="slider-items-products">
                            <div class="new_title">
                                <h2 class="text-center">غذاهای این رستوران</h2>
                            </div>
                            <div id="related-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items ltr slider-width-col4 products-grid">
                                    <?php
                                    $query = "SELECT * FROM `tblFoods` Where food_id='$food_id' ORDER BY RAND() LIMIT 6";
                                    $othfoods= $pdo->query($query);
                                    while ($othfood = $othfoods->fetchObject()) {
                                        $likecounter = "SELECT COUNT(flag) AS likecount , food_id FROM `tblFoodWhishlists` WHERE food_id='$othfood->food_id' AND flag = 1 GROUP BY food_id";
                                        $likenumbers = $pdo->query($likecounter);

                                    ?>
                                    <div class="item">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info"><a href="product-detail.php?food_id=<?=$othfood->food_id?>&rest_id=<?=$rest_id?>" title="<?=$othfood->name?>" class="product-image"><img src="Administrator/images/Foods/<?=$othfood->pic?>" alt="<?=$othfood->name?>"></a>
                                                    <div class="item-box-hover">
                                                        <div class="box-inner">
                                                            <div class="product-detail-bnt"><a href="product-detail.html#" class="button detail-bnt"><span>Quick View</span></a></div>
                                                            <div class="actions"><span class="add-to-links"><a href="product-detail.html#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> <a href="product-detail.html#" class="link-compare add_to_compare" title="Add to Compare"><span>Add to Compare</span></a></span> </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="add_cart">
                                                    <button class="button btn-cart" type="button"><span>Add to Cart</span></button>
                                                </div>
                                            </div>
                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title"><a href="product-detail.php?food_id=<?=$othfood->food_id?>&rest_id=<?=$rest_id?>" title="<?=$othfood->name?>"><?=$othfood->name?> </a> </div>
                                                    <div class="item-content">
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <p class="rating-links"><a href="product-detail.html#">1 Review(s)</a> <span class="separator">|</span> <a href="product-detail.html#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                        <div class="item-price">
                                                            <div class="price-box"><span class="regular-price"><span class="price"><?=$othfood->price?>></span> </span> </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<?php
       }
?>
                                    <!-- Item -->

                                    <!-- End Item -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end related product -->

                </div>
                <!-- end related product -->
            </div>
            <!--box-additional-->
            <!--product-view-->
        </div>
    </div>
    <!--col-main-->
</div>
<!--main-container-->


<?php
require_once 'layers/mobile-menu.php';
require_once 'feature-box.php';
require_once('footer.php');
?>
<script src="js/cloud-zoom.js"></script>
<!--col1-layout-->

<!-- For version 1,2,3,4,6 -->

<!-- End For version 1,2,3,4,6 -->

<!--page-->
<!-- Mobile Menu-->

<!-- JavaScript -->
<?php
require_once 'layers/wishList-js.php';
?>

</body>
</html>
