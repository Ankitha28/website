<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'bloodbank';

$con = mysqli_connect($server,$username,$password,$db);

if ($con) {
	// echo "Connection Successful";
	?>
	<script>
		alert('connection successful');
	</script>
	<?php
}else{
    // echo "No Connection";
    die("no connection".mysqli_connect_error());
}


?>