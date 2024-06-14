<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aessob";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $privateword = $_POST["privateword"];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND privateword='$privateword'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, redirect or perform necessary actions
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>





    
