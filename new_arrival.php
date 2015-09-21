<?php include_once 'header.php' ?>
    <br/><br/><br/>
    <!--- Resume Starts Here --->
    <div class="resume" id="resume">
        <div class="container">
            <div class="resume-top">
                <h3>The Latest Arrivals</h3>
                <small class="line1"><span> </span></small>
            </div>
            <div class="resume-bot">
                <p>These are the latest products in the market and we are here to provide you with the best offers on
                    them</p>
            </div>
        </div>
    </div>
    <!--- Resume Ends Here --->
    <br/><br/><br/><br/>
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
            $dirname = "images/new_arrivals/";
            $images = glob($dirname . "*");
            //Display image using foreach loop
            foreach ($images as $image) {
                echo '<div class="item"><img class="lazyOwl zoomable" data-src="' . $image . '" alt="' . $image . '"></div>';
            }
            ?>
        </div>
    </div>

<?php include_once 'footer.php' ?>