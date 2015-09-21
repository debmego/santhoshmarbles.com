<?php include_once 'header.php' ?>
    <br/><br/><br/>
    <!--- Resume Starts Here --->
    <div class="resume" id="resume">
        <div class="container">
            <div class="resume-top">
                <h3>Special Offers</h3>
                <small class="line1"><span> </span></small>
            </div>
            <div class="text-center">
                <p>We get you the best deals you can ever get</p>
            </div>
        </div>
    </div>
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
            $dirname = "images/offers/";
            $images = glob($dirname . "*");
            //Display image using foreach loop
            foreach ($images as $image) {
                echo '<div class="item"><img class="lazyOwl" data-src="' . $image . '" alt="' . $image . '"></div>';
            }
            ?>
        </div>
    </div>

<?php include_once 'footer.php' ?>