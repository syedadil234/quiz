<?php


<?php
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

// Create a connection
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

// Check the connection
if (!$conn) 
{
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "INSERT INTO users (name, lastName, email) VALUES ('Tom', 'Jackson', 'tom@jackson.tld')";
if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
} else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>