<?php 
include 'connect.php';
$sql="SELECT * FROM `notes`;";
$result=mysqli_query($conn,$sql);
$messages=array();
while ($row = mysqli_fetch_assoc($result)) {
    $messages[] = array(
        "timestamp" => $row["time"],
        "message" => $row["note"]
    );
}

// Return the array of chat messages as JSON
header("Content-type: application/json");
echo json_encode($messages);
?>