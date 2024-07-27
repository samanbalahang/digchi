<?php
require_once '../../models/DATABASE.php';
require_once '../../models/nosoup.php';

class Comment extends DATABASE
{
    const table = 'tblComment';
    const key = 'comment_id';

    function addcomment($user_id, $blog_id, $sort,$childoff,$content,$active,$timeofnow)
    {
        $x = "" . $user_id ." * ". $blog_id  ." * ".  $sort  ." * ".  $childoff  ." * ".  $content  ." * ". $active;
        $x = strval($x);
        global $db;
        $query = "INSERT INTO tblComment 
        (user_id   ,   blog_id  ,   sort  ,  childoff ,  content  , active ,  time)  VALUES     
        ('$user_id', '$blog_id'  , '$sort','$childoff', '$content','$active','$timeofnow')";
        if ($db->query($query) ===TRUE){
           echo 'true';
        }else{
            echo "Error: " . $query . "<br>" . $db->error;
        }
    }

    function addrepllay($user_id, $blog_id, $sort,$childoff,$content,$active)
    {
        global $db;

        $query = "INSERT INTO tblComment 
        (user_id   ,   blog_id  ,   sort  ,  childoff ,  content  , active ,  time)  VALUES     
        ('$user_id', '$blog_id'  , '$sort','$childoff', '$content','$active','$timeofnow')";
            if ($db->query($query) ===TRUE){
                echo 'true';
            }else{
                echo "Error: " . $query . "<br>" . $db->error;
            }
    }
}