<?php
include('include/usernav.php');

if(!isset($_SESSION['name'])){

	header('loaction:registration.php');
}

if($_SESSION['is_login']){
	$email = $_SESSION['email'];
}else{
	// if not directs to this location //
	header("location:signin.php");
}
?>
<div>
  <h1 class="text-center" style="font-style: italic; font-family: sans-serif;font-weight: bold; color: #E9967A;padding-top: 150px; margin-left:10px;">Hello!! Welcome <u><?php echo $_SESSION['name'];?></u></h1>
  <h3 class="text-center" style="font-family: arial; font-weight: bold; color: #DDA0DD;">You can manage your account here.</h3>
</div>



</div>
<!--bg image ends-->
</body>
</html>