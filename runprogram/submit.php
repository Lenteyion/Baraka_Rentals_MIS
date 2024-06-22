<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "registration"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO user (first_name, second_name, email, contact, house, date_joined) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $first_name, $second_name, $email, $contact, $house, $date_joined);


$first_name = $_POST['first_name'];
$second_name = $_POST['second_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$house = $_POST['house'];
$date_joined = $_POST['date_joined'];
$stmt->execute();

echo "<script>alert('New records created successfully');</script>";

$stmt->close();
$conn->close();
?>
