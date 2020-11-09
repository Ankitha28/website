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
<link rel="stylesheet" type="text/css" href="style/navigation.css">
<link rel="stylesheet" type="text/css" href="style/registration.css">
<link rel="stylesheet" type="text/css" href="style/process.css">
<link rel="stylesheet" type="text/css" href="style/types.css">
<link rel="stylesheet" type="text/css" href="style/requirements.css">

<!--animation css link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
</head>

<body>
<div class="bg">
<div class=" container-fluid  menu1">
<nav class="navbar navbar-expand-lg mybar">
	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="collapse_target">
	<a href="#" class="navbar-brand">
		<img src="images/icon.png" alt="donate" width="50" height="50">
	 <span class="navbar-text" >Lifeline</span>
	</a>

  <ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="aboutus.php"><i class="far fa-address-card"></i> About Us</a>
		</li>
		<li class="nav-item dropdown">
		 <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-notes-medical"></i> Blood sDonation</a>
			<div class="dropdown-menu" aria-labelledby="dropdownMenu1">
             <a class="dropdown-item " href="requirements.php" ><i class="far fa-check-square"></i> Eligibility Reqirements</a>
             <a class="dropdown-item " href="process.php" ><i class="fas fa-retweet"></i></i> Donation Process</a>
              <a class="dropdown-item " href="types.php"><i class="fas fa-list-ol"></i></i> Types</a>
            </div>
            
		</li>
		<li class="nav-item">
			<a class="nav-link" href="registration.php"><i class="fas fa-file-signature"></i> Register</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="donarlist.php"><i class="far fa-list-alt"></i> Donors list </a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="search.php"><i class="fas fa-search"></i> Search </a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="signin.php"><i class="fas fa-sign-in-alt"></i> Sign In</a>
		</li>
	</ul>
</div>
</nav>
</div>
</div>