<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?php echo $title; ?></title>
    <?php

    use Helpers\Helper;
    ?>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="image/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="image/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="image/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="image/favicons/favicon.ico">
    <link rel="manifest" href="image/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="image/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <style>
        ::-webkit-scrollbar{
            width:0;
        }
    </style>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="src/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
    <?php
        if($title == "Explore | Smart Trips" || $title == "Info Base | Smart Trips"){
            $url = Helper::url('/src/css/explore.css');
            echo "<link href='{$url}' rel='stylesheet' />";
        }
        if($title == "Smart Planner | Smart Trips"){
            $url = Helper::url('/src/css/smart.css');
            echo "<link href='{$url}' rel='stylesheet' />";
        }
    ?>
    <style>
        .sBadge:hover{
            background-color: black;
        }
    </style>
</head>

<body>
    <nav class="bg-primary navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container"><a class="navbar-brand" href="<?php echo Helper::route('/'); ?>"><img src="image/logo.svg" height="34" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium text-white" aria-current="page" href="<?php echo Helper::route('/explore'); ?>">Explore</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium text-white" aria-current="page" href="<?php echo Helper::route('/planner'); ?>">Travel</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium text-white" aria-current="page" href="<?php echo Helper::route('/info-base'); ?>">Info Base</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium text-white" aria-current="page" href="<?php echo Helper::route('/smart-planner'); ?>">Smart Planer</a></li>
                    <?php
                    if (isset($_SESSION['user'])) {
                        $dashboard = Helper::url("/dashboard").'/'.$_SESSION['user'];
                        echo "<li class='nav-item px-3 px-xl-4'><a class='btn btn-outline-light order-1 order-lg-0 fw-medium text-white sBadge' href='{$dashboard}'>{$_SESSION['user']}</a></li>";
                    } else {
                        $login = Helper::url('/login');
                        $register = Helper::url('/register');
                        echo "<li class='nav-item px-3 px-xl-4'><a class='nav-link fw-medium text-white' aria-current='page' href='{$login}' /> Login</a></li>";
                        echo "<li class='nav-item px-3 px-xl-4'><a class='btn btn-outline-light order-1 order-lg-0 fw-medium text-white sBadge' href='{$register}'>Sign Up</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>