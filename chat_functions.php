<?php
// Database connection details
include 'connect.php';

// Send a message to the database
function send_message($message) {
    global $conn;
    $message = mysqli_real_escape_string($conn, $message);
    $sql = "INSERT INTO `notes` (`note`) VALUES ('$message');";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Failed to send chat message: " . mysqli_error($conn));
    }
}
send_message($_POST['message']);
?>