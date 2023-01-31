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
            <!--Table-->
            <table class="table table-hover table-fixed">

                <!--Table head-->
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Destination</th>
                        <th>Room</th>
                        <th>Adult Quantity</th>
                        <th>Children Quantity</th>
                        <th>Checkin Date</th>
                        <th>Checkout Date</th>
                    </tr>
                </thead>
                <!--Table head-->

                <!--Table body-->
                <tbody>

                    <?php
        $sql = "SELECT id, destination, room, adult, children , checkin_date, checkout_date FROM users_booking";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<br>";
            ?>
                    <tr>
                        <th scope="row"><?php echo $row["id"] ?></th>
                        <td><?php echo $row["destination"]?></td>
                        <td><?php echo $row["room"]?></td>
                        <td><?php echo $row["adult"]?></td>
                        <td><?php echo $row["children"]?></td>
                        <td><?php echo $row["checkin_date"]?></td>
                        <td><?php echo $row["checkout_date"]?></td>
                    </tr>
                    <?php
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        ?>
                </tbody>
                <!--Table body-->

            </table>
            <!--Table-->
        </div>

    </section>
    <a href="index.php" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Back</a>
    <?php 
    include 'footer.php';
    include 'scriptfoot.php';
    ?>

</body>

</html>

