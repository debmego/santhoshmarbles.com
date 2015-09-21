<?php include_once 'header.php' ?>
    <!--- Work Starts Here --->
    <div class="work" id="work">
        <div class="container">
            <div class="work-top">
                <br/><br/>

                <h3>Product Gallery</h3>
                <small class="line1"><span> </span></small>
                <p>
                    At Santhosh Marbles we provide you with the widest range of product for all your home decor needs !
                </p>
            </div>
            <ul id="filters" class="clearfix">
                <li><span class="filter"
                          data-filter="cp_fittings appliances accessories led marbles sanitary tiles">All</span>
                </li>

                <li><span class="filter" data-filter="cp_fittings">CP Fittings</span></li>

                <li><span class="filter" data-filter="appliances">Home Appliances</span></li>

                <li><span class="filter" data-filter="accessories">Interior Accessories</span></li>

                <li><span class="filter" data-filter="led">LED Lighting</span></li>

                <li><span class="filter" data-filter="marbles">Marbles</span></li>

                <li><span class="filter" data-filter="sanitary">Sanitary Wares</span></li>

                <li><span class="filter active" data-filter="tiles">Tiles</span></li>
                <li><span class="filter active" data-filter="woods_doors">Wood & Doors</span></li>
            </ul>
            <div id="portfoliolist">
                <?php
                $dirname = "images/cp_fittings/";
                $images = glob($dirname . "*");
                //Display image using foreach loop
                foreach ($images as $image) {
                    ?>
                    <div class="portfolio cp_fittings mix_all" data-cat="cp_fittings"
                         style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <img class="zoomable" src="<?php echo $image; ?>"/>
                        </div>
                    </div>
                <?php
                }
                $dirname = "images/home_appliances/";
                $images = glob($dirname . "*");
                //Display image using foreach loop
                foreach ($images as $image) {
                    ?>
                    <div class="portfolio appliances mix_all" data-cat="appliances"
                         style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <img class="zoomable" src="<?php echo $image; ?>"/>
                        </div>
                    </div>
                <?php
                }
                $dirname = "images/interior_acceceries/";
                $images = glob($dirname . "*");
                //Display image using foreach loop
                foreach ($images as $image) {
                    ?>
                    <div class="portfolio accessories mix_all" data-cat="accessories"
                         style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <img class="zoomable" src="<?php echo $image; ?>"/>
                        </div>
                    </div>
                <?php
                }
                $dirname = "images/led_lighting/";
                $images = glob($dirname . "*");
                //Display image using foreach loop
                foreach ($images as $image) {
                    ?>
                    <div class="portfolio led mix_all" data-cat="led"
                         style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <img class="zoomable" src="<?php echo $image; ?>"/>
                        </div>
                    </div>
                <?php
                }
                $dirname = "images/marbles/";
                $images = glob($dirname . "*");
                //Display image using foreach loop
                foreach ($images as $image) {
                    ?>
                    <div class="portfolio marbles mix_all" data-cat="marbles"
                         style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <img class="zoomable" src="<?php echo $image; ?>"/>
                        </div>
                    </div>
                <?php
                }
                $dirname = "images/sanitary_wares/";
                $images = glob($dirname . "*");
                //Display image using foreach loop
                foreach ($images as $image) {
                    ?>
                    <div class="portfolio sanitary mix_all" data-cat="sanitary"
                         style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <img class="zoomable" src="<?php echo $image; ?>"/>
                        </div>
                    </div>
                <?php
                }
                $dirname = "images/tiles/";
                $images = glob($dirname . "*");
                //Display image using foreach loop
                foreach ($images as $image) {
                    ?>
                    <div class="portfolio tiles mix_all" data-cat="tiles"
                         style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <img class="zoomable" src="<?php echo $image; ?>"/>
                        </div>
                    </div>
                <?php
                }
                $dirname = "images/woods_doors/";
                $images = glob($dirname . "*");
                //Display image using foreach loop
                foreach ($images as $image) {
                    ?>
                    <div class="portfolio woods_doors mix_all" data-cat="woods_doors"
                         style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <img class="zoomable" src="<?php echo $image; ?>"/>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="clearfix"></div>
            </div>
            <!---- Script for gallery Here --->
            <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
            <script type="text/javascript">
                $(function () {

                    var filterList = {

                        init: function () {

                            // MixItUp plugin
                            // http://mixitup.io
                            $('#portfoliolist').mixitup({
                                targetSelector: '.portfolio',
                                filterSelector: '.filter',
                                effects: ['fade'],
                                easing: 'snap',
                                // call the hover effect
                                onMixEnd: filterList.hoverEffect()
                            });

                        },

                        hoverEffect: function () {

                            // Simple parallax effect
                            $('#portfoliolist .portfolio').hover(
                                function () {
                                    $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                    $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                                },
                                function () {
                                    $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                    $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                                }
                            );

                        }

                    };

                    // Run the show!
                    filterList.init();


                });
            </script>
            <!--- Gallery Script Ends --->

        </div>
    </div>
    <!--- Work Ends Here --->
<?php include_once 'footer.php' ?>