<?php
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
		.header_area{
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
		.menu_area ul li a{
			
			color:white;
		}
		.menu ul li a{
			
			color:green;
		}
		.logout{
			width:100%
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
	
<hr/>
	<form action="dashboard.php" method="post">
	
	<div class="content_area">
		<h1>Welcome to Bob</h1>
	</div>
	<div class="menu">
			<ul>
				<li><a href="dashboard.php">Dasboard</a></li>
				<li><a href="view_profile.php">View_Profile</a></li>
				<li><a href="edit_profile.php">Edit_Profile</a></li>
				<li><a href="change_profile.php">Change_Profile</a></li>
				<li><a href="change_password.php">Change_password</a></li>
				<li><a href="logout">Logout</a></li>
			</ul>
		</div>
		
		<div class="logout">
		<h1><a href="login.php">logout</a></h1>
	</div>
		
	
	
	
	
</body>
