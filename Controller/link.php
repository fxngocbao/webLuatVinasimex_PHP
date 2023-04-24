<?php
    $act="link";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'dautu':
            include "./View/dautu_trangchu.php";
        break;
        case 'doanhnghiep':
            include "./View/doanhnghiep_trangchu.php";
        break;
        case 'gioithieu':
            include "./View/gioithieu_trangchu.php";
            break;
    }
?>