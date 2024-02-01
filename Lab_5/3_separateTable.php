<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE semester (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL
)";


if (mysqli_query($conn, $sql)) {
    echo "Table class created successfully";
} else {
    echo "Error creating table: ".mysqli_error($conn);
}

$sql = "CREATE TABLE batch (
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(30) NOT NULL
)";


if (mysqli_query($conn, $sql)) {
    echo "Table batch created successfully";
} else {
    echo "Error creating table: ".mysqli_error($conn);
}

mysqli_close($conn);

?>
