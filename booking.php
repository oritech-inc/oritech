<?php
    session_start();
    require_once './script/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once './head.php'?>
    <title>Booking | <?=$config['app']['full']?></title>
    <style>
        #main-bookings{
            padding-top:70px;
            background: rgb(85, 122, 114);
            background: linear-gradient(900deg, rgba(85, 122, 114, 0.97) 0%, rgba(85, 122, 114, 0.97) 55%, rgba(255, 255, 255, 0.9) 100%);
        }
    </style>
</head>

<body>
    <header>
        <?php require_once './layout/app/nav.php';?>
    </header>
    <main class="container-fluid" id="main-bookings">
        <div class="row text-center">
            <div class="col-3">
                <div class="card">
                    <img src="<?=$config['img']['book']?>service/repairs.svg" class="card-img-top" alt="repair-icon">
                    <div class="card-footer">
                        REPAIRS
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?=$config['img']['book']?>service/graphics.svg" class="card-img-top" alt="design-icon">
                    <div class="card-footer">
                        GRAPHICS DESIGN
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?=$config['img']['book']?>service/content.svg" class="card-img-top" alt="write-icon">
                    <div class="card-footer">
                        CONTENT WRITING
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img src="<?=$config['img']['book']?>service/web.svg" class="card-img-top" alt="web-icon">
                    <div class="card-footer">
                        WEB DEVELOPMENT
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card">
                    <img src="<?=$config['img']['book']?>service/market.svg" class="card-img-top" alt="market-icon">
                    <div class="card-footer">
                        DIGITAL MARKETING
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card">
                    <img src="<?=$config['img']['book']?>service/print.svg" class="card-img-top" alt="market-icon">
                    <div class="card-footer">
                        PRINTING
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card">
                    <img src="<?=$config['img']['book']?>service/internet.svg" class="card-img-top" alt="market-icon">
                    <div class="card-footer">
                        INTERNET
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card">
                    <img src="<?=$config['img']['book']?>service/consult.svg" class="card-img-top" alt="market-icon">
                    <div class="card-footer">
                        CONSULTATION
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="mt-auto text-center pt-3">
        <p>
            <?=$config['app']['full'] ?> &copy;<?= date('Y')?>
        </p>
    </footer>


    <script src="<?=$config['flp']['js']?>/main.js"></script>
</body>

</html>