<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "registration"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT name, amount_paid, date_paid FROM payments";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    echo "<table>
            <tr>
                <th>Name</th>
                <th>amount paid</th>
                <th>date paid</th>
            </tr>";
    
  
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["name"] . "</td>
                <td>" . $row["amount_paid"] . "</td>
                <td>" . $row["date_paid"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No users found";
}

$conn->close();
?>