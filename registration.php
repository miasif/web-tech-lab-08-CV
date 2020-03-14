
<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>XCOMPANY</title>
	<style>
		body{
			margin:0;
			padding:0px 50px;
		}
		a{
			text-decoration:none;
		}
		.header_area,.reg{
			width:100%;
			
			
		}
		.logoarea{
			width:40%;
			float:left;
			background-color:#25cee0;
		}
		.logoarea h1{
			padding-left:30px;
		}
		.menu_area{
			width:60%;
			float:left;
			background-color:#25cee0;
		}
		.menu_area ul{
			list-style:none;
			text-align:right;
		}
		.menu_area ul li{
			display:inline-block;
			padding:15px;
			color:white;
		}
		.logout{
			width:100%
		}
		.menu_area ul li a{
			
			color:white;
		}
		.content_area{
			height:70px;
			width:100%;
			overflow:hidden;
		}
		
		.footer_area{
			width:100%;
			overflow:hidden;
		}
		.footer_area h3{
			text-align:center;
		}
	</style>
</head>
<body>
	<div class="header_area">
		<div class="logoarea">
			<h1><span class="x">X</span>Company</h1>
		</div>
		<div class="menu_area">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="login.php">Login</a></li>
				<li><a href="registration.php">Registration</a></li>
			</ul>
		</div>
	</div>
	<div class="content_area">
		<h1>Welcome to Our Company</h1>
	</div>
	<div class="footer_area">
		
	</div>

          <div class="reg">
			<h2>Registration</h2>




			<?php
			$nameerr=$emailerr=$gendererr=$passworderr="";


			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if(empty($_POST["name"]))
				{
					$nameerr="* Name requirment error!";
				}
				else
				{	
					$nameerr=$_POST["name"];	
				}
				if(empty($_POST["email"]))
				{
					$emailerr="* Email requirment error!";
				}
				else
				{	
					$emailerr=$_POST["email"];	
				}
				if(empty($_POST["gender"]))
				{
					$gendererr="* Gender requirment error!";
				}
				else
				{	
					$gendererr=$_POST["gender"];	
				}
				if(empty($_POST["password"]))
				{
					$passworderr="* password requirment error!";
				}
				else
				{	
					$passworderr=$_POST["password"];	
				}
				
				
			}

			?>

			<form action="registration.php" method="post">
				
				<b>Name:</b>
				<input type="text" name="name">
				<span style="color:black"><?php echo $nameerr; ?></span><br><br>
				
				<b>Email:</b>
				<input type="text" name="email">
				<span style="color:black"><?php echo $emailerr; ?></span><br><br>
				
				<b>Gender</b>
				<input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Other">Other
				<span style="color:black"><?php echo $gendererr; ?></span>
				<br><br>
				
				<b>Password:</b>
				<input type="password" name="password">
				<span style="color:black"><?php echo $passworderr; ?></span><br><br>

				
				
				<input type="submit" value="submit">
				

			</form>
			
			<div class="logout">
		     <h1><a href="login.php">logout</a></h1>
	       </div>




			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "userdb";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			if($_SERVER["REQUEST_METHOD"] == "POST") {

				$sql = "INSERT INTO company (name,email,gender,password)
				VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["gender"]."','".$_POST["password"]."')";

				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
			}
			$conn->close();
			?>
			
			</div>
</body>
</html>

