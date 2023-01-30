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

                        
                        <div class="row tm-banner-row" id="tm-section-search">

                            <form action="index.php" method="get" class="tm-search-form tm-section-pad-2">
                                <div class="form-row tm-search-form-row">
                                    
                                    
                                </div> <!-- form-row -->
                                <div class="form-row tm-search-form-row">

                                    <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">
                                    <h2 class="text-uppercase mb-4">Places in <strong>Malaysia</strong> to visit</h2>
                                    <p class="mb-4">There are many palce to go around Malaysia</p>
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
                            <p class="mb-4">Nullam auctor, sapien sit amet lacinia euismod, lorem magna lobortis massa,
                                in tincidunt mi metus quis lectus. Duis nec lobortis velit. Vivamus id magna vulputate,
                                tempor ante eget, tempus augue. Maecenas ultricies neque magna.</p>
                            <a href="#" class="text-uppercase btn-primary tm-btn">Continue explore</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="tm-container-outer" id="tm-section-2">
                <section class="tm-slideshow-section">
                    <div class="tm-slideshow">
                        <img src="img/tm-img-01.jpg" alt="Image">
                        <img src="img/tm-img-02.jpg" alt="Image">
                        <img src="img/tm-img-03.jpg" alt="Image">    
                    </div>
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">Tanjung Malim</h2>
                        <p>UPSI Adventure Park</p>
                        <p>Muzium Pendidikan Nasional</p>
                        <p>Strata Waterfalls</p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continue Reading</a>
                    </div>
                </section>
                <section class="clearfix tm-slideshow-section tm-slideshow-section-reverse">

                    <div class="tm-right tm-slideshow tm-slideshow-highlight">
                        <img src="img/tm-img-02.jpg" alt="Image">
                        <img src="img/tm-img-03.jpg" alt="Image">
                        <img src="img/tm-img-01.jpg" alt="Image">
                    </div> 

                    <div class="tm-slideshow-description tm-slideshow-description-left tm-bg-highlight">
                        <h2 class="">Asia's most popular places</h2>
                        <p>Vivamus in massa ullamcorper nunc auctor accumsan ac at arcu. Donec sagittis mattis pharetra. Proin commodo, ante et volutpat pulvinar, arcu arcu ullamcorper diam, id maximus sem tellus id sem. Suspendisse eget rhoncus diam. Fusce urna elit, porta nec ullamcorper id.</p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-highlight">Continue Reading</a>
                    </div>                        

                </section>
                <section class="tm-slideshow-section">
                    <div class="tm-slideshow">
                        <img src="img/tm-img-03.jpg" alt="Image">
                        <img src="img/tm-img-02.jpg" alt="Image">
                        <img src="img/tm-img-01.jpg" alt="Image">
                    </div>
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">America's most famous places</h2>
                        <p>Donec nec laoreet diam, at vehicula ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse nec dapibus nunc, quis viverra metus. Morbi eget diam gravida, euismod magna vel, tempor urna.</p>
                        <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continue Reading</a>
                    </div>
                </section>
            </div>        
            <div class="tm-container-outer" >
                <ul class="nav nav-pills tm-tabs-links">
                    <li class="tm-tab-link-li">
                        <a href="#1a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/north-america.png" alt="Image" class="img-fluid">
                            North America
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#2a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/south-america.png" alt="Image" class="img-fluid">
                            South America
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#3a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/europe.png" alt="Image" class="img-fluid">
                            Europe
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#4a" data-toggle="tab" class="tm-tab-link active">
                            <!-- Current Active Tab -->
                            <img src="img/asia.png" alt="Image" class="img-fluid">
                            Asia
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#5a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/africa.png" alt="Image" class="img-fluid">
                            Africa
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#6a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/australia.png" alt="Image" class="img-fluid">
                            Australia
                        </a>
                    </li>
                    <li class="tm-tab-link-li">
                        <a href="#7a" data-toggle="tab" class="tm-tab-link">
                            <img src="img/antartica.png" alt="Image" class="img-fluid">
                            Antartica
                        </a>
                    </li>
                </ul>
                <div class="tab-content clearfix">

                    <!-- Tab 1 -->
                    <div class="tab-pane fade" id="1a">
                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">North Garden Resort</h3>
                                    <p class="tm-text-highlight">One North</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$110</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Felis nec dignissim</h3>
                                    <p class="tm-text-highlight">Two North</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <div id="preload-hover-img"></div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$120</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Sed fermentum justo</h3>
                                    <p class="tm-text-highlight">Three North</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$130</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Maecenas ultricies neque</h3>
                                    <p class="tm-text-highlight">Four North</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$140</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>
                        </div>

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->

                    <!-- Tab 2 -->
                    <div class="tab-pane fade" id="2a">

                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">South Resort Hotel</h3>
                                    <p class="tm-text-highlight">South One</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$220</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Aenean ac ante nec diam</h3>
                                    <p class="tm-text-highlight">South Second</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$230</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Suspendisse nec dapibus</h3>
                                    <p class="tm-text-highlight">South Third</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$240</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Aliquam viverra mi at nisl</h3>
                                    <p class="tm-text-highlight">South Fourth</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$250</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>
                        </div>

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->

                    <!-- Tab 3 -->
                    <div class="tab-pane fade" id="3a">

                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Europe Hotel</h3>
                                    <p class="tm-text-highlight">Venecia, Italy</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$330</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">In viverra enim turpis</h3>
                                    <p class="tm-text-highlight">Paris, France</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$340</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Volutpat pellentesque</h3>
                                    <p class="tm-text-highlight">Barcelona, Spain</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$350</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Grand Resort Pasha</h3>
                                    <p class="tm-text-highlight">Istanbul, Turkey</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$360</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>
                        </div>

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->

                    <!-- Tab 4 -->
                    <div class="tab-pane fade show active" id="4a">
                        <!-- Current Active Tab WITH "show active" classes in DIV tag -->
                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Asia Resort Hotel</h3>
                                    <p class="tm-text-highlight">Singapore</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$440</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Nullam eget est a nisl</h3>
                                    <p class="tm-text-highlight">Yangon, Myanmar</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <div id="preload-hover-img"></div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$450</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Proin interdum ullamcorper</h3>
                                    <p class="tm-text-highlight">Bangkok, Thailand</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$460</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Lorem ipsum dolor sit</h3>
                                    <p class="tm-text-highlight">Vientiane, Laos</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$470</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>
                        </div>

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->

                    <!-- Tab 5 -->
                    <div class="tab-pane fade" id="5a">

                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Africa Resort Hotel</h3>
                                    <p class="tm-text-highlight">First City</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$550</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Aenean ac magna diam</h3>
                                    <p class="tm-text-highlight">Second City</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$560</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Beach Barbecue Sunset</h3>
                                    <p class="tm-text-highlight">Third City</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$570</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Grand Resort Pasha</h3>
                                    <p class="tm-text-highlight">Fourth City</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$580</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>
                        </div>

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->

                    <!-- Tab 6 -->
                    <div class="tab-pane fade" id="6a">

                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Hotel Australia</h3>
                                    <p class="tm-text-highlight">City One</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$660</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Proin interdum ullamcorper</h3>
                                    <p class="tm-text-highlight">City Two</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$650</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Beach Barbecue Sunset</h3>
                                    <p class="tm-text-highlight">City Three</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$640</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Grand Resort Pasha</h3>
                                    <p class="tm-text-highlight">City Four</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$630</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>
                        </div>

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->

                    <!-- Tab 7 -->
                    <div class="tab-pane fade" id="7a">

                        <div class="tm-recommended-place-wrap">
                            <div class="tm-recommended-place">
                                <img src="img/tm-img-04.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Antartica Resort</h3>
                                    <p class="tm-text-highlight">Ant City One</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$770</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-05.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Pulvinar Semper</h3>
                                    <p class="tm-text-highlight">Ant City Two</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$230</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-06.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Cras vel sapien</h3>
                                    <p class="tm-text-highlight">Ant City Three</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$140</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>

                            <div class="tm-recommended-place">
                                <img src="img/tm-img-07.jpg" alt="Image" class="img-fluid tm-recommended-img">
                                <div class="tm-recommended-description-box">
                                    <h3 class="tm-recommended-title">Nullam eget est</h3>
                                    <p class="tm-text-highlight">Ant City Four</p>
                                    <p class="tm-text-gray">Sed egestas, odio nec bibendum mattis, quam odio hendrerit
                                        risus, eu varius eros lacus sit amet lectus. Donec blandit luctus dictum...</p>
                                </div>
                                <a href="#" class="tm-recommended-price-box">
                                    <p class="tm-recommended-price">$190</p>
                                    <p class="tm-recommended-price-link">Continue Reading</p>
                                </a>
                            </div>
                        </div>

                        <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a>
                    </div> <!-- tab-pane -->
                </div>
            </div>

            <div class="tm-container-outer tm-position-relative" >
                <div id="google-map"></div>
                <form action="index.html" method="post" class="tm-contact-form">
                    <div class="form-group tm-name-container">
                        <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name"
                            required />
                    </div>
                    <div class="form-group tm-email-container">
                        <input type="email" id="contact_email" name="contact_email" class="form-control"
                            placeholder="Email" required />
                    </div>
                    <div class="form-group">
                        <input type="text" id="contact_subject" name="contact_subject" class="form-control"
                            placeholder="Subject" required />
                    </div>
                    <div class="form-group">
                        <textarea id="contact_message" name="contact_message" class="form-control" rows="9"
                            placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary tm-btn-primary tm-btn-send text-uppercase">Send Message
                        Now</button>
                </form>
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