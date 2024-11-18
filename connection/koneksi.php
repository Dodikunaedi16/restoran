<?php
$host = "localhost";
$user = "root"; // This should be the username
$pass = ""; // This should be the password
$db = "db_restoran"; // This should be the database name

// Create connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$conn) {
    die('Maaf koneksi gagal: ' . mysqli_connect_error());
} else {
    // Connection successful
    // echo 'Tahu';
    // echo $_SESSION['viewnya'];
}
?>
