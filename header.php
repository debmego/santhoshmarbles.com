<?php
error_reporting(E_ALL);
?>
<!DOCTYPE HTML>
<html>
<head>

    <title>Santhosh Marbles | The Best Marble Stone supplier in South India</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=.7, maximum-scale=1">
    <link rel="icon" href="images/sm_logo.png">


    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=.7">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- Google Fonts --->
    <link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <style>
        #overlay {
            background: rgba(15, 8, 0, .90);
            height: 100%;
            position: fixed;
            top: 0px;
            width: 100%;
            z-index: 999999;
            cursor: crosshair;
            text-align: center;
            -webkit-transition:(all, 2s);
        }

        #overlay img {
            padding: 4px;
            background: linear-gradient(to right, #000, #47a9f2, #fff, #47a9f2, #000);
            max-height: 90%;
            min-width: 50%;
            min-width: 400px;
            max-width: 90%;
        }

        img.zoomable {
            cursor: move !important;
        }
    </style>

    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
</head>
<body id="top">
<div id="overlay-outer"></div>
<!-- Header Starts Here -->
<div class="main-header">
    <div class="header" id="profile">
        <div class="container-fluid">
            <div class="header-top">
                <div class="logo" style="float: left">

                    <h2 class="Audiowide text-white">
                        <a href="index.php"><img src="images/sm_logo.png" alt="" height="50px"/></a>
                        Santhosh Marbles
                    </h2>
                </div>
                <span class="menu"></span>
                <ul class="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about_us.php">About us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="product_matrix.php">Product Matrix</a></li>
                            <li><a href="product_gallery.php">Product Gallery</a></li>
                        </ul>
                    </li>
                    <li class="new"><a href="special_offers.php">Special Offers</a></li>
                    <li><a href="new_arrival.php">New Arrivals</a></li>
                    <li><a href="brands.php">Our Brands</a></li>
                    <li><a href="contact_us.php">Contact us</a></li>

                </ul>
                <script>
                    $("span.menu").click(function () {
                        $(".header-top ul.nav").slideToggle("slow", function () {
                            // Animation complete.
                        });
                    });
                </script>
            </div>
        </div>
    </div>
    <!-- Header Ends Here -->
</div>