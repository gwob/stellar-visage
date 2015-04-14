<?php
$servername = "localhost";
$username = "root";
$password = "spaceapps";
$dbName = "spaceapps"

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = INSERT INTO artwork(file, planet, firstName, lastName) VALUES ($_POST['file'], $_POST['planet'], $_POST['firstName'], $_POST['lastName'])

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>