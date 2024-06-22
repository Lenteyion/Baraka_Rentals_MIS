<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root"; // default username for XAMPP/WAMP
$password = ""; // default password for XAMPP/WAMP
$dbname = "login_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = md5($_POST['password']); // hashing the password

    $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $user;
        header("Location: index.php");
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>
