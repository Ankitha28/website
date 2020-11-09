<?php
include('include/usernav.php');
?>
<?php
//connecting database //
include('db/connection.php');

if($_SESSION['is_login']){
   $email = $_SESSION['email'];
}else{
   // if not directs to this location //
   header("location:signin.php");
}

$uid = $_SESSION['userId'];
// when user submits the form //
if(isset($_POST['change'])){
	// gets all the inputs //
	$currentpassword = $_POST['currentpass'];
	$newpassword = $_POST['newpass'];
	$confirmpassword  = $_POST['confirmpass'];

    // encrypting the new password entered by user using hash function //
	$newpass = password_hash($newpassword, PASSWORD_DEFAULT);
	
    
    // checks whether current password is correct or not //
	$sql = "select * from donarregistration where id = '$uid' ";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_object($result);

	if(password_verify($currentpassword, $row->password)){
		//checks if newpassword is equal to confirmpassword //
         if($newpassword == $confirmpassword ){
            // if password matches update the password //
         	$q = "UPDATE donarregistration SET password = '$newpass' WHERE id = '$uid' ";
         	$res = mysqli_query($con,$q);
         	if($res){
         		$msg = '<div class="alert alert-success alert-dismissible fade show  msg mt-3" role="alert">
                              <strong>Password has been updated.</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
                            

         	}else{
                  $msgerror = '<div class="alert alert-danger alert-dismissible fade show msg  mt-3" role="alert">
                              <strong>Password is not changed !!</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
         	}

         }else{
         	// message if new and confirm passwords are not matching //
         	$message = '<div class="alert alert-danger alert-dismissible fade show msg mt-3" role="alert">
                              <strong>Password is not matching!!</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
         }

	}else{
		// message if current password is not correct //
		$p = '<div class="alert alert-danger alert-dismissible fade show msg mt-3" role="alert">
                              <strong>Password is not correct!!</strong>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                              </button>
                              </div>';
	}
}

?>



<!--header starts here-->
<h3 class="text-center" style="color: #8B0000; background-color: #FF7F50;margin-left: 470px; width: 500px; margin-top: 150px;" ><u>Change Password</u></h3>
<!--header ends here-->
<?php if(isset($msg)) echo $msg; ?>
<?php if(isset($msgerror)) echo $msgerror; ?>
<?php if(isset($p)) echo $p ;?>
<?php if(isset($message)) echo $message; ?>
<!--form starts here-->
<form action="" method="post" class="f1 border border-dark mt-4" style="background-color: #DCDCDC;">
<div class="form-group">
 <label for="currentpass"  class="p1">Current Password:</label>
 <input type="password" name="currentpass" class="form-control" placeholder=" Current Password"  required>
 </div>

<div class="form-group">
 <label for="newpas"  class="p1"> New Password:</label>
 <input type="password" name="newpass" class="form-control" placeholder="New password"  required>
</div>

<div class="form-group">
 <label for="confirmpass"  class="p1"> Confirm Password:</label>
 <input type="password" name="confirmpass" class="form-control" placeholder="Confirm password"  required>
 </div>

<div class="form-group text-center">
	<button type="submit" name="change" class="btn btn-lg btn-info" style="width: 180px; font-weight: bold;" >Change</button>
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