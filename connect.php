<?php
$servername = "localhost"; // Database server
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "booking"; // Your database name

// Create a connection
$conn = new mysqli("localhost", :"root", " ", "booking");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Date = $_POST['Date'];
$Destination = $_POST['Destination'];
$Person = $_POST['Person'];
$Note = $_POST['Note'];

// SQL query to insert data into the table
$sql = "INSERT INTO booking (Name, Email, Mobile, Date, Destination, Person, Note)
        VALUES ('$Name', '$Email', '$Mobile', '$Date', '$Destination', '$Person', '$Note')";

// Check if insertion was successful
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
