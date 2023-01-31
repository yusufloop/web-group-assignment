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
    <?php include 'navbar.php';
    $destination = $_POST["destination"];
    $room = $_POST["room"];
    $adult = $_POST["adult"];
    $children = $_POST["children"];
    $checkin_date = $_POST["checkin_date"];
    $checkout_date = $_POST["checkout_date"];

    // echo "destination ". $destination."<br>";
    // echo "room ". $room."<br>";
    // echo "adult ". $adult."<br>";
    // echo "children ". $children."<br>";
    // echo "checkin_date ". $checkin_date."<br>";
    // echo "checkout_date ". $checkout_date."<br>";



$sql1 = "INSERT INTO users_booking (destination, room, adult, children, checkin_date, checkout_date )
VALUES ('$destination','$room','$adult','$children','$checkin_date','$checkout_date')";

if ($conn->query($sql1) === TRUE) {
    
    echo "New record created successfully.  " ;
  } else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
  }
    
    include 'footer.php';
    include 'scriptfoot.php';
    ?>

</body>

</html>