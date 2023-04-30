<?php
    session_start();
    include 'connect.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="SELECT * FROM `admins` WHERE `username`='$username';";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==0){
            echo "username does not exists";
        }
        else{
            $row=mysqli_fetch_assoc($result);
            if($password==$row['password']){
                $_SESSION['username']=$username;
                $_SESSION['index']=0;
                $_SESSION['admin']='true';
                header("Location:cat_innov.php");
            }
            else{
                echo "incorrect password";
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
<title>Login</title>


<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">


<link rel="stylesheet" href="login.css">
</head>
<body>

	<div class="main">

		<section class="sign-in">
			<div class="container">
				<div class="signin-content">
					<div class="signin-image">
						<figure>
							<img src="assets/img/login_image.png" alt="sing up image" height="100px">
						</figure>
                        <span class="signup-image-link"><b>Create a New Account</b></span>
						<a href="register.html" class="signup-image-link" style="color:#924747;">Register HERE !!</a>
					</div>

					<div class="signin-form">
						<h2 class="form-title">LOGIN</h2>
						<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="register-form"
							id="login-form">
							<div class="form-group">
								<label for="username"><i
									class="zmdi zmdi-account material-icons-name"></i></label> <input
									type="text" name="username" id="username"
									placeholder="USERNAME" required/>
							</div>
							<div class="form-group">
								<label for="password"><i class="zmdi zmdi-lock"></i></label> <input
									type="password" name="password" id="password"
									placeholder="PASSWORD" required/>
							</div>

							<div class="form-group form-button">
								<input type="submit" name="signin" id="signin"
									class="form-submit" value="LOGIN" />
							</div>
						</form>

					</div>
				</div>
			</div>
		</section>

	</div>

	<!-- JS -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>