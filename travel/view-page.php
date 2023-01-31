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
        <div class="container">
            <div class="row">
                <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">
                    <h2 class="text-uppercase mb-4">The View page <strong>traveller</strong> in our website</h2>
                    <p class="mb-4">This is the list of all the visitor in our website</p>
                    <a href="index.php" class="text-uppercase btn-primary tm-btn">Go back Home</a>
                </div>
            </div>
        </div>
    </section>
    
    <?php
        $sql = "SELECT id, firstname, lastname,email, matrixno ,reg_date, image FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        
        while($row = $result->fetch_assoc()) {
        echo "<br>";
            ?>
            
    <div class="tm-container-outer " id="tm-section-2">
        <section class="tm-slideshow-section ">
            <div class="tm-slideshow">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt="Image">

            </div>
            <div class="tm-slideshow-description tm-bg-primary">
                <h2 class=""><?php echo $row["id"]. " " . $row["firstname"] . " " .  $row["lastname"]?></h2>
                <p><?php echo $row["matrixno"]?></p>
                <p><?php echo $row["email"]?></p>
                <p><?php echo $row["reg_date"]?></p>
                <a href="#" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continue Reading</a>
            </div>
        </section>
    </div>
    <a href="index.php" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Back</a>         

    <?php
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        ?>

    <?php 
    include 'footer.php';
    include 'scriptfoot.php';
    ?>

</body>

</html>
