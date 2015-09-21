<?php include_once 'header.php' ?>
<section class="block">
    <div id="myCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="active item">
                <img src="images/Home%20Page%20(2).jpg" alt="Slide1"/>

                <div class="carousel-caption">
                    <div class="banner-top">
                        <div class="logo">
                            <a href="index.php"><img src="images/sm_logo.png" alt=""
                                                     style="height: 100px;width: 100px;"/></a>

                            <h2 class="Audiowide text-white">Santhosh Marbles</h2>
                            <span class="line"></span>
                        </div>
                        <p>Tiles are a modern concept, and have for last 22 years become a popular form of floor and
                            wall

                            decor. Santhosh Marbles are authorized dealers of exhaustive range of high quality brands.
                            Our

                            company was initially engaged in the business when we came into existence in the year
                            1993.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/Home%20Page%20(5).jpg" alt="Slide2"/>

                <div class="carousel-caption">
                    <div class="banner-top">
                        <div class="logo">
                            <a href="index.php"><img src="images/sm_logo.png" alt=""
                                                     style="height: 100px;width: 100px;"/></a>

                            <h2 class="Audiowide text-white">Santhosh Marbles</h2>
                            <span class="line"></span>
                        </div>
                        <p>Tiles are a modern concept, and have for last 22 years become a popular form of floor and
                            wall

                            decor. Santhosh Marbles are authorized dealers of exhaustive range of high quality brands.
                            Our

                            company was initially engaged in the business when we came into existence in the year
                            1993.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/Home%20Page%20(7).jpg" alt="Slide3"/>

                <div class="carousel-caption">
                    <div class="banner-top">
                        <div class="logo">
                            <a href="index.php"><img src="images/sm_logo.png" alt=""
                                                     style="height: 100px;width: 100px;"/></a>

                            <h2 class="Audiowide text-white">Santhosh Marbles</h2>
                            <span class="line"></span>
                        </div>
                        <p>Tiles are a modern concept, and have for last 22 years become a popular form of floor and
                            wall

                            decor. Santhosh Marbles are authorized dealers of exhaustive range of high quality brands.
                            Our

                            company was initially engaged in the business when we came into existence in the year
                            1993.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>

    </div>
</section>

<!--- simple something -->
<div class="container" style="margin-top: 20px">
    <div id="DIV_3">
        <h1 class="Audiowide">
            WELCOME TO SANTHOSH MARBLES
        </h1>
    </div>
    <div class="row">
        <div class="index">
            <div class="col-sm-4">
                <span class=" glyphicon glyphicon-th-list
            "></span>
                <h4 id="H4_9">
                    Wide Range of Products
                </h4>

                <p id="P_10">
                    We provide all kinds of decords, tiles, marbles and more...
                </p>

                <p id="P_11">
                    <a href="product_matrix.php" id="A_12">
                        <button id="BUTTON_13">
                            Know more
                        </button>
                    </a>
                </p>
            </div>
            <div class="col-sm-4">
                <span class=" glyphicon glyphicon-check
        "></span>
                <h4 id="H4_16">
                    Best Quality
                </h4>

                <p id="P_17">
                    Get the best at the cheapest cost, a real value for money offer...
                </p>

                <p id="P_18">
                    <a href="product_gallery.php" id="A_19">
                        <button id="BUTTON_20">
                            Know more
                        </button>
                    </a>
                </p>
            </div>
            <div class="col-sm-4">
                <span class=" glyphicon glyphicon-time"></span>
                <h4 id="H4_23">
                    Always ready to serve
                </h4>

                <p id="P_24">
                    We provide the best customer satisfaction, you can easily reach us any time and get what you need...
                </p>

                <p id="P_25">
                    <a href="contact_us.php" id="A_26">
                        <button id="BUTTON_27">
                            Know more
                        </button>
                    </a>
                </p>
            </div>
            <div class="clearfix"></div>
            <br/><br/><br/>
            <!--- Resume Ends Here --->
            <div>
                <link href="css/owl.carousel.css" rel="stylesheet">
                <link href="css/owl.theme.css" rel="stylesheet">
                <script type="text/javascript">
                    $(document).ready(function () {

                        $("#owl-demo").owlCarousel({
                            items: 4, autoPlay: 3000,
                            lazyLoad: true,
                            navigation: true
                        });

                    });
                </script>
                <script src="js/owl.carousel.js"></script>
                <div id="owl-demo" class="owl-carousel">
                    <?php
                    $dirname = "images/home_page/";
                    $images = glob($dirname . "*");
                    //Display image using foreach loop
                    foreach ($images as $image) {
                        echo '<div class="item"><img class="lazyOwl" data-src="' . $image . '" alt="' . $image . '"></div>';
                    }
                    ?>
                </div>
            </div>
            <br/><br/><br/>
        </div>
    </div>
</div>
<?php include_once 'footer.php' ?>
<script>
    setInterval(function () {
        $('.carousel-control.right').click();
    }, 5000)
</script>
