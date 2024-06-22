<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Management Dashboard</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>welcome Baraka Rental</h2>
            <hr style="border: 2px solid white;">
            <ul>
                <li><a href="index.html">Dashboard</a></li>
                <li><a href="form.html">Tenants</a></li>
                <li><a href="payment.html">Payments</a></li>
                <li><a href="view_properties.html">Properties</a></li>
                <li><a href="reports.html">Reports</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Dashboard</h1>
            </div>
            <div class="content">
                <div class="card">
                    <h3>Total Properties</h3>
                    <p>10</p>
                </div>
                <div class="card">
                    <h3>Total Tenants</h3>
                    <p>25</p>
                </div>
                <div class="card">
                    <h3>Total Payments</h3>
                    <p>$50,000</p>
                </div>
                <div class="card">
                    <h3>Pending Issues</h3>
                    <p>3</p>
                </div>
            </div>
            <h1 style="text-align: center;">BARAKA RENTAL MANAGEMENT SYSTEM</h1>
        </div>
    </div>
</body>
</html>
