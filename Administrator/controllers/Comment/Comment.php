<?php
require_once '../../Connection/works.php';
require_once '../../models/Comment/Comment.php';
$Comments = new Comment();
if (isset($_POST['controller_type']) or isset($_GET['controller_type'])) {
    if (isset($_POST['controller_type'])) {
        $type = $_POST['controller_type'];
    }
    if (isset($_GET['controller_type'])) {
        $type = $_GET['controller_type'];
    }
    if (isset($_POST['user_id'])) {
        $user_id = $_POST['user_id'];
    }
    if (isset($_POST['blog_id'])) {
        $blog_id = $_POST['blog_id'];
    }
    if (isset($_POST['sort'])) {
        die(var_dump($_POST['sort']));
        $sort = $_POST['sort'];
    } else {

        $sort = 0;

    }
    if (isset($_POST['childoff'])) {
        $childoff = $_POST['childoff'];
    } else {
        $childoff = 0;
    }
    if (isset($_POST['content'])) {
        $content = $_POST['content'];
    }
    if (isset($_POST['active'])) {
        $active = $_POST['active'];
    }else{
        $active = 1;
    }

    unset($_POST['controller_type']);
    switch ($type) {
        case "comment":

            $timeofnow = time();
            $timeofnow = strval($timeofnow);
            if ($comment = $Comments->addcomment($user_id, $blog_id, $sort, $childoff, $content,$active,$timeofnow)) {
                echo 'true';
           }
            break;
        case "reply":
            $timeofnow = time();
            if ($comment = $Comments->addrepllay($user_id, $blog_id, $sort, $childoff, $content,$active,$timeofnow)) {
                echo 'true';
          }
            break;
    }
} else {
    echo json_encode(array());
}