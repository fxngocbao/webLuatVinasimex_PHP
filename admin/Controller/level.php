<?php
    $act="level";
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'level':
            include "./View/level.php";
            break;
        case 'addlevel':    
            include "./View/add&editlevel.php";
            break;
        case "addlevel_action":
            $level_name=$_POST['level_name'];
            $lv=new level();
            $checklevel=$lv->insertlevel($level_name);
            if($checklevel!==false){
                echo '<script>alert ("Thêm chức vụ thành công !!")</script>';
                include "./View/level.php";
            }else{
                echo '<script>alert ("Thêm chức vụ không thành công !!")</script>';
                include "./View/add&editlevel.php";
            }
            
            break;
        case "editlevel":
            include "./View/add&editlevel.php";
            break;
        case "editlevel_action":
            if(isset($_GET['id'])){
                $level_id=$_GET['id'];
                $level_name=$_POST['level_name'];
                $lv=new level();
                $checkedit=$lv->updatelevel($level_id,$level_name);
                if($checkedit){
                    echo '<script>alert ("Update chức vụ thành công !!")</script>';
                    include "./View/level.php";
                }else{
                    echo '<script>alert ("Update không chức vụ thành công !!")</script>';
                    include "./View/add&editlevel.php";
                }
            }
        case "deletelevel":
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $lv=new level();
                $lv->deletelevel($id);
                if($lv){
                    echo '<script>alert ("Xoá chức vụ thành công !!")</script>';
                    include "./View/level.php";
                }else{
                    echo '<script>alert ("Xoá chức vụ không thành công !!")</script>';
                    include "./View/level.php";
                }
            }
    }
?>