<h2>Sagar Chaudhary</h2>

<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "battlefield";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Validate input (You can add more validation if needed)
if (empty($name) || empty($email) || empty($message)) {
    die("Please fill out all the fields.");
    }


 // Prepare and execute the SQL statement to insert data into the database
//  $sql = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";


 if(mysqli_query($conn, $sql))
 {
     header("refresh: 0; url = index.html");
     echo"<script> alert('Thank you for contacting us! We will get back to you shortly.');</script>";
 } 
 else {
    echo "<script> alert('Failed to save the message. Please try again later.');</script>";
    header("refresh: 0; url = index.html");
 }


// Close the database connection
$conn->close();

?>