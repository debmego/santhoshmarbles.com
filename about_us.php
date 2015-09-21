<?php include_once 'header.php' ?>
    <br/><br/><br/>

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

            })
            ;
        </script>
        <script src="js/owl.carousel.js"></script>
        <div id="owl-demo" class="owl-carousel">
            <?php
            $dirname = "images/home_page/";
            $images = glob($dirname . "*");
            //Display image using foreach loop
            foreach ($images as $image) {
                echo '<div class="item"><img class="lazyOwl zoomable" data-src="' . $image . '" alt="' . $image . '"></div>';
            }
            ?>
        </div>
    </div>
    <!--- Resume Starts Here --->
    <div class="resume" id="resume">
        <div class="container">
            <div class="resume-top">
                <h3>About us</h3>
                <small class="line1"><span> </span></small>
            </div>
            <div class="resume-bot">
                <p>Tiles are a modern concept, and have for last 10 years become a popular form of floor and wall
                    decor. Santhosh Marbles are authorized dealers of exhaustive range of high quality brands. Our
                    company was initially engaged in the business when we came into existence in the year 1993.</p>

                <p>Right from the beginning the emphasis has been regarding best quality standards that would match
                    international standards. Over the years, we have progressed by leaps and bounds. Santhosh
                    Marble’s retail showroom is currently located in Tirupur.</p>

                <p>Santhosh Marbles went into expansion mode again during 2008-09 to create a 10000 sq. ft. display
                    showroom at P.N Road, Tirupur, and empowering customers to see, feel, compare & choose products
                    to their utmost satisfaction.</p>

                <p>Our showroom caters to provide high-end customers and offers branded tiles only. We are
                    authorized dealers for City Tiles, Sonata, Regent, Orient Bell and IMPORTED TILES AND INTERIOR
                    DECORATIV ACCESSORIES, were among the many brands that were showcased.</p>

                <p>Our product range includes Marbles,Cuddapah,Tandoor StNINE,Kota StNINE, Ceramic Tiles, Wall
                    Tiles, Floor Tiles, Clay Tiles, Vitrified Tiles, Granites and CP Fittings, Home and Kitchen
                    Appliance, LED Lights, We offer suggestions for laying Wall Tiles, Clay Tiles, Marbles and
                    Granites to our clientele. Santhosh Marbles provides each tile as a unique item and a work of
                    art in itself, which is immensely pleasing to the eyes. Hotels, restaurants, buildings,
                    educational institutions, subways, swimming pools, etc., are the places, where our tiles are
                    extensively used.</p> 
                <p>We have dedicated ourselves to long term growth and will practice highest standards in marketing
                    and supplying products for our people. Apart from local markets we should become an
                    international player and with the existing high standards of quality, we should have a good
                    market share of the global market.</p>

                <p>We undertaken Huge Quantity orders for imported furniture,Carpets,Wallpapers,Doors,Plywoods and
                    led decorative lights for hotels,schools,malls,apartments ect…</p>
            </div>
        </div>
    </div>
    <!--- Resume Ends Here --->

<?php include_once 'footer.php' ?>