<?php
require_once '../../models/DATABASE.php';
class Restuarantcomment extends DATABASE
{
    const table = 'tblCommentRestourants';
    const key = 'commentrestourant_id';

    function addcomment($info){
        return parent::add($info,self::table);
    }
    function addcomments($rec){
        return $rec;
    }
}