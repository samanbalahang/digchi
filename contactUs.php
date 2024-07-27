<?php
session_start();
require_once 'head.php';
?>

<body>
<div id="page">
    <? include('header.php'); ?>
    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>تماس با ما</h2>
                    </div>
                </div>
                <!--col-xs-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>

    <!-- BEGIN Main Container -->

    <form id="contactUsForm">
        <input name="controller_type" value="add" type="hidden">
        <div class="static-contain" dir="rtl">
            <fieldset class="group-select">
                <ul>
                    <li id="billing-new-address-form">
                        <fieldset class="">
                            <ul>
                                <li>
                                    <div class="customer-name">
                                        <div class="input-box ">
                                            <label for="contact_email"><em class="required"></em>آدرس ایمیل</label>
                                            <br>
                                            <input name="contact_email" id="contact_email" title="contact_email"
                                                   class="input-text required-entry " type="text">
                                        </div>
                                    </div>
                                    <div class="input-box ">
                                        <label for=" contact_fullName"><em class="required"></em>نام و نام
                                            خانوادگی</label>
                                        <br>
                                        <input name="contact_fullName" id="contact_fullName" title="register_mobile"
                                               class="input-text required-entry" type="text">
                                    </div>

                                </li>
                                <li>
                                    <label for="contact_message"><em class="required"></em> متن پیغام</label>
                                    <br>
                                    <textarea name="contact_message" id="contact_message" title="contact_message"
                                              class="required-entry input-text" cols="5" rows="3"></textarea>
                                </li>
                            </ul>
                        </fieldset>
                    </li>

                </ul>
            </fieldset>
        </div>
        <div class="buttons-set">
            <button type="submit" name="submit" title="Submit" class="button submit"><span><span>ارسال </span></span>
            </button>

        </div>
    </form>

</div>

<!--col1-layout-->

<?php
require_once 'feature-box.php';
require_once 'footer.php';
?>
<!-- For version 1,2,3,4,6 -->
<!-- End For version 1,2,3,4,6 -->
<div class="bg-black" id="bg-black">

</div>

</div>
<?php
require_once 'manumobile.php';
?>
<!--page-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="Administrator/plugins/sweetalert2/sweetalert2.js"></script>
<script src="js/jquery.mobile-menu.min.js"></script>
<script src="js/funcs.js"></script>
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
    $("input[name='searchname']").change(function(){
        console.log("Submitted he");
    });
    $("#bg-black").addClass("d-none");
    $("#menu-button").click(function() {
        $("#bg-black").toggleClass("d-none");
        $("#mobile-menu").removeClass("d-none");
    });
    $("#bg-black").click(function() {
        console.log("#sls");
        $("#bg-black").addClass("d-none");
        $("#mobile-menu").addClass("d-none");
    });

</script>
</body>
</html>