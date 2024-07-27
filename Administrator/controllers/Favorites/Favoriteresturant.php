<?php
require_once '../../Connection/works.php';
require_once '../../models/Contractors/Contractors.php';
require_once '../../models/Favorites/Favoriteresturant.php';
$Favoriteresturant = new Favoriteresturant();
switch ($_REQUEST['type']) {
    case 'add':
        $restoursnt_id = $_POST['restoursnt_id'];
        $uid = $_REQUEST['uid'];
        $flaged = $_REQUEST['flaged'];
        $thetime = time();
        $query = "select * from tblFavouriteRestaurant where  restourant_id='$restoursnt_id' &&  uid='$uid'";
        $check_row = $pdo->query($query);
        if ($check_row->rowCount()<=0) {
            $queries ="INSERT INTO tblFavouriteRestaurant (restourant_id,uid,flag,time) VALUES ('$restoursnt_id','$uid','$flaged','$thetime')";
            if ($a = $pdo->query($queries)){
                echo "true";
            }else{
             echo "false";
            }
        } else {
            $upquery = "UPDATE tblFavouriteRestaurant SET flag='$flaged' , time='$thetime' where restourant_id='$restoursnt_id' &&  uid='$uid'";
             if ($a = $pdo->query($upquery)) {
                 echo "update";
             }else{
                 echo "mahalo";
             }
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
        $uid = $_REQUEST['uid'];
        $likes = $Favoriteresturant->getAll();
        echo json_encode($likes);
        break;
}

