<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "registration"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT first_name, second_name, email, contact, house, date_joined FROM user";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    echo "<table>
            <tr>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>House</th>
                <th>Date Joined</th>
            </tr>";
    
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["first_name"] . "</td>
                <td>" . $row["second_name"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["contact"] . "</td>
                <td>" . $row["house"] . "</td>
                <td>" . $row["date_joined"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No users found";
}

$conn->close();
?>
