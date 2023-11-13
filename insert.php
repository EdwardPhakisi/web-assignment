
<?php

$conn = mysqli_connect("localhost", "root", "", "customerDB");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Taking input from form
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$gender = $_REQUEST['gender'];
$address = $_REQUEST['address'];
$email = $_REQUEST['email'];

// Performing insert query

$sql = "INSERT INTO customer VALUES ('$first_name', 
    '$last_name','$gender','$address','$email')";

if(mysqli_query($conn, $sql)){
    echo "<h3> Account created succefully."
        . "</h3>"; 

} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>

