<?php include_once 'header.php' ?>
    <!--- Work Starts Here --->
    <div class="work" id="work">
        <div class="container">
            <div class="work-top">
                <br/><br/>

                <h3>Our Brands</h3>
                <small class="line1"><span> </span></small>
                <p>
                    We have provided full satisfaction in our services to these notable companies successfully and many
                    other happy clients
                </p>
            </div>
            <ul id="filters" class="clearfix">
                <li><span class="filter">/</span></li>
                <li><span class="filter" data-filter="clients">Brands</span></li>
                <li><span class="filter">/</span></li>
            </ul>
            <div id="portfoliolist">
                <?php
                $dirname = "images/brands_we_sell_to/";
                $images = glob($dirname . "*");
                //Display image using foreach loop
                foreach ($images as $image) {
                    ?>
                    <div class="portfolio clients mix_all" data-cat="clients"
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