<?php
    $act="doanhnghiep";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'doanhnghiep':
            include "./View/doanhnghiep.php";
            break;
        case 'addDoanhnghiep':
            include "./View/addDoanhnghiep.php";
            break;
        case 'ChitietTVDN':
            include "./View/doanhnghiep_detail.php";
            break;
        case 'addDoanhnghiep_action':
            $dn_name=$_POST['dn_name'];
            $dn_disc=$_POST['dn_disc'];
            $dn_phone=$_POST['dn_phone'];
            $dn_email=$_POST['dn_email'];
            $image=$_FILES['image']['name'];
            $link=$_POST['link'];
            $dn=new doanhnghiep();
            $checkinsert=$dn->insertDN($dn_name,$dn_disc,$dn_phone,$dn_email,$image,$link);
            if($checkinsert!==false){
                uploadimage();
                echo '<script>alert ("Thêm thành công!!")</script>';
                include './View/doanhnghiep.php';
            }else{
                echo '<script>alert ("Thêm không thành công!!")</script>';
                include './View/addDoanhnghiep.php';
            }
        break;
        case 'deleteDoanhnghiep':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $dn=new doanhnghiep();
                $dn->deleteDn($id);
                echo '<script>alert ("Xoá thành công!!")</script>';
                include './View/doanhnghiep.php';
            }
            break;
    }
?>