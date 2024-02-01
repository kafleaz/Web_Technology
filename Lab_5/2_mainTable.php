<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE table_1 (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Firstname VARCHAR(30) NOT NULL,
Lastname VARCHAR(30) NOT NULL,
Gender BOOLEAN NOT NULL,
Semester INT(2) UNSIGNED NOT NULL,
SymbolNumber VARCHAR(30) NOT NULL,
Batch INT(2) UNSIGNED NOT NULL
)";
if (mysqli_query($conn, $sql)) {
    echo "Table student created successfully";
} else {
    echo "Error creating table: ". mysqli_error($conn);
}
mysqli_close($conn);
?>
