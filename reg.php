<!DOCTYPE html>
<html>
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>CANNY | Join As Partner </title>
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

    <div id="titlebar" class="gradient margin-bottom-35">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Join As Partner</h2>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li>Join As Partner</li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </div>


    <!-- Banner
    ================================================== -->

    <section class="reg-section mb-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ">
                    <div class="main-req main-req2 p-3">
                        <div class="success-message">
                            <div class="my-message">
                                <img src="images/checked.png" alt="">
                                <h4>Your password has been sent to the phone number <span>0595779004</span> Please
                                    complete registration through the application</h4>
                                <a href="#" class="android-btn">
                                        <span class="android-btn-icon d-inline-block">
                                            <img src="images/google-play.svg">
                                        </span>
                                    <span class="android-btn-content d-inline-block">
                                            <span class="android-btn-small d-block">
                                                Free Download
                                            </span>
                                            <span class="android-btn-big d-block">
                                                Google Play
                                            </span>
                                        </span>
                                </a>
                            </div>
                        </div>

                        <h3 class=" text-capitalize"><img src="images/collaboration.png" alt=""> Be our partner</h3>
                        <form id="rform" method="post" class="login">
                            <div class="sign-in-form mt-2">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class=" -wide">
                                            <label for="phone2">
                                                <input type="text" class="input-text" name="username"
                                                       placeholder="Enter your mobile number" id="phone2" value=""
                                                       data-parsley-required-message="Write your mobile number"
                                                       data-parsley-required="true" data-parsley-type="digits">
                                            </label>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class=" -wide">
                                            <label for="name1">
                                                <input type="text" class="input-text" name="name1"
                                                       placeholder="Full Name" id="name1" value=""
                                                       data-parsley-required-message="You must write your name"
                                                       data-parsley-required="true">
                                            </label>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class=" -wide">
                                            <label for="idnumber">
                                                <input type="text" class="input-text" name="idnumber"
                                                       placeholder="ID Number" id="idnumber" value=""
                                                       data-parsley-required-message="Enter your ID Number"
                                                       data-parsley-required="true" data-parsley-type="digits">
                                            </label>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class=" select-wide">
                                            <select class="chosen-select"
                                                    data-parsley-required-message="Choose your gender"
                                                    data-parsley-required="true">
                                                <option value="">Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class=" -wide">
                                            <label for="m-email">
                                                <input type="email" class="input-text" name="m-email"
                                                       placeholder="Email" id="m-email" data-parsley-required="true"
                                                       data-parsley-type="email" value="">
                                            </label>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class=" -wide">
                                            <label for="m-re-email">
                                                <input type="email" class="input-text" name="username"
                                                       placeholder="Confirm Email" id="m-re-email" value=""
                                                       data-parsley-equalto="#m-email"
                                                       data-parsley-required="true">
                                            </label>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class=" select-wide">
                                            <select class="chosen-select-no-single"
                                                    data-parsley-required-message="Choose your Category"
                                                    data-parsley-required="true">
                                                <option value="" label="blank">Category</option>
                                                <option value="1">Category1</option>
                                                <option value="1">Category2</option>
                                                <option value="1">Category3</option>
                                                <option value="1">Category4</option>
                                            </select>
                                        </p>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class=" select-wide">
                                            <select class="chosen-select-no-single"
                                                    data-parsley-required-message="Choose your Specialty"
                                                    data-parsley-required="true">
                                                <option value="" label="blank">Specialty</option>
                                                <option value="1">Specialty1</option>
                                                <option value="1">Specialty2</option>
                                                <option value="1">Specialty3</option>
                                                <option value="1">Specialty4</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkboxes margin-top-10">
                                            <input id="remember-me2" type="checkbox" name="check"
                                                   data-parsley-required-message="You Must Approve The Terms"
                                                   data-parsley-required="true">
                                            <label class="m-agree" for="remember-me2">Approve the <a href="#">terms</a></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="r-form-error">Lorem ipsum dolor sit amet</p>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="button margin-top-15">Submit</button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h4 class="pt-3">Work Requirements</h4>
                    <p style="line-height: 23px;">
                        <span class="green-dot small-dot">1-</span><strong>Registration for work</strong>:<br>
                        Either through the website or through the application, where you will have to register after the
                        registration process directly to the company to provide the required documents.<br>
                        <span class="green-dot small-dot">2-</span><strong>Required Documents</strong>:<br>
                        You must provide the following documents:
                        <br>
                        <span class="green-dot">•</span> Age is over 18 years old.<br>
                        <span class="green-dot">•</span> Driving license valid for delivery.<br>
                        <span class="green-dot">•</span> The vehicle license is valid for delivery.<br>
                        <span class="green-dot">•</span> Secure your vehicle.<br>
                        <span class="green-dot">•</span> License from the Ministry of Health to work in the field of
                        water filling.<br>
                        <span class="green-dot">•</span> Certificate qualifies the worker to work in his field.<br>
                        <span class="green-dot">•</span> Proof of residence in the city.M<br>
                        <span class="green-dot">•</span> Picture of the worker account on the application, the image
                        must be front and the details are in the middle
                        Including the face of the worker, and without sunglasses / photo of the worker only without
                        having anything else in
                        the frame.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="how_it_work faq pt-5" data-background-color="#f8f8f8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h4 class="headline text-center text-uppercase">Your guide to Canny</h4>
                    </div>
                    <ul class="works-list howWorks animated">

                        <li>
                            <figure class="icons">
                                <img src="images/mob-in-hand.png">
                            </figure>
                            <div class="list-content">
                                <h4>Download application.</h4>
                                <p>Get the app from Google play on your smart phone, open the app and create an
                                    account.</p>
                        </li>

                        <li>
                            <figure class="icons">
                                <img src="images/marker.png">
                            </figure>
                            <div class="list-content">
                                <h4>Service request</h4>
                                <p>Select the service you want, select the starting point,
                                    the application will be accepted by the worker, and you will be directed to you as
                                    quickly as possible.</p>
                            </div>
                        </li>

                        <li>
                            <figure class="icons">
                                <img src="images/bus.png">
                            </figure>
                            <div class="list-content">
                                <h4>Get the service</h4>
                                <p>You will see the image of the employee and the data about him, verify his identity,
                                    and rest and deal with the service professionals.</p>
                            </div>
                        </li>

                        <li>
                            <figure class="icons">
                                <img src="images/boy.png">
                            </figure>
                            <div class="list-content">
                                <h4>Comments and assessments</h4>
                                <p>At the end of each application, the user can provide comments about the service and
                                    evaluate the worker from one star to five stars.</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>

    </section>

    <!-- Content
    ================================================== -->

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
<script src="scripts/parsley.min.js"></script>
<script>
    $(document).ready(function () {
        $("#rform").on('submit', function (e) {
            e.preventDefault();
            var form = $(this);

            form.parsley().validate();

            if (form.parsley().isValid()) {
                $(".success-message").css({"z-index": "100", "opacity": "1"});
            }
        });
    });
</script>

</body>

</html>