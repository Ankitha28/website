<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width",initial-scale="1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--fontawesome-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css">
<!--external stylesheet-->
<link rel="stylesheet" type="text/css" href="style/usernav.css">
<link rel="stylesheet" type="text/css" href="style/sidebar.css">
<link rel="stylesheet" type="text/css" href="style/profile.css">
</head>

<body>
	<!--bg image starts-->
<div class="bgimage container-fluid">   
<!--navbar starts-->	
<div class="container-fluid menu ">
<nav class="navbar navbar-expand-lg my-navbar">
	<button class="navbar-toggler " data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon "></span>
	</button>

	<div class="collapse navbar-collapse" id="collapse_target">
	<a href="#" class="navbar-brand">
		<img src="images/icon.png" alt="donate" width="50" height="50">
	 <span class="navbar-text" >Donate Blood</span>
	</a>

  <ul class="navbar-nav m-auto">
		<li class="nav-item">
			<a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#"><i class="fas fa-notes-medical"></i> About Donation</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="registration.php"><i class="far fa-id-card"></i> Register</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="donarlist.php"><i class="far fa-list-alt"></i> Donors list </a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="search.php"><i class="fas fa-search"></i> Search </a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i>
			 <?php echo $_SESSION['name']; ?>
			</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2" style="background-color: #4682B4;">
          <a class="dropdown-item text-white" href="logout.php" style="background-color: #B0C4DE;"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
        </li>
	</ul>
</div>
</nav> 
</div>
<!--navbar ends-->

<!--sidebar starts-->
<input type="checkbox" id="check">
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
		<i class="fas fa-times" id="cancel"></i>
	</label>
<div class="sidebar">
 <header>My Dashboard</header>
	<ul>
		<li><a href="profile.php"><i class="fas fa-user"></i>Profile</a></li>
		<li><a href="update.php"><i class="fas fa-edit"></i>Update profile</a></li>
		<li><a href="chpass.php"><i class="fas fa-lock"></i>Change password</a></li>
		<li><a href="delacc.php"><i class="fas fa-trash-alt"></i>Delete account</a></li>
	</ul>
</div>
<!--sidebar ends--> 
