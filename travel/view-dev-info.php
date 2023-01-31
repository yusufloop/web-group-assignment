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
    <section class="p-5 tm-container-outer bg-white">
    <div class="container">
        <!-- Tab 4 -->
        <div class="tab-pane fade show active" id="4a">

        <?php
        $sql = "SELECT id, firstname, lastname, matrixno , image FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<br>";
            ?>
        
        <div class="tm-recommended-place-wrap">
            <div class="tm-recommended-place">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt="Image" class="img-fluid tm-recommended-img">
                <div class="tm-recommended-description-box">
                    <h3 class="tm-recommended-title"><?php echo $row["id"]. " " . $row["firstname"] . " " .  $row["lastname"]?></h3>
                    <p class="tm-text-highlight"><?php echo $row["matrixno"]?></p>
                    
                </div>
            </div>
        </div>

        <?php
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        ?>

           
        </div> <!-- tab-pane -->
    </div>
    </section>
</body>
<?php 
    include 'footer.php';
    include 'scriptfoot.php';
    ?>

</html>

