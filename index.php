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
    <?php include "style.php"?>
</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header Container
    ================================================== -->
    <?php include "header.php"; ?>
    <div class="clearfix"></div>
    <!-- Header Container / End -->


    <!-- Banner
    ================================================== -->
    <div class="main-search-container" data-background-image="images/bg1.jpg">
        <div class="main-search-inner">

            <div class="container">
                <div class="row">
                    <div class="col-12 d-lg-none text-center big-btn">
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
                    <div class="col-lg-5 d-lg-flex d-none">
                        <div class="main-req p-3">
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
                            <h3 class=" mt--1 text-capitalize"><img src="images/smartphone.png" alt=""> Enjoy Cany
                                services</h3>
                            <form method="post" class="login">
                                <div class="input-group mb-3 mt-3">
                                    <input type="text" class="form-control" placeholder="Enter your mobile number"
                                           aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="submit" id="button-addon2"><span
                                                class="im im-icon-Arrow-Forward2"></span></button>
                                    </div>
                                </div>
                            </form>
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
                    <div class="col-lg-7 d-lg-flex d-none">
                        <div class="align-self-center">
                            <h2>Delivery - General maintenance and reservations </h2>
                            <h4>In just one application ... our logo is of interest to you</h4>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Content
    ================================================== -->


    <!-- Info Section -->
    <div class="container pt-5 pb-5">

        <!--<div class="row">-->
        <!--<div class="col-md-8 offset-md-2 text-center">-->
        <!--<h2 class="headline centered margin-top-80 main-title">-->
        <!--Our Services-->
        <!--</h2>-->
        <!--</div>-->
        <!--</div>-->

        <div class="row icons-container">
            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2 with-line">
                    <i>
                        <img src="images/settings.svg" alt="">
                    </i>
                    <h3>Services for your convenience</h3>
                    <p>Canny has all the services you need in the areas of delivery, general maintenance and bookings
                        Where it constantly seeks to comfort you and gain your trust.</p>
                </div>
            </div>

            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2 with-line">
                    <i>
                        <img src="images/24-hours.svg" alt="">
                    </i>
                    <h3>Anytime and anywhere</h3>
                    <p>Whether you are at home or abroad, you can rely on Canny for all services
                        For 24 hours, be your first companion in any service you need.</p>
                </div>
            </div>

            <!-- Stage -->
            <div class="col-md-4">
                <div class="icon-box-2">
                    <i>
                        <img src="images/discount.svg" alt="">
                    </i>
                    <h3>Competitive prices and offers </h3>
                    <p>Services provided to you in accordance with your requirements - in addition to the distinguished
                        and renewable offers
                        Be sure to take advantage of all the offers.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- Info Section / End -->
    <div class="map mt-5" data-background-color="#f8f8f8">

        <div class="container-fluid">
            <form action="#">
            <div class="row">
                <div class="col-md-4 order-md-1 d-flex">
                    <div class="align-self-center w-100 text-center">
                        <h4>Select the service and select the location</h4>
                    <p class=" select-wide pt-3">
                        <select class="chosen-select-no-single">
                            <option value="" label="blank">Select Service</option>
                            <option value="1">Service1</option>
                            <option value="1">Service2</option>
                            <option value="1">Service3</option>
                            <option value="1">Service4</option>
                        </select>
                    </p>
                    <div class="pac-card" id="pac-card">
                        <div id="pac-container">
                            <input id="pac-input" type="text"
                                   placeholder="Enter a location">
                        </div>
                    </div>
                        <button type="submit" class="button margin-top-15">Submit</button>
                    </div>
                </div>
                <div class="col-md-8 order-md-0">
                    <div id="map"></div>
                    <div id="infowindow-content">
                        <img src="" width="16" height="16" id="place-icon">
                        <span id="place-name"  class="title"></span><br>
                        <span id="place-address"></span>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- Fullwidth Section -->
    <section class="fullwidth  padding-top-75 padding-bottom-70">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <h3 class="headline centered ">
                        Latest offers
                        <span>Lorem<i> ipsum dolor sit amet</i> consectetur adipi</span>
                    </h3>
                </div>

            </div>
        </div>


        <!-- Categories Carousel -->
        <div class="fullwidth-carousel-container margin-top-25">
            <div class="fullwidth-slick-carousel category-carousel">

                <!-- Item -->
                <div class="fw-carousel-item">

                    <!-- this (first) box will be hidden under 1680px resolution -->
                    <div class="category-box-container ">
                        <a href="#" class="category-box"
                           data-background-image="images/category-box-01.jpg">
                            <div class="category-box-content">
                                <h3>Carpentry and wooden works</h3>
                                <span>
                                    • Maintenance of doors and windows.
                                    <br>
                                    • Office repair.
                                    <br>
                                    • Design wooden furniture parts.
                                </span>
                            </div>
                            <span class="category-box-btn">25 ₪</span>
                        </a>
                    </div>

                </div>

                <!-- Item -->
                <div class="fw-carousel-item">
                    <div class="category-box-container">
                        <a href="#" class="category-box"
                           data-background-image="images/category-box-06.jpg">
                            <div class="category-box-content">
                                <h3>Electricity works</h3>
                                <span>
                                    • Maintenance of homes and businesses.
                                    <br>
                                    • Establishment works for apartments, villas and buildings.
                                </span>
                            </div>
                            <span class="category-box-btn">25 ₪</span>
                        </a>
                    </div>
                </div>

                <!-- Item -->
                <div class="fw-carousel-item">
                    <div class="category-box-container">
                        <a href="#" class="category-box"
                           data-background-image="images/blog-compact-post-03.jpg">
                            <div class="category-box-content">
                                <h3>Maintenance & installation</h3>
                                <span>Maintenance of all types of air conditioners, in addition to
                                    transportation from one place to another, where maintenance is done inside the house, or outside if
                                    necessary, with a team of professional technicians.</span>
                            </div>
                            <span class="category-box-btn">25 ₪</span>
                        </a>
                    </div>
                </div>
                <!-- Item -->
                <div class="fw-carousel-item">

                    <!-- this (first) box will be hidden under 1680px resolution -->
                    <div class="category-box-container ">
                        <a href="#" class="category-box"
                           data-background-image="images/category-box-01.jpg">
                            <div class="category-box-content">
                                <h3>Carpentry and wooden works</h3>
                                <span>
                                    • Maintenance of doors and windows.
                                    <br>
                                    • Office repair.
                                    <br>
                                    • Design wooden furniture parts.
                                </span>
                            </div>
                            <span class="category-box-btn">25 ₪</span>
                        </a>
                    </div>

                </div>

                <!-- Item -->
                <div class="fw-carousel-item">
                    <div class="category-box-container">
                        <a href="#" class="category-box"
                           data-background-image="images/category-box-06.jpg">
                            <div class="category-box-content">
                                <h3>Electricity works</h3>
                                <span>
                                    • Maintenance of homes and businesses.
                                    <br>
                                    • Establishment works for apartments, villas and buildings.
                                </span>
                            </div>
                            <span class="category-box-btn">25 ₪</span>
                        </a>
                    </div>
                </div>

                <!-- Item -->
                <div class="fw-carousel-item">
                    <div class="category-box-container">
                        <a href="#" class="category-box"
                           data-background-image="images/blog-compact-post-03.jpg">
                            <div class="category-box-content">
                                <h3>Maintenance & installation</h3>
                                <span>Maintenance of all types of air conditioners, in addition to
                                    transportation from one place to another, where maintenance is done inside the house, or outside if
                                    necessary, with a team of professional technicians.</span>
                            </div>
                            <span class="category-box-btn">25 ₪</span>
                        </a>
                    </div>
                </div>
                <!-- Item -->


            </div>
        </div>
        <!-- Categories Carousel / End -->
    </section>
    <!-- Fullwidth Section / End -->

    <!-- Footer
    ================================================== -->
    <?php include "footer.php"?>
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
<script>
    // $(".r-form-error").css("display" , "block")
</script>

<script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -33.8688, lng: 151.2195},
            zoom: 13,
            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "lightness": 33
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f7f7f7"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "poi.business",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi.government",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi.medical",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#deecdb"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "lightness": "25"
                        }
                    ]
                },
                {
                    "featureType": "poi.place_of_worship",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi.school",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "poi.sports_complex",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "lightness": "25"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "saturation": "-90"
                        },
                        {
                            "lightness": "25"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#e0f1f9"
                        }
                    ]
                }
            ]
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');


        var autocomplete = new google.maps.places.Autocomplete(input);

// Bind the map's bounds (viewport) property to the autocomplete object,
// so that the autocomplete requests use the current map bounds for the
// bounds option in the request.
        autocomplete.bindTo('bounds', map);

// Set the data fields to return when the user selects a place.
        autocomplete.setFields(
            ['address_components', 'geometry', 'icon', 'name']);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
            map: map,
            anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function () {
            infowindow.close();
            marker.setVisible(false);
            var place = autocomplete.getPlace();
            if (!place.geometry) {
// User entered the name of a Place that was not suggested and
// pressed the Enter key, or the Place Details request failed.
                window.alert("No details available for input: '" + place.name + "'");
                return;
            }

// If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(17);  // Why 17? Because it looks good.
            }
            marker.setPosition(place.geometry.location);
            marker.setVisible(true);

            var address = '';
            if (place.address_components) {
                address = [
                    (place.address_components[0] && place.address_components[0].short_name || ''),
                    (place.address_components[1] && place.address_components[1].short_name || ''),
                    (place.address_components[2] && place.address_components[2].short_name || '')
                ].join(' ');
            }

            infowindowContent.children['place-icon'].src = place.icon;
            infowindowContent.children['place-name'].textContent = place.name;
            infowindowContent.children['place-address'].textContent = address;
            infowindow.open(map, marker);
        });



    }
</script>
<script
        src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap"
        async defer>
</script>
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