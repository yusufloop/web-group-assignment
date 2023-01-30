<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php';?>
</head>

<body>
    <?php include 'navbar.php';?>


   
        <section class="tm-banner">
            <div class="tm-container-outer tm-register-bg">
                <div class="container">

                    <div class="tm-container-outer tm-position-relative" id="tm-section-4">

                        <form action="index.html" method="post" class="tm-contact-form">

                            <div class="form-group tm-name-container">
                                <input type="text" id="firstname" name="firstname" class="form-control"
                                    placeholder="Firstname" required />
                            </div>
                            
                            <div class="form-group tm-lastname-container">
                                <input type="text" id="lastname" name="lastname" class="form-control"
                                    placeholder="Lastname" required />
                            </div>
                            <div class="form-group tm-email-container">
                                <input type="email" id="contact_email" name="contact_email" class="form-control"
                                    placeholder="Email" required />
                            </div>
                            <div class="form-group">
                            <label>Select Image File:</label>
                                <input type="file" name="image">
                                
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary tm-btn-primary tm-btn-send text-uppercase">Register Now</button>
                        </form>
                    </div> <!-- .tm-container-outer -->


                </div> <!-- .container -->
            </div> <!-- .tm-container-outer -->
        </section>
    

    <?php 
    include 'footer.php';
    include 'scriptfoot.php';
    ?>

</body>

</html>