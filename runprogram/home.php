

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .home-container {
            text-align: center;
        }
        .home-container h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="home-container">
        <h1>Welcome,<?php echo $_SESSION['username']; ?>! </h1>
        <p>You have successfully logged in.</p>
    </div>
</body>
</html>
