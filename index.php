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
    <!-- <link rel="stylesheet" href="<?=$config['flp']['css']?>main.css"> -->
    <link rel="stylesheet" href="<?=$config['flp']['css']?>app.css">


    <!-- Scripts(Jquery, Bootstrap Bundle)  -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header>
        <?php require_once './layout/app/nav.php';?>
    </header>
    <main class="container-fluid p-0 m-0" id="main-app">
        <?php
            include_once 'home.php';
            include_once 'auth.php';
        ?>
    </main>

    <footer class="mt-auto text-center pt-3">
        <p>
            <?=$config['app']['full'] ?> &copy;<?= date('Y')?>
        </p>
    </footer>


    <script src="<?=$config['flp']['js']?>/main.js"></script>
    <script src="<?=$config['flp']['js']?>/auth.js"></script>
</body>

</html>