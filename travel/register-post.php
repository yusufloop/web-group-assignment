<html>
<body>
<?php
include 'dblink.php';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$matrixno = $_POST["matrixno"];
$email = $_POST["email"];

echo "welcome ".$firstname. " " . $lastname. "<br>";
echo "Email is " .$email. "<br>";
echo "Matrix Number ".$matrixno. "<br>";


// $sql1 = "INSERT INTO users (firstname, lastname, matrixno, email )
// VALUES ('$firstname','$lastname','$matrixno','$email')";

// if ($conn->query($sql1) === TRUE) {
    
//     echo "New record created successfully.  " ;
//   } else {
//     echo "Error: " . $sql1 . "<br>" . $conn->error;
//   }


$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert = $conn->query("INSERT into users (firstname, lastname, matrixno, email,image) 
            VALUES ('$firstname','$lastname','$matrixno','$email','$imgContent' )"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg;

$conn->close();

include 'footer.php';
?>

</body>
</html>

