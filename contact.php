<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>CANNY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <?php include "style.php" ?>
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <?php include "header.php"; ?>
    <div class="clearfix"></div>
    <!-- Header Container / End -->

    <!-- Map Container -->
    <div class="contact-map margin-bottom-60">

        <!-- Google Maps -->
        <div id="singleListingMap-container">
            <div id="singleListingMap" data-latitude="40.70437865245596" data-longitude="-73.98674011230469" data-map-icon="im im-icon-Map2"></div>
            <a href="#" id="streetView">Street View</a>
        </div>
        <!-- Google Maps / End -->

        <!-- Office -->
        <div class="address-box-container">
            <div class="address-container" data-background-image="images/our-office.jpg">
                <div class="office-address">
                    <h3>Our Office</h3>
                    <ul>
                        <li>Palestine Gaza Al-Jalaa Street  </li>
                        <li>Watan Tower 9th Floor</li>
                        <li>Phone (123) 123-456 </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Office / End -->

    </div>
    <div class="clearfix"></div>
    <!-- Map Container / End -->


    <!-- Container / Start -->
    <div class="container">

        <div class="row">

            <!-- Contact Details -->
            <div class="col-md-4">

                <h4 class="headline margin-bottom-30">Find Us There</h4>

                <!-- Contact Details -->
                <div class="sidebar-textbox">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi est explicabo facere necessitatibus ratione. Adipisci animi assumenda</p>

                    <ul class="contact-details">
                        <li><i class="im im-icon-Phone-2"></i> <strong>Phone:</strong> <span>(123) 123-456 </span></li>
                        <li><i class="im im-icon-Fax"></i> <strong>Fax:</strong> <span>(123) 123-456 </span></li>
                        <li><i class="im im-icon-Globe"></i> <strong>Web:</strong> <span><a href="#">www.canny.com</a></span></li>
                        <li><i class="im im-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="mailto:cannyaapp@gmail.com">cannyaapp@gmail.com</a></span></a></span></li>
                    </ul>
                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-md-8">

                <section class="mb-5" id="contact">
                    <h4 class="headline margin-bottom-35">Contact Form</h4>

                    <div id="contact-message"></div>

                    <form method="post" action="#" autocomplete="on">

                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <input name="name" type="text" id="name" placeholder="Your Name" required="required" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div>
                                    <input name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
                                </div>
                            </div>
                        </div>

                        <div>
                            <input name="subject" type="text" id="subject" placeholder="Subject" required="required" />
                        </div>

                        <div>
                            <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
                        </div>

                        <input type="submit" class="submit button" id="submit" value="Submit Message" />

                    </form>
                </section>
            </div>
            <!-- Contact Form / End -->

        </div>

    </div>
    <!-- Container / End -->


    <!-- Footer
    ================================================== -->
    <?php include "footer.php" ?>
    <!-- Footer / End -->


    <!-- Back To Top Button -->
    <div id="backtotop"><a href="#"></a></div>


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="scripts/mmenu.min.js"></script>
<script type="text/javascript" src="scripts/chosen.min.js"></script>
<script type="text/javascript" src="scripts/slick.min.js"></script>
<script type="text/javascript" src="scripts/rangeslider.min.js"></script>
<script type="text/javascript" src="scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="scripts/waypoints.min.js"></script>
<script type="text/javascript" src="scripts/counterup.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/tooltips.min.js"></script>
<script type="text/javascript" src="scripts/custom.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="scripts/infobox.min.js"></script>
<script type="text/javascript" src="scripts/markerclusterer.js"></script>
<script type="text/javascript" src="scripts/maps.js"></script>

</body>

</html>