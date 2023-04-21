<?php
// include "Model/connect.php";
// include "Model/hanghoa.php";
// include "Model/loaisanpham.php";
session_start();
// include './Model/uploadimage.php';
set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
spl_autoload_extensions('.php');
spl_autoload_register();
?>  
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <!-- Site Icons -->
    <link rel="shortcut icon" href="Content/images/logopl.jpg" type="image/x-icon">
    <!-- <link rel="apple-touch-icon" href="Content/images/apple-touch-icon.png"> -->
    <link rel="stylesheet" type="text/css" href="Content/css/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="Content/css/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="Content/css/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="Content/css/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="Content/css/nav.css" media="screen" />
    <link href="Content/css/table/demo_page.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN: load jquery -->
    <script src="Content/js/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="Content/js/jquery-ui/jquery.ui.core.min.js"></script>
    <script src="Content/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
    <script src="Content/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
    <script src="Content/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
    <script src="Content/js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src="Content/js/jquery-ui/jquery.ui.mouse.min.js" type="text/javascript"></script>
    <script src="Content/js/jquery-ui/jquery.ui.sortable.min.js" type="text/javascript"></script>
    <script src="Content/js/table/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- END: load jquery -->
    <script type="text/javascript" src="Content/js/table/table.js"></script>
    <script src="Content/js/setup.js" type="text/javascript"></script>
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>

    <title>BLUSZA ADMIN</title>
    

</head>

<body>
<!-- Thanh header tao menu -->
<?php
        if(isset($_SESSION['admin']))
        {
            include "View/header.php";
            include "View/sidebar.php";
        }
            
        ?>
        <!-- end hinh dong -->
        <!-- phan thân -->
        <div class="container">
        <div class="row">
        <?php
             //load controler
            $ctrl="login";
            if(isset($_GET['action']))
                $ctrl=$_GET['action'];
            include 'Controller/'.$ctrl.'.php';
            // include 'Controller/'.$ctrl.'.php';

        //end controller
            
        ?>
        </div>
        <!-- end menu right -->
    </div>
    <!-- footer -->
    <?php
    if(isset($_SESSION['admin']))
    {
        include "View/footer.php";
    }
        
    ?>
    <!-- end footer -->
   
</body>

</html>