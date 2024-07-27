<?php
require_once 'head.php';
?>
<body class="customer-account-login rtl" style="">
<div style="display: none" id="loader"></div>
<div id="page">

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>ورود یا ثبت نام</h2>
                    </div>
                </div>
                <!--col-xs-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>


    <!-- BEGIN Main Container -->

    <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">

        <div class="main">
            <div class="account-login container">
                <!--page-title-->

                <form action="login.php" method="post" id="login-form">
                    <input name="form_key" type="hidden" value="EPYwQxF6xoWcjLUr">
                    <fieldset class="col2-set">
                        <div class="col-1 new-users">
                            <strong class="text-right-digchi">مشتریان جدید</strong>
                            <div class="content">

                                <p class="text-right-digchi"> با ساختن اکانت میتوانید از سامانه ی سفارش آنلاین دیگچی
                                    استفاده کنید و از تخفیف ها جشنواره ها بهره مند شوید!</p>
                                <div class="buttons-set">
                                    <button type="button" title="Create an Account" class="button create-account"
                                            id="register"
                                    "><span><span>اکانت بسازید!</span></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 registered-users text-right-digchi">
                            <strong>مشتریان ثبت نام کرده</strong>
                            <div class="content">

                                <p>اگر در دیگچی حسابی ساخته اید، لطفا وارد شوید!</p>
                                <ul class="form-list">
                                    <li>
                                        <label for="mobile"> شماره موبایل <em class="required float-right-digchi">*</em></label>
                                        <div class="input-box">
                                            <input type="text" name="mobile" placeholder="شماره همراه"
                                                   id="mobile" value="" autocomplete="off"
                                                   class="input-text ltr required-entry">
                                        </div>
                                    </li>
                                    <li>
                                        <label for="pass"> رمز عبور<em
                                                    class="required float-right-digchi">*</em></label>
                                        <div class="input-box">
                                            <input type="password" placeholder="رمز عبور" name="password"
                                                   class="input-text required-entry validate-password" id="pass">
                                        </div>
                                    </li>
                                </ul>

                                <!--                                <p class="required" style="text-align: left">* Required Fields</p>-->


                                <div class="buttons-set">

                                    <button class="button login" id="login" style="float: left" title="ورود"
                                            name="login" type="button"><span> ورود </span></button>

                                    <a class="forgot-word" style="float: left" id="forgot-word">رمز عبور خود را فراموش
                                        کرده
                                        اید؟</a>
                                </div> <!--buttons-set-->
                            </div> <!--content-->
                        </div> <!--col-2 registered-users-->
                    </fieldset> <!--col2-set-->
                </form>

            </div> <!--account-login-->

        </div><!--main-container-->
        <div class="bg-black" id="bg-black">

        </div>

    </div> <!--col1-layout-->

    <?php
    require_once 'manumobile.php';
    ?>
    <?php
    require_once 'feature-box.php';
    require_once 'footer.php';
    ?>
    <!-- For version 1,2,3,4,6 -->
    <!-- End For version 1,2,3,4,6 -->

</div>
<!--page-->
<!-- Mobile Menu-->
<!--<div id="mobile-menu" class="float-right-sm-digchi">-->
<!--    <ul>-->
<!--        <li>-->
<!--            <div class="mm-search">-->
<!--                <form id="search1" name="search">-->
<!--                    <div class="input-group">-->
<!---->
<!--                        <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term"-->
<!--                               id="srch-term">-->
<!--                        <div class="input-group-btn">-->
<!--                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </form>-->
<!--            </div>-->
<!--        </li>-->
<!--        <li>-->
<!--            <div class="home"><a href="login.php#">Home</a></div>-->
<!--        </li>-->
<!---->
<!--        <li><a href="grid.html">Fruits‎</a>-->
<!--            <ul>-->
<!--                <li><a href="grid.html">Tropical Fruits‎</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Coconuts</a></li>-->
<!--                        <li><a href="grid.html">Dragonfruits</a></li>-->
<!--                        <li><a href="grid.html">Pomegranates</a></li>-->
<!--                        <li><a href="grid.html">Passionfruit</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Citrus Fruits‎</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Fresh Oranges</a></li>-->
<!--                        <li><a href="grid.html">Grapefruits</a></li>-->
<!--                        <li><a href="grid.html">Organic Limes</a></li>-->
<!--                        <li><a href="grid.html">Yellow Lemons</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Stone Fruits</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Sweet Apricots</a></li>-->
<!--                        <li><a href="grid.html">Nectarines</a></li>-->
<!--                        <li><a href="grid.html">Doughnut Peachs</a></li>-->
<!--                        <li><a href="grid.html">Italian Fruits</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Large Fruits</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Pineapples</a></li>-->
<!--                        <li><a href="grid.html">Organic Papayas</a></li>-->
<!--                        <li><a href="grid.html">Fresh Melons</a></li>-->
<!--                        <li><a href="grid.html">Grapefruits</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Seasonal Fruits</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Black Jamuns</a></li>-->
<!--                        <li><a href="grid.html">Fresh Mangos</a></li>-->
<!--                        <li><a href="grid.html">Organic Litchis</a></li>-->
<!--                        <li><a href="grid.html">Longans</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Berries & Cherries</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Strawberries</a></li>-->
<!--                        <li><a href="grid.html">Raspberries</a></li>-->
<!--                        <li><a href="grid.html">Blackberries</a></li>-->
<!--                        <li><a href="grid.html">Cherries</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="grid.html">Salads‎</a>-->
<!--            <ul>-->
<!--                <li><a href="grid.html">Veg Salads</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Tomatoes</a></li>-->
<!--                        <li><a href="grid.html">Cucumbers</a></li>-->
<!--                        <li><a href="grid.html">Peppers & Capsicums</a></li>-->
<!--                        <li><a href="grid.html">Avocados</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Dressings Salads</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Hellmann's</a></li>-->
<!--                        <li><a href="grid.html">Giuseppe Giusti</a></li>-->
<!--                        <li><a href="grid.html">Unitednature</a></li>-->
<!--                        <li><a href="grid.html">Walden Farms</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Fruits Salads</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Pineapples</a></li>-->
<!--                        <li><a href="grid.html">Red Apple</a></li>-->
<!--                        <li><a href="grid.html">Strawberries</a></li>-->
<!--                        <li><a href="grid.html">Row Mangos</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Bagged Salads</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Italian Baby Spinach</a></li>-->
<!--                        <li><a href="grid.html">Australia Green Kale</a></li>-->
<!--                        <li><a href="grid.html">Sustenir Fresh Toscano</a></li>-->
<!--                        <li><a href="grid.html">Oro Rocket Salad</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Lettuce Salads</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Butterhead</a></li>-->
<!--                        <li><a href="grid.html">Red Coral</a></li>-->
<!--                        <li><a href="grid.html">Rolla Rosa Lettuce</a></li>-->
<!--                        <li><a href="grid.html">Summercrisp</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Bread Salads</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Green Goddess</a></li>-->
<!--                        <li><a href="grid.html">Grilled Broccoli</a></li>-->
<!--                        <li><a href="grid.html">Panzanella</a></li>-->
<!--                        <li><a href="grid.html">Green Tomato</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="grid.html">Vegetables</a>-->
<!--            <ul>-->
<!--                <li><a href="grid.html">Leafy Vegetables</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Sprouts</a></li>-->
<!--                        <li><a href="grid.html">Lettuce</a></li>-->
<!--                        <li><a href="grid.html">Banana Leaves</a></li>-->
<!--                        <li><a href="grid.html">Microgreens</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Mushrooms</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Shimeji Mushroom</a></li>-->
<!--                        <li><a href="grid.html">Portobello Mushroom</a></li>-->
<!--                        <li><a href="grid.html">Oyster Mushroom</a></li>-->
<!--                        <li><a href="grid.html">Shiitake Mushroom</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Baby Vegetables</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Cabbage</a></li>-->
<!--                        <li><a href="grid.html">Capsicums</a></li>-->
<!--                        <li><a href="grid.html">Pak Choi</a></li>-->
<!--                        <li><a href="grid.html">Spinach</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!---->
<!--                <li><a href="grid.html">Salad Vegetables</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Cucumbers</a></li>-->
<!--                        <li><a href="grid.html">Avocados</a></li>-->
<!--                        <li><a href="grid.html">Mustard Leaves</a></li>-->
<!--                        <li><a href="grid.html">Tomatoes</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Asian Vegetables</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">Spring Onion</a></li>-->
<!--                        <li><a href="grid.html">Lady Fingers</a></li>-->
<!--                        <li><a href="grid.html">Watercress</a></li>-->
<!--                        <li><a href="grid.html">Curry Leaves</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="grid.html">Beans Vegetables</a>-->
<!--                    <ul>-->
<!--                        <li><a href="grid.html">French Beans</a></li>-->
<!--                        <li><a href="grid.html">Sweet Corn</a></li>-->
<!--                        <li><a href="grid.html">Fine Green Beans</a></li>-->
<!--                        <li><a href="grid.html">Petai Beans</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="grid.html">Juices‎</a></li>-->
<!--        <li><a href="grid.html">Meats‎</a></li>-->
<!--        <li><a href="login.php#">Pages</a>-->
<!--            <ul>-->
<!--                <li><a href="grid.html">Grid</a></li>-->
<!--                <li><a href="list.html">List</a></li>-->
<!--                <li><a href="product-detail.html">Product Detail</a></li>-->
<!--                <li><a href="shopping-cart.html">Shopping Cart</a></li>-->
<!--                <li><a href="checkout.html">Checkout</a>-->
<!--                    <ul>-->
<!--                        <li><a href="checkout-method.html">Checkout Method</a></li>-->
<!--                        <li><a href="checkout-billing-info.html">Checkout Billing Info</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="wishlist.html">Wishlist</a></li>-->
<!--                <li><a href="dashboard.html">Dashboard</a></li>-->
<!--                <li><a href="multiple-addresses.html">Multiple Addresses</a></li>-->
<!--                <li><a href="about-us.html">About us</a></li>-->
<!--                <li><a href="blog.html">Blog</a>-->
<!--                    <ul>-->
<!--                        <li><a href="blog-detail.php">Blog Detail</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="contact-us.html">Contact us</a></li>-->
<!--                <li><a href="404error.html">404 Error Page</a></li>-->
<!--            </ul>-->
<!--        </li>-->
<!--        <li><a href="login.php#">Custom‎</a></li>-->
<!---->
<!--    </ul>-->
<!--    <div class="top-links">-->
<!--        <ul class="links">-->
<!--            <li><a title="My Account" href="login.php">My Account</a></li>-->
<!--            <li><a title="Wishlist" href="wishlist.html">Wishlist</a></li>-->
<!--            <li><a title="Checkout" href="checkout.html">Checkout</a></li>-->
<!--            <li><a title="Blog" href="blog.html">Blog</a></li>-->
<!--            <li class="last"><a title="Login" href="login.php">Login</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!-- JavaScript -->
<script type="text/javascript" src="Administrator/plugins/jQuery/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/revslider.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery.mobile-menu.min.js"></script>
<script type="text/javascript" src="Administrator/dist/js/check.js"></script>
<script type="text/javascript" src="Administrator/plugins/sweetalert2/sweetalert2.js"></script>
<script>
    $("#login").on("click", function () {
        var password = $("input[name='password']").val();
        var mobile = $("input[name='mobile']").val();
        console.log(password);

        $.ajax({
            url: "Administrator/controllers/SiteUsers/SiteUsers.php",
            type: "post",
            data: {
                controller_type: "login",
                username: mobile,
                password: password
            },
            success: (res) => {
                $("#loader").hide();
                if (res == 'true') {
                    Swal.fire({
                        icon: 'success',
                        title: 'خوش آمدید.',
                        text: 'خوش آمدید.',
                        // footer: '<a onclick="Recover()">بازیابی رمز عبور</a>',
                        showConfirmButton: false,
                        showCloseButton: true,
                        onAfterClose: () => {

                            location.replace('index1.php');
                        }
                    })
                } else {
                    console.log(res);
                }
            }
        })
    });
</script>
<script>
    $("#forgot-word").on('click', () => {
        var mobile = $("input[name='mobile']").val();
        $.ajax({
            url: "Administrator/controllers/SiteUsers/SiteUsers.php",
            type: "post",
            data: {
                controller_type: "initRegister",
                mobile: mobile
            },
            success: (res) => {
                $("#loader").hide();
                // console.log(res{"status"});
                console.log(res["status"]);
                console.log(typeof res);
                console.log(res.slice(11, 18));
                var res = res.slice(11, 18);
                if (res == "success") {
                    Swal.fire({
                        icon: 'success',
                        title: 'ثبت نام انجام شد.',
                        text: 'ثبت نام انجام شد.',
                        // footer: '<a onclick="Recover()">بازیابی رمز عبور</a>',
                        showConfirmButton: false,
                        showCloseButton: true,
                        onAfterClose: () => {
                            location.replace('index1.php');
                        }
                    })
                } else {
                    console.log(res);
                }
            }
        })
    });
</script>
<script>

    $("#register").on('click', () => {
        Swal.fire({
            icon: 'info',
            title: 'ثبت نام',
            text: 'لطفا شماره موبایل خود را وارد کرده و سپس کد تایید ارسال شده را وارد نمایید!',
            input: 'text',
            inputValidator: (mobile) => {
                if (!/^[0][9][0-9]{9}$/.test(mobile)) {
                    return 'لطفا شماره موبایل را به درستی وارد نمایید!';
                }
            },
            confirmButtonText: 'تایید',
            inputPlaceholder: "شماره موبایل",
            confirmButtonColor: '#00b424',
            cancelButtonColor: '#db2d25',
            cancelButtonText: 'لفو',
            reverseButtons: true,
            showCancelButton: true,
            showLoaderOnConfirm: true,
            preConfirm: mobile => {
                $("#loader").show();
                $.ajax({
                    url: "Administrator/controllers/SiteUsers/SiteUsers.php",
                    type: "post",
                    data: {
                        controller_type: "register",
                        mobile: mobile
                    },
                    success: (res) => {
                        $("#loader").hide();
                        if (res == 'exists') {
                            Swal.fire({
                                icon: 'error',
                                title: 'ثبت نام دچار مشکل شد',
                                text: 'شماره ی وارد شده قبلا در سیستم ثبت شده است، در صورت فراموشی رمز عبور خود لطفا از طریق لینک فراموشی رمز عبور اقدام به بازیابی آن نمایید!',
                                footer: '<a onclick="Recover()">بازیابی رمز عبور</a>',
                                showConfirmButton: false,
                                showCloseButton: true
                            })
                        } else if (res == "code required") {
                            Swal.fire({
                                icon: 'info',
                                title: 'کد تایید ارسال شد!',
                                text: 'لطفا کد تایید ارسال شده به شماره ی ' + mobile + " را وارد نمایید!",
                                input: 'text',
                                inputValidator: code => {
                                    if (!/^[0-9]{6}$/.test(code)) {
                                        return 'لطفا کد تایید ارسال شده را به درستی وارد نمایید!';
                                    }
                                },
                                confirmButtonText: 'تایید',
                                inputPlaceholder: "کد تایید",
                                confirmButtonColor: '#00b424',
                                cancelButtonColor: '#db2d25',
                                cancelButtonText: 'لفو',
                                reverseButtons: true,
                                showCancelButton: true,
                                showLoaderOnConfirm: true,
                                preConfirm: code => {
                                    $("#loader").show();
                                    $.ajax({
                                        url: "Administrator/controllers/SiteUsers/SiteUsers.php",
                                        type: "post",
                                        data: {
                                            controller_type: "checkCode",
                                            mobile: mobile,
                                            code: code
                                        },
                                        success: newRes => {
                                            $("#loader").hide();
                                            if (newRes > 0) {
                                                Swal.fire({
                                                    icon: 'success',
                                                    title: 'ثبت نام موفقیت آمیز!',
                                                    text: 'حساب کاربری شما با موفقیت ساخته شد، برای ثبت سفارش آدرس و باقی مشخصات خود را نیز کامل نمایید',
                                                    showConfirmButton: false,
                                                    showCloseButton: true,
                                                    onAfterClose: () => {
                                                        location.replace('index1.php');
                                                    }
                                                });
                                            }
                                        }
                                    })
                                }
                            })
                        }
                    },
                    error: () => {
                        Swal.fire()
                    }
                })

            }
        })
    });
    /*  function Register() {
          Swal.fire({
              icon: 'info',
              title: 'ثبت نام',
              text: 'لطفا شماره موبایل خود را وارد کرده و سپس کد تایید ارسال شده را وارد نمایید!',
              input: 'text',
              inputValidator: (mobile) => {
                  if (!/^[0][9][0-9]{9}$/.test(mobile)) {
                      return 'لطفا شماره موبایل را به درستی وارد نمایید!';
                  }
              },
              confirmButtonText: 'تایید',
              inputPlaceholder: "شماره موبایل",
              confirmButtonColor: '#00b424',
              cancelButtonColor: '#db2d25',
              cancelButtonText: 'لفو',
              reverseButtons: true,
              showCancelButton: true,
              showLoaderOnConfirm: true,
              preConfirm: mobile => {
                  $("#loader").show();
                  $.ajax({
                      url: "Administrator/controllers/SiteUsers/SiteUsers.php",
                      type: "post",
                      data: {
                          controller_type: "register",
                          mobile: mobile
                      },
                      success: (res) => {
                          $("#loader").hide();
                          if (res == 'exists') {
                              Swal.fire({
                                  icon: 'error',
                                  title: 'ثبت نام دچار مشکل شد',
                                  text: 'شماره ی وارد شده قبلا در سیستم ثبت شده است، در صورت فراموشی رمز عبور خود لطفا از طریق لینک فراموشی رمز عبور اقدام به بازیابی آن نمایید!',
                                  footer: '<a onclick="Recover()">بازیابی رمز عبور</a>',
                                  showConfirmButton: false,
                                  showCloseButton: true
                              })
                          } else if (res == "code required") {
                              Swal.fire({
                                  icon: 'info',
                                  title: 'کد تایید ارسال شد!',
                                  text: 'لطفا کد تایید ارسال شده به شماره ی ' + mobile + " را وارد نمایید!",
                                  input: 'text',
                                  inputValidator: code => {
                                      if (!/^[0-9]{6}$/.test(code)) {
                                          return 'لطفا کد تایید ارسال شده را به درستی وارد نمایید!';
                                      }
                                  },
                                  confirmButtonText: 'تایید',
                                  inputPlaceholder: "کد تایید",
                                  confirmButtonColor: '#00b424',
                                  cancelButtonColor: '#db2d25',
                                  cancelButtonText: 'لفو',
                                  reverseButtons: true,
                                  showCancelButton: true,
                                  showLoaderOnConfirm: true,
                                  preConfirm: code => {
                                      $("#loader").show();
                                      $.ajax({
                                          url: "Administrator/controllers/SiteUsers/SiteUsers.php",
                                          type: "post",
                                          data: {
                                              controller_type: "checkCode",
                                              mobile: mobile,
                                              code: code
                                          },
                                          success: newRes => {
                                              $("#loader").hide();
                                              if (newRes > 0) {
                                                  Swal.fire({
                                                      icon: 'success',
                                                      title: 'ثبت نام موفقیت آمیز!',
                                                      text: 'حساب کاربری شما با موفقیت ساخته شد، برای ثبت سفارش آدرس و باقی مشخصات خود را نیز کامل نمایید',
                                                      showConfirmButton: false,
                                                      showCloseButton: true,
                                                      onAfterClose: () => {
                                                          location.replace('index.php');
                                                      }
                                                  });
                                              }
                                          }
                                      })
                                  }
                              })
                          }
                      },
                      error: () => {
                          Swal.fire()
                      }
                  })

              }
          })
      }*/



    <?php
    if (isset($_SESSION['digchi_user_login']) and $_SESSION['digchi_user_login'] == false) {
    alert($_SESSION['digchi_user_login']);
    ?>
    $(window).on('load', function () {
        Swal.fire({
            icon: 'error',
            title: 'فرایند ورود با خطا مواجه شد!',
            text: 'نام کاربری یا رمز عبور شما اشتباه است، در صورت به خاطر نیاوردن رمز عبور خود اقدام به بازیابی آن نمایید!',
            showConfirmButton: false,
            showCloseButton: true,
        })
    });
    <?php
    }
    ?>
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