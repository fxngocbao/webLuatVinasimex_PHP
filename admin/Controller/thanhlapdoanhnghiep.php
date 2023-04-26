<?php
    $act="thanhlapdoanhnghiep";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'thanhlapdoanhnghiep':
            include "./View/thanhlapdoanhnghiep.php";
            break;
        case 'addTLDN':
            include "./View/addTLDN.php";
            break;
        case 'addTLDN_action':
            $tldn_name=$_POST['tldn_name'];
            $tldn_disc=$_POST['tldn_disc'];
            $link=$_POST['link'];
            $tldn=new thanhlapdoanhnghiep();
            $checkinsert=$tldn->insertTLDN($tldn_name,$tldn_disc,$link);
            if($checkinsert!==false){
                echo '<script>alert ("Thêm thành công !!")</script>';
                include "./View/thanhlapdoanhnghiep.php";
            }else{
                echo '<script>alert ("Thêm không thành công !!")</script>';
                include "./View/addTLDN.php";
            }
        case 'deleteTLDN':
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $tldn=new thanhlapdoanhnghiep();
                $tldn->deleteTLDN($id);
                echo '<script>alert ("Xoá thành công !!")</script>';
                include "./View/thanhlapdoanhnghiep.php";
            }
    }
?>