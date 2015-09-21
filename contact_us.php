<?php

if (isset($_POST['message']) && !empty($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = "SANTHOSH MARBLES -- Thank you for your feedback";
    $headers = "From: " . strip_tags("info@santhoshmarbles.com") . "\r\n";
    $headers .= "Reply-To: " . strip_tags("info@santhoshmarbles.com") . "\r\n";
    $headers .= "CC: anand@santhoshmarbles.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $to = $email;
    $msg = '<h3 style="text-align:center">Thank you for your feedback</h3>'
        . '<br>'
        . '<div>Mr/Ms ' . $name . ' your feedback was well received by us, We will shortly be in touch with you.</div>'
        . '<br><br>'
        . 'Regards:<br>'
        . 'SANTHOSH MARBLES';
    $mail_sent = mail($to, $subject, $msg, $headers);
    if ($mail_sent) {
        $data['success'] = true;
    } else {
        $data['error'] = 'Sorry there was some error please try again later !';
    }
    $headers = "";
    $headers = "From: " . strip_tags($email) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($email) . "\r\n";
    $headers .= "CC: anand@santhoshmarbles.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $msg = 'Name:  ' . $name . '<br><br>';
    $msg .= 'Email Id  :  ' . $email . '<br><br>';
    $msg .= 'Contact No  :  ' . $phone . '<br><br>';
    $msg .= 'Feedback  :  ' . $message . '<br><br>';
    $mail_sent = mail('info@santhoshmarbles.com', $subject, $msg, $headers);
    if ($mail_sent) {
        echo '<div class="label label-success">Your feedback was submitted successfully</div>';
    } else {
        echo '<div class="label label-success">Sorry there was some error please try again later !</div>';
    }
}

include_once 'header.php'

?>
    <br/><br/><br/>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.5978351892836!2d77.344892!3d11.1433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDA4JzM1LjkiTiA3N8KwMjAnNDEuNiJF!5e0!3m2!1sen!2sin!4v1442756574852"
        width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
    <br/><br/><br/>
    <!--- Contact Starts Here --->
    <div class="contact" id="contact">
        <div class="container">
            <div class="contact-top">
                <h3>Contact</h3>
                <small class="line1"><span> </span></small>
                <p>How may we help you ?</p>
                <small class="contact-tbot">We are always available to assist regarding anything you may need</small>
            </div>
            <div class="contact-bot">
                <form action="" METHOD="POST" ENCTYPE="multipart/form-data">
                    <div class="contact-text">
                        <h5>Your Name</h5>
                        <input type="text" name="name" required="true"/>
                    </div>
                    <div class="contact-text">
                        <h5>Your Email</h5>
                        <input type="text" required="true" name="email"/>
                    </div>
                    <div class="contact-text">
                        <h5>Your Phone</h5>
                        <input type="text" name="phone" required="true"/>
                    </div>
                    <div class="contact-text">
                        <h5>Your Message</h5>
                        <textarea name="message"></textarea>
                    </div>
                    <input type="submit" value="Send Message"/>
                </form>
            </div>
        </div>
    </div>
    <!--- Contact Ends Here --->


<?php include_once 'footer.php' ?>