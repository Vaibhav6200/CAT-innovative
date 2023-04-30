<!DOCTYPE html>
<html>
<head>
	<title>Mentors</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        nav {
            height: 100vh;
            width: 150px;
            background-color: #333;
            position: fixed;
            top: 0;
            left: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            margin: 10px;
        }

        a {
            display: block;
            color: #fff;
            text-decoration: none;
            padding: 10px;
        }

        main {
            margin-left: 150px;
            padding: 20px;
        }

        .mentor-container {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
        }

        img {
            width: 100px;
            height: 100px;
            float: left;
            margin-right: 20px;
        }

        .mentor-description {
            margin-top: 0;
        }

        .mentor-skills {
            font-style: italic;
        }

    </style>
</head>
<body>
	<nav>
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Sign Up</a></li>
			<li><a href="#">Login</a></li>
			<!-- Add more options as needed -->
		</ul>
	</nav>

	<main>
		<h1>Mentors</h1>

		<div class="mentor-container">
			<img src="mentor1.jpg">
			<h2>Amita Choudhary</h2>
			<p class="mentor-description">Assistant Professor in Chemical Engineering, Nirma University</p>
		</div>

		<div class="mentor-container">
			<img src="mentor2.jpg">
			<h2>Neha Patni</h2>
			<p class="mentor-description">Assistant Professor in Chemical Engineering, Nirma University</p>
		</div>

		<!-- Add more mentor containers as needed -->

	</main>

</body>
</html>
