<?php
require_once '../../Connection/works.php';
require_once '../../models/Blog/Blog.php';
$Blog = new Blog();

if (isset($_REQUEST['controller_type'])) {
    if (isset($_REQUEST['controller_type'])) {
        $type = $_REQUEST['controller_type'];
    }
    switch ($type) {
        case 'add':
            unset($_REQUEST['controller_type']);
            $_REQUEST = checkAll($_REQUEST);
            $_REQUEST['sdate'] = time();
            echo showResult($Blog->AddBlog($_REQUEST), 'پست وبلاگ', 'افزودن');
            break;
        case 'get':
            $bid = $_REQUEST['bid'];
            echo json_encode($Blog->GetBlogById($bid));
            break;
        case 'edit':
            unset($_REQUEST['controller_type']);
            $_REQUEST = checkAll($_REQUEST);
            echo showResult($Blog->EditBlog($_REQUEST['bid'], $_REQUEST), 'پست وبلاگ', 'ویرایش');
            break;
        case "delete":
            echo showResult($Blog->DeleteBlog($_REQUEST['bid']), 'پست وبلاگ', 'حذف');
            break;
    }
} else {
    echo json_encode($Blog->GetAllBlog());
}
