<?php

/** @var \yii\web\View $this */
/** @var string $content */

use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="bidding, fiverr, freelance marketplace, freelancers, freelancing, gigs, hiring, job board, job portal, job posting, jobs marketplace, peopleperhour, proposals, sell services, upwork">
<meta name="description" content="Freeio - Freelance Marketplace HTML Template">
<meta name="CreativeLayers" content="ATFN">
<?php $this->registerCsrfMetaTags() ?>
<!-- Title -->
<title>Freeio - Freelance Marketplace HTML Template</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
<!-- Apple Touch Icon -->
<link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
<link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
<link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">
<?php $this->head() ?>
</head>
<body class="mx-auto">
<?php $this->beginBody() ?>
<div class="wrapper ovh">
    <div class="preloader"></div>
    
    <!-- Main Header Nav -->
    <header class="header-nav nav-innerpage-style stricky main-menu at-home3 bdrb1">
        <!-- Ace Responsive Menu -->
        <nav class="posr"> 
        <div class="container posr menu_bdrt1">
            <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <div class="d-flex align-items-center justify-content-between">
                <div class="logos mr20">
                    <a class="header-logo logo2" href="index.html"><img src="<?= Yii::getAlias('@web') ?>/images/header-logo3.svg" alt="Header Logo" style="height: 24px"></a>
                </div>
                <!-- Responsive Menu Structure-->
                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                    <li> <a class="list-item" href="#">Bosh sahifa</a></li>
                    <li> <a class="list-item" href="#">Yo'nalishlar</a></li>
                    <li> <a class="list-item" href="#">Aloqa</a></li>
                </ul>
                </div>
            </div>
            <div class="col-auto">
                <div class="d-flex align-items-center">
                <a class="login-info mr15-lg mr30" href="page-login.html">Ro'yxatdan o'tish</a>
                <a class="ud-btn btn-home3 add-joining" href="#">Xizmatni taklif qilish</a>
                </div>
            </div>
            </div>
        </div>
        </nav>
    </header>

    <!-- Mobile Nav  -->
    <div class="body_content">
        <section class="categories_list_section overflow-hidden bgc-thm5">
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
                    <div class="listings_category_nav_list_menu">
                    <ul class="mb0 d-flex ps-0">
                        <li><a href="#">Barcha yo‘nalishlar</a></li>
                        <li><a href="#">Dasturlash</a></li>
                        <li><a href="#">Raqamli marketing</a></li>
                        <li><a href="#">Grafik va dizayn</a></li>
                        <li><a href="#">Video va animatsiyalar</a></li>
                        <li><a href="#">Tarjima va matnlar</a></li>
                        <li><a href="#">Xorijiy tillar</a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <?= $content ?>
    </div>
</div>
<!-- Wrapper End --> 
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();