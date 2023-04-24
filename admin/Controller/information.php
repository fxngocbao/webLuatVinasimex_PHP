<?php
    $act="information";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'information':
            include "./View/information.php";
            break;
        case 'information_detail':
            include "./View/information_detail.php";
            break;
        case 'addIn4':
            include "./View/add&editIn4.php";
            break;
        case 'addIn4_action':
            $in4_name=$_POST['in4_name'];
            $level_name=$_POST['level_name'];
            $in4_phone=$_POST['in4_phone'];
            $in4_email=$_POST['in4_email'];
            $skype=$_POST['skype'];
            $image=$_FILES['image']['name'];
            $in4=new information();
            $checkinsert=$in4->insertIn4($in4_name,$level_name,$in4_phone,$in4_email,$skype,$image);
            if($checkinsert!==false){
                uploadimage();
                echo '<script>alert ("Thêm thành công!!")</script>';
                include './View/information.php';
            }else{
                echo '<script>alert ("Thêm không thành công!!")</script>';
                include './View/add&editIn4.php';
            }
            break;
        case "deleteIn4":
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $in4=new information();
                $in4->deleteIn4($id);
                echo '<script>alert ("Xóa thành công!!")</script>';
                include './View/information.php';
            }
            break;
    }
?>