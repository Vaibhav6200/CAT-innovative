<?php 
session_start();

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
$sql="SELECT * FROM `quiz`;";
$result=mysqli_query($conn,$sql);
$ques=array();
$left=5;
while($row=mysqli_fetch_assoc($result)){
    $ques[]=array($row['ques'],$row['op1'],$row['op2'],$row['op3'],$row['op4'],$row['cr_op']);
}
shuffle($ques);
$quiz=array();
for($i=0;$i<count($ques);$i++){
    if(count($ques)-$i>$left){
        $random_number = rand(0, 1);
        if($random_number%2){
            $left--;
            $quiz[]=$ques[$i];
        }
    }
    else{
        $left--;
        $quiz[]=$ques[$i];
    }
}
$_SESSION['quiz']=$quiz;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


 

</body>
</html>