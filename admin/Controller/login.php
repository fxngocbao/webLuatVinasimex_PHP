<?php
    $act="login";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'login':
            include "./View/login.php";
            break;
        case 'login_action':
            //echo "hello";
            if(isset($_POST['txtusername'])&& isset($_POST['txtpassword']))
            {
              
                $user=$_POST['txtusername'];// admin
                $pass=$_POST['txtpassword'];// 123456
                $usr=new login();
                $check=$usr->logAdmin($user,$pass);
                if($check!=false)
                {
                    // tạo ra $_sessionđể lưu thông tin ad mi khi mà đăng nhập
                    $_SESSION['admin']=$check[0];//admin
                    echo '<script>alert("Đăng nhập thành công");</script>';
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=home"/>';
                    // echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoa';
                }else{
                    echo '<script>alert("Đăng nhập không thành công");</script>';
                    include "./View/login.php";
                }
            }
            break;
            case 'dangxuat':
                if(isset($_SESSION['admin'])){
                    unset($_SESSION['admin']);
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=login"/>';
                }

    }
   
?>