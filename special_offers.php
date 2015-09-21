<?php include_once 'header.php' ?>
    <br/><br/><br/>
    <!--- Resume Starts Here --->
    <div class="resume" id="resume">
        <div class="container">
            <div class="resume-top">
                <h3>Special Offers</h3>
                <small class="line1"><span> </span></small>
            </div>
            <div class="resume-bot" style="text-align: center">
                <p>We get you the best deals you can ever get</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="arrivals row">
            <?php
            $dirname = "images/new_arrivals/";
            $images = glob($dirname . "*");
            //Display image using foreach loop
            foreach ($images as $image) {
                echo '<div class="col-sm-6 col-xs-12"><img style="width:100%" class="zoomable" src="' . $image . '" alt="' . $image . '"></div>';
            }
            ?>

        </div>
    </div>

<?php include_once 'footer.php' ?>