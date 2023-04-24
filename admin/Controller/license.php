<?php
//license : giấy phép
    $act="license";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'giayphep':
            include "./View/license.php";
            break;
        case 'chitiet_giayphep':
            include "./View/license_Details.php";
            break;
        case 'addlicense':
            include "./View/addlicense.php";
            break;
        case 'addlicense_action':
            $gp_name=$_POST['gp_name'];
            $gp_disc=$_POST['gp_disc'];
            $gp_phone=$_POST['gp_phone'];
            $gp_email=$_POST['gp_email'];
            $image=$_FILES['image']['name'];
            $gp=new license();
            $checkinsert=$gp->insertlicense($gp_name,$gp_disc,$gp_phone,$gp_email,$image);
            if($checkinsert!==false){
                uploadimage();
                echo '<script>alert ("Thêm giấy phép thành công!!")</script>';
                include './View/license.php';
            }else{
                echo '<script>alert ("Thêm giấy phép không thành công!!")</script>';
                include './View/addlicense.php';
            }
            break;
        case 'editlicense':
            include "./View/editlicense.php";
            break;
        case 'editlicense_action':
            if(isset($_GET['id'])){
                $gp_id=$_GET['id'];
                $gp_name=$_POST['gp_name'];
                $gp_disc=$_POST['gp_disc'];
                $gp_phone=$_POST['gp_phone'];
                $gp_email=$_POST['gp_email'];
                $image=$_FILES['image']['name'];
                $gp=new license();
                $checkedit=$gp->updatelicense($gp_id,$gp_name,$gp_disc,$gp_phone,$gp_email,$image);
                if($checkedit!==false){
                    uploadimage();
                    echo '<script>alert ("Cập nhật thành công !!")</script>';
                    include "./View/license.php";
                }
                else{
                    echo '<script>alert ("Cập nhật không thành công !!")</script>';
                    include "./View/editlicense.php";
                }
            }
            break;
        case 'deletelicense':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $gp=new license();
                $gp->deletelicense($id);
                echo '<script>alert ("Xóa thành công!!")</script>';
                include './View/license.php';
            }
            break;
    }
?>