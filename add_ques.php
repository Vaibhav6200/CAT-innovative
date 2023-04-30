<?php 
$servername = "localhost"; // change this to your server name
$username = "root"; // change this to your username
$password = ""; // change this to your password
$dbname = "cat"; // change this to your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ques=$_POST['question'];
    $op1=$_POST['option1'];
    $op2=$_POST['option2'];
    $op3=$_POST['option3'];
    $op4=$_POST['option4'];
    $ans=$_POST['answer'];
    $sql="INSERT INTO `quiz` (`ques`, `op1`, `op2`, `op3`, `op4`, `cr_op`) VALUES ('$ques', '$op1', '$op2', '$op3', '$op4', '$ans');";
    $result=mysqli_query($conn,$sql);
    if($result)header("Location:cat_innov.php");
}

?>