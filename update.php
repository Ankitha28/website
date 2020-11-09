<?php
include('include/usernav.php');
// connects database //
include('db/connection.php');
//checks if user has logged in//
if($_SESSION['is_login']){
	$email = $_SESSION['email'];
}else{
	// if not directs to this location //
	header("location:signin.php");
}

//to display user data//
$sql = "select name ,email,contact_no,gender,age, area, city ,weight from donarregistration where email ='$email '";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result )==1){
	$row = mysqli_fetch_assoc($result);
	$name = $row['name'];
	$email = $row['email'];
	$contactno = $row['contact_no'];
	$gender = $row['gender'];
	$age = $row['age'];
	$area = $row['area'];
	$city = $row['city'];
	$weight = $row['weight'];
}

//to update user data//
if(isset($_POST['update'])){
	// get values entered by user//
	$name = $_POST['name']; 
	$email = $_POST['email']; 
	$contactno = $_POST['contact_no']; 
	$gender = $_POST['gender'];
	$age = $_POST['age']; 
	$area = $_POST['area']; 
	$city = $_POST['city']; 
    $weight = $_POST['weight'];

	$q = "UPDATE donarregistration SET name = '$name' , email = '$email', contact_no ='$contactno', gender = '$gender', age = '$age', area = '$area', city = '$city', weight = '$weight'  WHERE email = '$email ' ";
	$res = mysqli_query($con,$q);
	if($res){
		// message for details are updated //
		$message = '<div class="alert alert-success alert-dismissible fade show  msg mt-3" role="alert">
                              <strong>Your details has been updated.</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
	}else{
		// message if details are not updated //
		$msgerror ='<div class="alert alert-danger alert-dismissible fade show  msg mt-3" role="alert">
                              <strong>Password has been updated.</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
	}
}
?>

<!--header starts here-->
<h3 class=" text-center" style="color: #8B0000; background-color: #FF7F50;margin-left: 470px; width: 500px; margin-top: 150px;"><u>Update your details here</u></h3>
<!--header ends here-->

<?php if(isset($message)) echo $message; ?>
<?php if(isset($msgerror))echo $msgerror; ?>
<!--form starts here-->
<form action="" method="post" class="f1 border border-dark mt-3 mb-3" style="background-color: #DCDCDC;">

<div class="form-group">
      <label for="name" class="p1">Name:</label>
      <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" placeholder="Enter full name" id="name" required>
</div>

<div class="form-group">
      <label for="email" class="p1">Email ID:</label>
      <input type="email" name="email" class="form-control" value="<?php echo $email ; ?>" placeholder="Enter email ID" id="email" required>
</div> 

<div class="form-group">
      <label for="contact_no" class="p1">Contact Number:</label>
      <input type="text" name="contact_no" class="form-control" value="<?php echo $contactno; ?>" placeholder="Enter contact no. " id="contact_no" required>
</div>

<div class="form-group">
<label for="gender" class="p1">Gender:</label>
 <label>
 <input type="radio" name="gender" id="gender" value="male" style="margin-left: 20px;" required >Male
 </label>
 <label>
 <input type="radio" name="gender" id="gender" value="female " style="margin-left: 20px;" required>Female	
 <label>
 <input type="radio" name="gender" id="gender" value="transgender"  style="margin-left: 20px;" required  >Transgender
 </label>
</div>

<div class="form-group">
  <label for="age" class="p1"> Age:</label>
  <input type="text" name="age" class="form-control" value="<?php echo $age; ?>" placeholder="Enter age" id="age" required>
</div>

<div class="form-group">
  <label for="city" class="p1">Enter City:</label>
  <input type="city" name="city" class="form-control" value="<?php echo $city; ?>" placeholder="---City---" id="city" required>
</div>

<div class="form-group">
  <label for="area" class="p1">Enter Area:</label>
  <input type="area" name="area" class="form-control" value="<?php echo $area; ?>" placeholder="---Area---" id="area" required>
</div>

<div class="form-group">
	<label for="weight" class="p1">Enter Weight:</label>
	<input type="weight" name="weight" class="form-control" value="<?php echo $weight; ?>" placeholder="---Weight---" id="weight" required>
</div>

<div class="form-group text-center">
<button type="submit" name="update" id="update" class="btn btn-lg btn-success" style="width: 180px; font-weight: bold;">Update</button> 
</div>
</form>
<!--form ends here-->
</div> 
<!-- bg image ends here-->
<script type="text/javascript">
  $(window).on('scroll',function(){
        if($(window).scrollTop()){
          $(' .my-navbar').addClass('blue');
        }else{
          $(' .my-navbar').removeClass('blue'); 
        }

  })
</script>
</body>
</html>