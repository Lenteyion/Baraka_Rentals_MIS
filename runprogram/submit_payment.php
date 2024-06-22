<?php
$servername = "localhost";
$username = "root"; // Default username for phpMyAdmin
$password = ""; // Default password for phpMyAdmin
$dbname = "registration"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO payments (name, amount_paid, date_paid) VALUES (?, ?, ?)");
$stmt->bind_param("sds", $name, $amount_paid, $date_paid);

// Set parameters and execute
$name = $_POST['name'];
$amount_paid = $_POST['amount_paid'];
$date_paid = $_POST['date_paid'];
$stmt->execute();

echo "<script>alert('Payment recorded successfully');</script>";

$stmt->close();
$conn->close();
?>

