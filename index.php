<?php
    session_start();
    require_once './script/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?=$config['app']['description']?>">
    <meta name="author" content="Samkelwe Attwel Wakeni">
    <link rel="shortcut icon" href="<?=$config['img']['logo']?>icon.png">

    <!-- Vendor styles(Bootstrap 5, Bootstrap icons, Fontawesome 6   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fontawesome-free-6.2.1@6.2.1/css/all.min.css">
    <link rel="stylesheet" href="<?=$config['flp']['css']?>main.css">


    <!-- Scripts(Jquery, Bootstrap Bundle)  -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id="main-app">
    <div class="container-fluid p-0 m-0">
        <div class="container-fluid p-0 m-0">
            <?php if(isset($_SESSION['user'])){
            if($_SESSION['user']['logged'] > 0){?>

            <div class="row">
                <div class="sidebar col-md-3 col-sm-4 p-0" id="sidebar">
                    <?php require_once 'layout/app/sidebar.php'?>
                </div>
                <div class="content col-md-9 col-sm-8 p-0" id="content">
                    <?php require_once 'admin.php'?>
                </div>
            </div>

            <?php
            }else{
                    include_once 'welcome.php';
            }
        }
           else{
               include_once 'auth.php';
           }
        ?>
        </div>

        <footer class="mt-auto text-center pt-3">
            <p>
                <?=$config['app']['full'] ?> &copy;<?= date('Y')?>
            </p>
        </footer>


        <script src="<?=$config['flp']['js']?>/main.js"></script>
        <script src="<?=$config['flp']['js']?>/auth.js"></script>
</body>

</html>