<?php
require_once '../../models/DATABASE.php';
class Blog extends DATABASE {
    const table = 'tblBlog';
    const key = 'bid';
    function AddBlog($info){
        return parent::add($info,self::table);
    }
    function GetBlogById($bid){
        return parent::get(self::key,$bid,self::table);
    }
    function GetAllBlog(){
        return parent::getAll(self::table);
    }
    function EditBlog($bid,$info){
        return parent::edit(self::table,self::key,$bid,$info);
    }
    function DeleteBlog($bid){
        return parent::delete(self::table,self::key,$bid);
    }
}
