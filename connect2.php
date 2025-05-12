<!--    this php file is used to connect to the database-->
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "login_detail";    

    $conn = new mysqli($host, $user, $pass, $db);

    // Check if connection was successful
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }
?>
