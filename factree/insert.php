

<?php
// Connection parameters
$servername = "Localhost";
$username = "edward";
$dbname = "customerDB";

// Create connection with database
$conn = new mysqli($servername, $username, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    // Retrieve data from form

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $email = $_POST["email"];

    // Insert data into the database
    $sql = "INSERT INTO customer (firstname, lastname, gender, address, email) VALUES ('$firstname','$lastname','$gender','$address', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Account created";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database
$conn->close();
?>
