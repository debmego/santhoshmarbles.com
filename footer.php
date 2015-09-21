<!--- Footer starts Here ---->
<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="social-bot">
                <ul class="social-bot-ico">
                    <li>
                        <a href="https://www.facebook.com/Santhosh-Marbles-1689626134590765/timeline/?__mref=message_bubble"><i
                                class="fa"></i></a></li>
                    <li><a href="https://twitter.com/santhoshmarbles"><i class="tw"></i></a></li>
                </ul>
                <br/><br/>

                <h1 class="Audiowide text-danger">
                    Contact us
                </h1>
                <br/><br/>

                <div class="row text-center">
                    <div class="col-md-3 ">
                        <p class="para text-center">Santhosh Marbles
                            <br/>
                            1/6E, Sakthi Nagar
                            <br/>
                            Pooluvapatti (Po)
                            <br/>
                            P.N.Road,Tirupur-641602</p>
                    </div>
                    <div class="col-md-3">
                        <p class="para"><i class="glyphicon glyphicon-phone"></i> Mansuk Patel - +919003733033
                            <br/>
                            <i class="glyphicon glyphicon-phone"></i> Shop Mobile - +919655818334
                            <br/>
                            <i class="glyphicon glyphicon-phone"></i> Shop - 0421-2471137 / 39</p>
                    </div>
                    <div class="col-md-3">
                        <p class="para text-center">Santhosh enterprisis
                            <br/>
                            8/25F, KG Pudhur,
                            <br/>
                            Pooluvapatti(Po)
                            <br/>
                            Uthukulai ring Road
                            <br/>
                            Tirupur-641602</p>
                    </div>
                    <div class="col-md-3">
                        <p class="para"><i class="glyphicon glyphicon-phone"></i> Paresh - +917401453031
                            <br/>
                            <i class="glyphicon glyphicon-phone"></i> Shop Phone - 0421-2902137</>
                    </div>
                </div>
                <a href="#top"><img src="images/scroll3.png" alt=""/></a>
            </div>
        </div>
    </div>
</div>
<div class="bg-info" style="width: 100%;margin: 0px;padding: 0px">
    <div class="container text-center " style="padding: 5px;font-size: 14px">
        Website <i class="glyphicon glyphicon-heart"></i> created and hosted <i
            class="glyphicon    glyphicon-cloud-upload"></i> by <a href="http://debmego.in" alt="Debmego Technologies">Debmego
            Technologies</a>. Web Designer: <a href="http://sudiptadeb.in" alt="Sudipta Deb">The Deb</a>
    </div>
</div>
<!--- Footer Ends Here ---->
</body>
<script>
    $('img.zoomable').click(function (e) {
        e.preventDefault();
        var s = $(this).attr('src');
        $('#overlay-outer').empty();
        $('#overlay-outer').append('<div id="overlay"><img src="' + s + '"></div>').hide().fadeIn(700);
        var h = $('#overlay img').height();
        h = window.innerHeight - h;
        h = h / 2;
        $('#overlay img').css('margin-top', h + 'px');
    });
    $('#overlay-outer').bind("click", function () {
        $('#overlay').fadeOut();
    });
    setInterval(function () {
        $('.owl-next').click();
    }, 5000)
</script>
</html>