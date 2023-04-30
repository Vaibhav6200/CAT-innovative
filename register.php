
<?php 
    include 'connect.php';
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['signup'])){
        $name=$_POST['fullname'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $cpass=$_POST['re_pass'];
        $contact=$_POST['contact'];
        if (!preg_match('/^(?=.*[!@#$%^&*(),.?":{}|<>])(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*(),.?":{}|<>]{8,20}$/', 
          $pass)) echo "no reuirements matched";
        else if($cpass!=$pass){
            echo "pass not same";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "not email";
        }
        else{
            $sql="SELECT * FROM `users` WHERE `username`='$username';";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)){
                echo "username exits";
            }
            else{
                $sql="SELECT * FROM `users` WHERE `email`='$email';";
                $result=mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)){
                    echo "email is registered";
                }
                else{
                    $sql="INSERT INTO `users` (`name`, `username`, `email`, `password`, `contact`) VALUES ('$name', '$username', '$email', '$pass', '$contact');";
                    $result=mysqli_query($conn,$sql);
					$_SESSION['username']=$username;
                	$_SESSION['index']=0;
					
					$_SESSION['admin']=false;
                    header("Location:navbar2.php");

                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Register</title>

<link rel="stylesheet"
	href="fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="login.css">
</head>
<body>

	<div class="main">
		<section class="signup">
			<div class="container">
				<div class="signup-content">
					<div class="signup-form">
						<h2 class="form-title">SIGN UP</h2>

						<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" class="register-form"
							id="register-form">
                            <div class="form-group">
								<label for="name"><i
									class="zmdi zmdi-account material-icons-name"></i></label> <input
									type="text" name="fullname" id="fullname" placeholder="FULL NAME" required/>
							</div>
							<div class="form-group">
								<label for="name"><i
									class="zmdi zmdi-account material-icons-name"></i></label> <input
									type="text" name="username" id="username" placeholder="USERNAME" required/>
							</div>
							<div class="form-group">
								<label for="email"><i class="zmdi zmdi-email"></i></label> <input
									type="email" name="email" id="email" placeholder="EMAIL" required />
							</div>
							<div class="form-group">
								<label for="pass"><i class="zmdi zmdi-lock"></i></label> <input
									type="password" name="pass" id="pass" placeholder="PASSWORD" required/>
							</div>
							<div class="form-group">
								<label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="password" name="re_pass" id="re_pass"
									placeholder="REPEAT YOUR PASSWORD" required />
							</div>
							<div class="form-group">
								<label for="contact"><i class="zmdi zmdi-lock-outline"></i></label>
								<input type="text" name="contact" id="contact"
									placeholder="CONTACT" required/>
							</div>
							<div class="form-group form-button">
								<input type="submit" name="signup" id="signup"
									class="form-submit" value="REGISTER" required/>
							</div>
						</form>
					</div>
					<div class="signup-image">
						<figure>
							<img id="img1" src="assets/img/signin_image.gif" alt="sing up image">
						</figure>
						<a href="login.jsp" class="signup-image-link">Already a Member ?</a>
					</div>
				</div>
			</div>
		</section>


	</div>

	<script src="assets/js/main.js"></script>



</body>
</html>