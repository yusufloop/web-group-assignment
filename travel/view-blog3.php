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
            <?php
        $sql = "SELECT  id,placename, image, descriptions FROM users_blog WHERE id='1'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<br>";
            ?>
            <div class="header">
                <h1><a href="http://www.free-css.com/free-css-layouts.php"><?php echo $row["placename"]?></a></h1>
            </div>
            <div class="wrapper">
                <div class="content">

                    <p><strong></strong></p>
                    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"
                        alt="image" class="img-fluid tm-recommended-img">
                    <p><?php echo $row["descriptions"]?>
                    </p>


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
                </div>
            </div>
        </div>
    </section>
    <?php 
    include 'footer.php';
    include 'scriptfoot.php';
    ?>

</body>

</html>