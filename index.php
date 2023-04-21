<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!--Link bootrap icon-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> -->
    <!-- end link đăng nhập -->
    <link rel="stylesheet" type="text/css" href="Content/CSS/header.css" />
    <link rel="stylesheet" type="text/css" href="Content/CSS/menu.css" />
    <title>SanPham</title>
</head>
<style>
    body {
        background-image: url('./Content/img/body-bg.jpg');
    }
    .margin{
        margin-left: 90px;
        margin-right: 90px;
    }
</style>

<body>

    <!-- header -->
    <?php
    include "View/header.php";
    ?>
    <div class="margin">
        <?php
        include "View/menu.php";
        ?>
        <!-- hiên thi noi dung -->
        <div class="container">
            <div class="row">
                <!-- hien thi noi dung đây -->
                <?php
                // $ctrl = "home";
                // if (isset($_GET["action"])) {
                //     $ctrl = $_GET["action"];
                // }
                // if (isset($_POST["act"])) {
                //     $ctrl = $_GET["act"];
                // }
                // include "Controller/" . $ctrl . ".php";
                ?>
            </div>
        </div>
        <!-- hiên thị footer -->
        <?php
            include "View/footer.php";
        ?>
    </div>
</body>

</html>