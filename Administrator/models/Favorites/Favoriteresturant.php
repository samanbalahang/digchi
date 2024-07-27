<?php
require_once '../../models/DATABASE.php';

class Favoriteresturant extends DATABASE
{

    function AddContractors($info)
    {
        return parent::add($info, 'tblContractors');
    }

    function GetContractorsById($contractor_id)
    {
        return parent::get('contractor_id', $contractor_id, 'tblContractors');
    }

    function GetAllContractors()
    {
        return parent::getAll('tblContractors');
    }

    function getallby($uid)
    {
        return parent::getAllFiltered('tblFavouriteRestaurant', 'uid', $uid);
    }


    public function GetFoods($rest_id, $icid)
    {
        global $db;
        $result = $db->query("select * from `tblFoods` where contractor_id = '$rest_id' and category_id = '$icid'");
        $output = array();
        while ($row = $result->fetch_object()){
            array_push($output,$row);
        }
        return $output;
    }
   public function GetAllComments($rest_id = 0)
    {
        return parent::getAllFiltered('tblComments','rid',$rest_id);
    }
}
