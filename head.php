<?php
require_once 'Administrator/Connection/works.php';
require_once 'Administrator/Connection/jdf.php';
$PAGE = (explode("/", $_SERVER["PHP_SELF"]));
if (!isset($_SESSION['auth'])) {
    $_SESSION['auth'] = array();
} else {
    $sUserId = $_SESSION['auth']['sUserId'];
}
switch (end($PAGE)) {
    case "index.php":
    case "index1.php":
        include 'actions/CartFuncs.php';
        $foods = array();
        $ROUTE = 'صفحه ی اصلی';
        break;
    case "blog-detail.php":
        include 'actions/CartFuncs.php';
        $foods = array();
        $ROUTE = 'بلاگ';
        break;
    case "login.php":
              $foods = array();
        require_once 'actions/CartFuncs.php';
        if (isset($_POST['login'])) {
            $_POST['controller_type'] = 'login';
            if (CallAPI('post', 'https://digchi.ir/new/Administrator/controllers/SiteUsers/SiteUsers.php', $_POST['login']) == 'true') {
                header('location: index.php');
            } else {
                $_SESSION['digchi_user_login'] = false;
            }
        }

        $ROUTE = 'ورود';
        break;
    case "menu.php":
        $foods = array();
        require_once 'actions/CartFuncs.php';
        $contractor_id = $_REQUEST['restaurant_id'] or $_REQUEST['id'];
        if (empty($contractor_id)) {
            header('location: ' . $_SERVER['HTTP_REFERER']);
        }

//            header('location: ' . $_SERVER['HTTP_REFERER']);
        $Restaurant = json_decode(CallAPI('post', 'https://digchi.ir/new/Administrator/controllers/Contractors/Contractors.php', array("controller_type" => "get", "contractor_id" => $contractor_id)));
        $MenuCategories = json_decode(CallAPI('post', 'https://digchi.ir/new/Administrator/controllers/Contractors/Contractors.php', array("controller_type" => "getMenuCategories", "contractor_id" => $_REQUEST['restaurant_id'])));
        $ROUTE = 'مشاهده ی منو';
        $logged_in = false;
        if (isset($_SESSION['auth']['logged_in']) and $_SESSION['auth']['logged_in'] == true) {
            $logged_in = true;
            $sUserId = $_SESSION['auth']['sUserId'];
        }
        $open = true;
        if (is_array($_SESSION['cart'])) {
            if (!isset($_SESSION['cart']['full_price']))
                $_SESSION['cart']['full_price'] = 0;
            if (!isset($_SESSION['cart']['delivery_price']))
                $_SESSION['cart']['delivery_price'] = 0;
            if (!isset($_SESSION['cart']['final_price']))
                $_SESSION['cart']['final_price'] = 0;
            if (is_array($_SESSION['cart'][$_REQUEST['restaurant_id']])) {
                if (!is_array($_SESSION['cart'][$_REQUEST['restaurant_id']]['fids'])) {
                    $_SESSION['cart'][$_REQUEST['restaurant_id']]['fids'] = array();
                }
                if (!is_numeric($_SESSION['cart'][$_REQUEST['restaurant_id']]['restFoodCount'])) {
                    $_SESSION['cart'][$_REQUEST['restaurant_id']]['restFoodCount'] = 0;
                }
                if (!is_bool($_SESSION['cart'][$_REQUEST['restaurant_id']]['preOrder'])) {
                    $_SESSION['cart'][$_REQUEST['restaurant_id']]['preOrder'] = false;
                }
                if (!isset($_SESSION['cart']['full_count'])) {
                    $_SESSION['cart']['full_count'] = 0;
                }
            } else {

                if (!isset($_SESSION['cart']['full_count'])) {
                    $_SESSION['cart']['full_count'] = 0;
                }
                $_SESSION['cart'][$_REQUEST['restaurant_id']] = array();
                $_SESSION['cart'][$_REQUEST['restaurant_id']]['fids'] = array();
                $_SESSION['cart'][$_REQUEST['restaurant_id']]['restFoodCount'] = 0;
                $_SESSION['cart'][$_REQUEST['restaurant_id']]['preOrder'] = false;
            }
        } else {
            if (!isset($_SESSION['cart']['full_count'])) {
                $_SESSION['cart']['full_count'] = 0;
            }
            $_SESSION['cart'] = array();
            $_SESSION[$_REQUEST['restaurant_id']] = array();
            $_SESSION['cart'][$_REQUEST['restaurant_id']]['fids'] = array();
            $_SESSION['cart'][$_REQUEST['restaurant_id']]['restFoodCount'] = 0;
            $_SESSION['cart'][$_REQUEST['restaurant_id']]['preOrder'] = false;
            if (!isset($_SESSION['cart']['full_price']))
                $_SESSION['cart']['full_price'] = 0;
            if (!isset($_SESSION['cart']['delivery_price']))
                $_SESSION['cart']['delivery_price'] = 0;
            if (!isset($_SESSION['cart']['final_price']))
                $_SESSION['cart']['final_price'] = 0;
        }
        switch (date("D")) {
            case "Sat":
                if (CalcTimeForMenuFile($Restaurant->satMorningStart,
                    $Restaurant->satMorningEnd,
                    $Restaurant->satNoonStart,
                    $Restaurant->satNoonEnd,
                    $Restaurant->satNightStart,
                    $Restaurant->satNightEnd,
                    $Restaurant->saturdayNight,
                    $Restaurant->saturdayNoon,
                    $Restaurant->saturdayMorning)) {
                    $open = false;
                }
                $day = 'شنبه';
                break;
            case "Sun":
                if (CalcTimeForMenuFile($Restaurant->sunMorningStart,
                    $Restaurant->sunMorningEnd,
                    $Restaurant->sunNoonStart,
                    $Restaurant->sunNoonEnd,
                    $Restaurant->sunNightStart,
                    $Restaurant->sunNightEnd,
                    $Restaurant->sundayNight,
                    $Restaurant->sundayNoon,
                    $Restaurant->sundayMorning)) {
                    $open = false;
                }
                $day = 'یک شنبه';
                break;
            case "Mon":
                if (CalcTimeForMenuFile($Restaurant->monMorningStart,
                    $Restaurant->monMorningEnd,
                    $Restaurant->monNoonStart,
                    $Restaurant->monNoonEnd,
                    $Restaurant->monNightStart,
                    $Restaurant->monNightEnd,
                    $Restaurant->mondayNight,
                    $Restaurant->mondayNoon,
                    $Restaurant->mondayMorning)) {
                    $open = false;
                }
                $day = 'دو شنبه';

                break;
            case "Tue":
                if (CalcTimeForMenuFile($Restaurant->tuesMorningStart,
                    $Restaurant->tuesMorningEnd,
                    $Restaurant->tuesNoonStart,
                    $Restaurant->tuesNoonEnd,
                    $Restaurant->tuesNightStart,
                    $Restaurant->tuesNightEnd,
                    $Restaurant->tuesdayNight,
                    $Restaurant->tuesdayNoon,
                    $Restaurant->tuesdayMorning)) {
                    $open = false;
                }
                $day = 'سه شنبه';

                break;
            case "Wed":
                if (CalcTimeForMenuFile($Restaurant->wednsMorningStart,
                    $Restaurant->wednsMorningEnd,
                    $Restaurant->wednsNoonStart,
                    $Restaurant->wednsNoonEnd,
                    $Restaurant->wednsNightStart,
                    $Restaurant->wednsNightEnd,
                    $Restaurant->wednesdayNight,
                    $Restaurant->wednesdayNoon,
                    $Restaurant->wednesdayMorning)) {
                    $open = false;
                }
                $day = 'چهارشنبه';

                break;
            case "Thu":
                if (CalcTimeForMenuFile($Restaurant->thursMorningStart,
                    $Restaurant->thursMorningEnd,
                    $Restaurant->thursNoonStart,
                    $Restaurant->thursNoonEnd,
                    $Restaurant->thursNightStart,
                    $Restaurant->thursNightEnd,
                    $Restaurant->thursdayNight,
                    $Restaurant->thursdayNoon,
                    $Restaurant->thursdayMorning)) {
                    $open = false;
                }
                $day = 'پنجشنبه';

                break;
            case "Fri":
                if (CalcTimeForMenuFile($Restaurant->fridMorningStart,
                    $Restaurant->fridMorningEnd,
                    $Restaurant->fridNoonStart,
                    $Restaurant->fridNoonEnd,
                    $Restaurant->fridNightStart,
                    $Restaurant->fridNightEnd,
                    $Restaurant->fridayNight,
                    $Restaurant->fridayNoon,
                    $Restaurant->fridayMorning)) {
                    $open = false;
                }
                $day = 'جمعه';

                break;
        }
        $InnerCategoriesFull = json_decode(CallAPI('post', 'https://digchi.ir/new/Administrator/controllers/Contractors/Contractors.php', array("controller_type" => "getCategories", "contractor_id" => $_REQUEST['restaurant_id'])));
        break;
    case 'checkOut.php':
        $data = cleanMe(csrf_validate($_POST));
        if ($data === false) die('توکن ست نشده!');
        $uid = isset($data['uid']) ? $_SESSION['auth']['sUserId'] == $data['uid'] ? $data['uid'] : die('لطفا ابتدا وارد اکانت خود شوید!') : die('لطفا ابتدا وارد اکانت خود شوید!');
        $user = $db->query("select * from  tblSiteUsers where uid = $uid")->fetch_object();
        $cart = $_SESSION['cart'];
        $encoded = json_encode($cart);
        $db->query(($db->query("select * from tblTempReq where uid = '$uid'")->num_rows > 0 ? "UPDATE tblTempReq set full_data = '$encoded' where uid = '$uid'" : "insert into tblTempReq (uid,full_data) VALUES ('$uid','$encoded')"));
        $ROUTE = 'تایید سفارش';
        $full_price = $_SESSION['cart']['full_price'];
        $addresses = json_decode(CallAPI('POST', 'https://digchi.ir/new/Administrator/controllers/SiteUsers/SiteUsers.php', array("controller_type" => "getAddress", "uid" => $sUserId)));
        require_once 'actions/CartFuncs.php';
        break;
    case "menu2.php":
        require_once 'actions/CartFuncs.php';
        $ROUTE = 'مشاهده رستورانها';
        $foods = array();
        $contractor_id = $_REQUEST['mcid'] or $_REQUEST['id'];
        break;
    case "restaurant.php":
        require_once 'actions/CartFuncs.php';
        $ROUTE = 'رستورانها';
        $foods = array();
//        $contractor_id = $_REQUEST['mcid'] or $_REQUEST['id'];
        break;
//        var_dump($_SERVER['HTTP_REFERER']);

//        if (empty($contractor_id)) {
//            header('location: ' . $_SERVER['HTTP_REFERER']);

//            break;
//        }

    case "blog.php":
        $ROUTE = 'بلاگ';
        require_once 'actions/CartFuncs.php';
        $bid = $_REQUEST['bid'];
        $foods = array();
        break;
    case "search.php":
        $ROUTE = 'جستجو';
        require_once 'actions/CartFuncs.php';
        $searchId = $_REQUEST['searchId'];
        $foods = array();
        break;
    case "about-us.php":
        $ROUTE = 'درباره ما';
        require_once 'actions/CartFuncs.php';
        $foods = array();
        break;
    case "contactUs.php":
        $ROUTE = 'تماس با ما';
        $foods = array();
        require_once 'actions/CartFuncs.php';
        break;

    case "wishList.php":
        $ROUTE = 'علاقه مندیهای من';
        $foods = array();
        require_once 'actions/CartFuncs.php';
        break;



}
?>

<!DOCTYPE html>
<html lang="fa" style="direction: rtl">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--    --><?php
//    if ($Route == 'صفحه ی اصلی') {
        ?>
        <title>سفارش غذای آنلاین دیگچی || <?= $ROUTE ?></title>
<!--        --><?php
//    }
//    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Default Description">
    <meta name="keywords" content="fashion, store, E-commerce">
    <meta name="robots" content="*">
    <link rel="icon" href="index.php#" type="image/x-icon">
    <link rel="shortcut icon" href="index.php#" type="image/x-icon">

    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="stylesheet/bootstrap-rtl.min.css">

    <link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
    <link rel="stylesheet" type="text/css" href="stylesheet/revslider.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">
    <link rel="stylesheet" href="Administrator/plugins/leaflet/leaflet.css"/>
    <!--    <link rel="stylesheet" href="Administrator/plugins/leaflet/leaflet.draw.css"/>-->
    <link rel="stylesheet" type="text/css" href="stylesheet/style-digchi.css" media="all">
    <?
    if (function_exists('extracss')) {
        echo extracss();
    }


    ?>

    <!--    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700" rel="stylesheet">-->
    <!--    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">-->
    <!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>-->
    <!--    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i,900" rel="stylesheet">-->
</head>
