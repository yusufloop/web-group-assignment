<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php 
    include 'dblink.php';
    include 'links.php';
    ?>
</head>

<body>
    <?php  include 'navbar.php'; ?>

    <div class="tm-main-content">
        <div class="tm-page-wrap mx-auto">
            <section class="tm-banner">
                <div class="tm-container-outer tm-banner-bg">
                    <div class="container">

                        <div class="row tm-banner-row tm-banner-row-header">
                            <div class="col-xs-12">
                                <div class="tm-banner-header">
                                    <h1 class="text-uppercase tm-banner-title">Let's begin</h1>
                                    <img src="img/dots-3.png" alt="Dots">
                                    <p class="tm-banner-subtitle">We assist you to choose the best.</p>
                                    <a href="javascript:void(0)" class="tm-down-arrow-link"><i
                                            class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>
                                </div>
                            </div> <!-- col-xs-12 -->
                        </div> <!-- row -->
                        <div class="row tm-banner-row" id="tm-section-search">

                            <form action="booking-post.php" method="post" class="tm-search-form tm-section-pad-2">
                                <div class="form-row tm-search-form-row">
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="inputCity">Choose Your Destination</label>
                                        <input name="destination" type="text" class="form-control" id="destination"
                                            placeholder="Type your destination...">
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-1">
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-2">
                                            <label for="inputRoom">How many rooms?</label>
                                            <select name="room" class="form-control tm-select" id="room">
                                                <option value="1" selected>1 Room</option>
                                                <option value="2">2 Rooms</option>
                                                <option value="3">3 Rooms</option>
                                                <option value="4">4 Rooms</option>
                                                <option value="5">5 Rooms</option>
                                                <option value="6">6 Rooms</option>
                                                <option value="7">7 Rooms</option>
                                                <option value="8">8 Rooms</option>
                                                <option value="9">9 Rooms</option>
                                                <option value="10">10 Rooms</option>
                                            </select>
                                        </div>
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                            <label for="inputAdult">Adult</label>
                                            <select name="adult" class="form-control tm-select" id="adult">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">

                                            <label for="inputChildren">Children</label>
                                            <select name="children" class="form-control tm-select" id="inputChildren">
                                                <option value="0" selected>0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                            </select>
                                        </div>
                                    </div>
                                </div> <!-- form-row -->
                                <div class="form-row tm-search-form-row">

                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                        <label for="inputCheckIn">Check In Date</label>
                                        <input name="checkin_date" type="text" class="form-control" id="inputCheckIn"
                                            placeholder="Check In">
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">
                                        <label for="inputCheckOut">Check Out Date</label>
                                        <input name="checkout_date" type="text" class="form-control" id="inputCheckOut"
                                            placeholder="Check Out">
                                    </div>
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="btnSubmit">&nbsp;</label>
                                        <button type="submit"
                                            class="btn btn-primary tm-btn tm-btn-search text-uppercase"
                                            id="btnSubmit">Book the place</button>
                                    </div>
                                </div>
                            </form>

                        </div> <!-- row -->
                        <div class="tm-banner-overlay"></div>
                    </div> <!-- .container -->
                </div> <!-- .tm-container-outer -->
            </section>

            <section class="p-5 tm-container-outer tm-bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">
                            <h2 class="text-uppercase mb-4">Your <strong>Journey</strong> is our priority</h2>
                            <p class="mb-4">We can explore the best of the world in our grasp and make the best of it</p>
                            <a href="#" class="text-uppercase btn-primary tm-btn">Continue explore</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="tm-container-outer" id="tm-section-2">
                <section class="tm-slideshow-section">
                    <div class="tm-slideshow">
                        <img src="img/tanjung-malim1.png" alt="Image">
                        <img src="img/tanjung-malim2.png" alt="Image">
                        <img src="img/tanjung-malim3.png" alt="Image">
                    </div>
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">Tanjung Malim</h2>
                        <p>One of the Best place in the education world</p>

                        <a href="view-blog1.php"
                            class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continue Reading</a>
                    </div>
                </section>
                <section class="clearfix tm-slideshow-section tm-slideshow-section-reverse">

                    <div class="tm-right tm-slideshow tm-slideshow-highlight">
                        <img src="img/pulau-redang1.png" alt="Image">
                        <img src="img/pulau-redang2.png" alt="Image">
                        <img src="img/pulau-redang3.png" alt="Image">
                    </div>

                    <div class="tm-slideshow-description tm-slideshow-description-left tm-bg-highlight">
                        <h2 class="">Pulau Redang</h2>
                        <p>The best place for island in Malaysia</p>
                        <a href="view-blog2.php"
                            class="text-uppercase tm-btn tm-btn-white tm-btn-white-highlight">Continue Reading</a>
                    </div>

                </section>
                <section class="tm-slideshow-section">
                    <div class="tm-slideshow">
                        <img src="img/klcc1.png" alt="Image">
                        <img src="img/klcc2.png" alt="Image">
                        <img src="img/klcc3.png" alt="Image">
                    </div>
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">KLCC, Petronas twin tower</h2>
                        <p>The tallest twin tower in the world. </p>
                        <a href="view-blog3.php"
                            class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continue Reading</a>
                    </div>
                </section>
            </div>
            <div class="tm-container-outer">
                <ul class="nav nav-pills tm-tabs-links">
                   <hr>
                   
                </ul>
                
            </div>

            <div class="tm-container-outer tm-position-relative">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=upsi&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: center;
                                height: auto;
                                width: auto;
                            }
                        </style>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: auto;
                                width: auto;
                                background-size: cover;
                            }
                        </style>
                    </div>
                </div>

            </div> <!-- .tm-container-outer -->

            <?php
                include 'footer.php';
            ?>
        </div>
    </div> <!-- .main-content -->


    <?php
     include 'scriptfoot.php';
    ?>

</body>

</html>