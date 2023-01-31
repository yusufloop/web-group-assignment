<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include 'dblink.php';
    include 'links.php';
    ?>
</head>

<body>
    <?php include 'navbar.php';?>
    <section class="p-5 tm-container-outer tm-bg-gray">
                <div class="container ">
                    <div class="row">
                        <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">
                            <h2 class="text-uppercase mb-4">view all <strong>places</strong> in the Malaysia</h2>
                            <p class="mb-4">we want tp make sure that you can get all the exciting places in Malaysia </p>
                            <a href="#" class="text-uppercase btn-primary tm-btn">Continue explore</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="tm-container-outer bg-white" id="tm-section-2">
                <section class="tm-slideshow-section">
                    <div class="tm-slideshow">
                        <img src="img/tanjung-malim1.png" alt="Image">
                        
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
                        
                    </div>
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">KLCC, Petronas twin tower</h2>
                        <p>The tallest twin tower in the world. </p>
                        <a href="view-blog3.php"
                            class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continue Reading</a>
                    </div>
                </section>
            </div>
    <?php 
    include 'footer.php';
    include 'scriptfoot.php';
    ?>

</body>

</html>