<?php
require_once '../../Connection/works.php';
require_once '../../models/Comment/restuarantcomment.php';
$Restuarantcomment = new Restuarantcomment();
if (isset($_POST['controller_type']) or isset($_GET['controller_type'])) {

    if (isset($_POST['controller_type'])) {
        $type = $_POST['controller_type'];

    }
    if (isset($_GET['controller_type'])) {
        $type = $_GET['controller_type'];
    }
    if (isset($_POST['uid'])) {
        $user_id = $_POST['uid'];
    }
    if (isset($_POST['restoursnt_id'])) {
        $restoursnt_id = $_POST['restoursnt_id'];
    }
    if (isset($_POST['isactive'])){
        $active = $_POST['active'];
    }else{
        $active = 1;
    }
    if (isset($_POST['comment'])) {
       $comment = $_POST['comment'];
    }
    $_REQUEST['time']=time();
    unset($_POST['controller_type']);
    unset($_REQUEST['controller_type']);
    switch ($type) {
        case "add":
            $timeofnow = time();
            $timeofnow = strval($timeofnow);

            if ($comment = $Restuarantcomment->addcomment($_REQUEST)) {
                echo 'true';
            }else{
                echo 'false';
            }
            break;
    }
} else {
    echo  'falseer';
}