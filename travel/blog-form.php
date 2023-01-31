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
    <section class="tm-banner">
        <div class="tm-container-outer tm-register-bg">
            <div class="container">

                <div class="tm-container-outer tm-position-relative" id="tm-section-4">

                    <form action="blog-post.php" method="POST" class="tm-contact-form" enctype="multipart/form-data">

                        <div class="form-group tm-email-container">
                            <input type="text" id="placename" name="placename" class="form-control"
                                placeholder="Place Name" required />
                        </div>
                        <div class="form-group tm-email-container">
                            <label>Select Image File:</label>
                            <input type="file" name="image">
                        </div>
                        <div class="form-group">
                            <textarea id="descriptions" name="descriptions" class="form-control" rows="20"
                                placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" name="submit"
                            class="btn btn-primary tm-btn-primary tm-btn-send text-uppercase">Upload Data
                            for
                            place</button>
                    </form>
                </div> <!-- .tm-container-outer -->


            </div> <!-- .container -->
        </div> <!-- .tm-container-outer -->
    </section>



</body>
<?php 
    include 'footer.php';
    include 'scriptfoot.php';
    ?>

</html>
