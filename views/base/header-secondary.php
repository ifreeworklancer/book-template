<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link rel="stylesheet" href="../dist/app.css">
</head>

<body>

<!-- Svg -->
<?php include(__DIR__ . '/../modules/svgs.php'); ?>

<!-- App-header -->
<header id="app-header">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <a href="/" class="logo">
                    <img src="../../images/icons/logo.svg" alt="logo">
                </a>
            </div>
            <div class="col-auto d-flex align-items-center">
                <nav class="site-nav d-none d-lg-block mr-4">
                    <ul class="site-nav-list">
                        <li>
                            <a href="/#about">
                                про книгу
                            </a>
                        </li>
                        <li>
                            <a href="/#author">
                                автор
                            </a>
                        </li>
                        <li>
                            <a href="/#reviews">
                                рецензії
                            </a>
                        </li>
                        <li>
                            <a href="/#book">
                                #bestread
                            </a>
                        </li>
                    </ul>
                </nav>
                <a href="." class="btn btn-outline-primary d-none d-lg-inline-flex">
                    На головну
                </a>
                <div class="burger-menu d-lg-none">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <div>
            <nav class="site-nav">
                <ul class="site-nav-list">
                    <li>
                        <a href="/#about">
                            про книгу
                        </a>
                    </li>
                    <li>
                        <a href="/#author">
                            автор
                        </a>
                    </li>
                    <li>
                        <a href="/#reviews">
                            рецензії
                        </a>
                    </li>
                    <li>
                        <a href="/#book">
                            #bestread
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="/" class="btn btn-outline-primary">
                На головну
            </a>
        </div>
    </div>
</header>


<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>
