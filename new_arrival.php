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
    <div class="container">
        <div class="arrivals row">
            <?php
            $dirname = "images/new_arrivals/";
            $images = glob($dirname . "*");
            //Display image using foreach loop
            foreach ($images as $image) {
                echo '<div class="col-sm-4 col-xs-12"><img style="width:100%" class="zoomable" src="' . $image . '" alt="' . $image . '"></div>';
            }
            ?>

        </div>
    </div>



<?php include_once 'footer.php' ?>