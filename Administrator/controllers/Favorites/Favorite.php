<?php
@session_start();
require_once '../Administrator/Connection/works.php';

$Restaurant = json_decode(CallAPI('post', 'https://digchi.ir/new/Administrator/controllers/Contractors/Contractors.php', array("controller_type" => "get", "contractor_id" => $_REQUEST['rest_id'])));

switch ($_REQUEST['type']) {
    case 'add':
        $food_id_like = $_REQUEST['food_id'];
        $uer_id_like = $_REQUEST['uid'];
        $favourite_time_now = time();
        $check_row = $pdo->query("select * from tblFavouriteList where  food_id='$food_id_like' &&  uid='$uer_id_like'");
        if ($check_row) {
            $new_row = $pdo->query("INSERT INTO tblFavouriteList (uid,food_id,favourite_falg,favourite_time) VALUES ('$uer_id_like','$food_id_like',1,'$favourite_time_now')");
        } else {
            $update_row = $pdo->query("UPDATE tblFavouriteList SET favourite_falg=1 , favourite_time='$favourite_time_now' where food_id='$food_id_like' &&  uid='$uer_id_like'");
//          var_dump($new_row->errorInfo());
        }
        break;
    case 'remove':
        $food_id = $_REQUEST['food_id'];
        $uer_id = $_REQUEST['uid'];
        $check_row = $pdo->query("select * from tblFavouriteList where  food_id='$food_id' &&  uid='$uer_id' &&  favourite_falg=0 ");
        if (empty($check_row)) {
            break;

        } else {
            $update_row = $pdo->query("UPDATE tblFavouriteList SET favourite_falg=0 where food_id='$food_id' &&  uid='$uer_id'");
            break;
        }

//        $new_row = $pdo->query("DELETE FROM tblFavouriteList WHERE food_id='$food_id' AND uid='$uer_id'");
    case'getAll':
        $food_id_like = $_REQUEST['food_id'];
        $check_row = $pdo->query("select * from tblFavouriteList where  food_id='$food_id_like'");
        break;

}
//$response['full_price'] = 0;
//$response['delivery_price'] = 0;
//$response['final_price'] = 0;
//
//$response['side_list'] = '';
//foreach (@$_SESSION['cart'] as $rest_id => $val) {
//    if ($rest_id != 'full_count') {
//        if (is_array($_SESSION['cart'][$rest_id]['fids'])) {
//            foreach (@array_unique(@$_SESSION['cart'][$rest_id]['fids']) as $food_id) {
//                $food = json_decode(CallAPI('post', 'https://digchi.ir/new/Administrator/controllers/Contractors/Food.php', array('controller_type' => "get", "fid" => $food_id)));
//                $response['full_price'] += $food->price * (is_numeric(array_count_elements(@$_SESSION["cart"][$rest_id]["fids"], $food_id)) ? array_count_elements(@$_SESSION["cart"][$rest_id]["fids"], $food_id) : 1);
//            }
//        }
//        $rest = json_decode(CallAPI('post', 'https://digchi.ir/new/Administrator/controllers/Contractors/Contractors.php', array("controller_type" => "get", "contractor_id" => $rest_id)));
//        $response['delivery_price'] += is_numeric($rest->deliveryPrice) && $rest->deliveryPrice > 0 ? $rest->deliveryPrice : 0;
//    }
//}
//$response['final_price'] = $response['delivery_price'] + $response['full_price'];
//
//$_SESSION['cart']['full_price'] = $response['full_price'];
//$_SESSION['cart']['delivery_price'] = $response['delivery_price'];
//$_SESSION['cart']['final_price'] = $response['final_price'];
////echo json_encode($_SESSION);
//$response['cart'] = getCart($_SESSION);
//echo json_encode($response);
