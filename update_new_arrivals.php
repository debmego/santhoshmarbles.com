<?php
$username = 'adminzz';
$password = 'adminzz';
date_default_timezone_set('Asia/Kolkata');

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
    ($_SERVER['PHP_AUTH_USER'] != $username)
) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="Only for Santhosh Marbles"');
    exit('<h2>DebMeGo.in</h2>Sorry, you must enter a valid user name and password to access this page.');
}

$location = '';
if (isset($_POST['submit'])) {
    $uploadfile = 'images/new_arrivals/' . basename($_FILES['g_image']['name']);
    echo '<pre>';
    if (move_uploaded_file($_FILES['g_image']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";
    } else {
        echo "Possible error or file upload attack!\n";
    }
    print "</pre>";
}
if (isset($_GET['u']) && !empty($_GET['u'])) {
    unlink($_GET['u']);
    header('Location: update_new_arrivals.php');
}

include_once('header.php');
?>
<style>
    img {
        cursor: not-allowed;
    }
</style>
<br/><br/><br/><br/>
<div id="overlay-outer"></div>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1 alert-info">
        <form action="" method="post" enctype="multipart/form-data">
            <br>

            <div class="col-sm-6">
                <div class="">
                    <input class="input-lg" placeholder="select the image" name="g_image" type="file">
                </div>
            </div>
            <div class="col-sm-6 ">
                <div class="btn-block">
                    <input class="input-lg btn btn-block btn-danger" value="submit" name="submit" type="submit">
                </div>
            </div>
            <br>
            <br>
        </form>
    </div>
</div>
<br>

<div class="container">
    <div class="alert-info row">
        <div id="gallery" class="row">
            <?php
            $dirname = "images/new_arrivals/";
            $images = glob($dirname . "*");
            //Display image using foreach loop
            foreach ($images as $image) {
                echo '<div class="col-sm-4 col-xs-10 col-xs-offset-1 col-md-3">
                    <a class="image frame gallery-item" href="?u=' . $image . '" >
                    <span class="rollover"></span>
                    <span class="zoom"></span>
                    <img style="height:200px; width:100%" alt="" src="' . $image . '"/></a>
                </div>';
            }
            ?>
        </div>
    </div>
</div>
<style>
    #gallery img {
        border: 3px solid #47a9f2;
        opacity: .9;
        margin: 10px 0px;
    }

    #gallery img:hover {
        border: 3px solid #6db6f2;
        opacity: 1;
    }
</style>

